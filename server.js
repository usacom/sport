let host = 'http://band2.dev/';
let request = require('request'),
    io = require('socket.io')(6001),
    Redis = require('ioredis'),
    redis = new Redis;

io.use(function (socket, next) {
    request.get({
        url: host+'api/user',
        headers: {Authorization: socket.handshake.query['Authorization']},
        json: true
    }, function (error, response) {
        if(response.body.id != null){
            return next();
        }
        return next(new Error('Auth error'));
    });
});

io.sockets.on('connection',function(socket){
    socket.on('subscribe', function (channel) {
        request.get({
            url: host+'api/user',
            headers: {Authorization: socket.handshake.query['Authorization']},
            json: true
        }, function (error, response) {
            if(response.body.id != null){
                let channelCheck  = 'private-App.User.' + response.body.id + ':App\\Events\\MessagesEvent';
                if(channel == channelCheck){
                    socket.join(channel, function (error) {
                        socket.send('Join to:' +channel)
                    });
                    return;
                }
            }
            console.log(response.body);
        });

    })
});

redis.psubscribe('*', function (error, count) {

});
redis.on('pmessage', function (pattern, channel, message) {
    let messageNew = JSON.parse(message);
    io.to(channel + ':' + messageNew.event)
        .emit(channel + ':' + messageNew.event, messageNew.data);
    console.log(channel, message);
});