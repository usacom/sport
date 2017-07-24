
window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

window.$ = window.jQuery = require('jquery');

require('bootstrap-sass');

/**
 * Vue is a modern JavaScript library for building interactive web interfaces
 * using reactive data binding and reusable components. Vue's API is clean
 * and simple, leaving you to focus on building your next great project.
 */

window.Vue = require('vue');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common = {
    'X-CSRF-TOKEN': window.Laravel.csrfToken,
    'X-Requested-With': 'XMLHttpRequest',
    'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjUxODJmZDUyY2RlNGRjZTM3Mjc4MzhlYmYyMTNhZDY1MzczYTIxZWY1YWUxNzU0ZTA1MjExNmQ4OTkyM2JmODY3ZDAxYjMyNjc1NmMwNmNiIn0.eyJhdWQiOiIyIiwianRpIjoiNTE4MmZkNTJjZGU0ZGNlMzcyNzgzOGViZjIxM2FkNjUzNzNhMjFlZjVhZTE3NTRlMDUyMTE2ZDg5OTIzYmY4NjdkMDFiMzI2NzU2YzA2Y2IiLCJpYXQiOjE0ODY4ODI0MzksIm5iZiI6MTQ4Njg4MjQzOSwiZXhwIjoxNTE4NDE4NDM5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.N0GOCu1GN6v9w6s8GcSX_H_HxxDhorByu3ScZk4JvfwG-wXiv3ZYLckg6GAaTlMaRwc6OgZ28kklUmbQf2XDd1GRHX_ooH9wkNN7ufYyj2ZvKTq2IDvophCcRNIjoikB1xDoIMlLIVaHdJ3jlowY21kZ_b50JtsqvEVktuNmymVAgr2QLkXxAAUGMDQTQJ0KST3tZCwi6RiFK5IKZhI4WdoAMyImHqwYF7hD8vjq7Eu7KFayYsLCmFUuNhD0aX_8YmYuel4nPbX-jwkhhz5pconMrw0wwUeVvbUzBqLQmOXE5NCNh2pBthLIH3HIturn29P5S3eb-jVHyiFfxRxKNSDUhH0gj3Zi_COuoDooBB8V1oJFZ6G22uvUa0g9dHOslZpu1l51aJj1iNXT8Krt1UryZy601mJT9Orwjw1tTTbsdGQhR1X9teMmRo61ccEmVrRqY78JF1RFht7kB2o96ycMgpIxTgr9GMFxTragzqyWwWhuWyecH6rMYlfcgc6p-tblriV-rk8chAOHLyLdEEyFYswkPkgHZCA-tvya3ZPOxK7v3zvSbTkxXd8MNzbpCqbRxbKAXwAZPyubm7t8e3_JltI9InN7Uc32dQ7jToZffhHtfl0I4ehSPGf_gUS8waHFu9zQXgZgrMOyf0bmRZc7JVbI_fkmkhR5EpVoqxI'
};

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */


import Echo from "laravel-echo"


// let io = require('socket.io-client');
// let socket = io('ws://localhost:6001', {
//         query: "Authorization=Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjUxODJmZDUyY2RlNGRjZTM3Mjc4MzhlYmYyMTNhZDY1MzczYTIxZWY1YWUxNzU0ZTA1MjExNmQ4OTkyM2JmODY3ZDAxYjMyNjc1NmMwNmNiIn0.eyJhdWQiOiIyIiwianRpIjoiNTE4MmZkNTJjZGU0ZGNlMzcyNzgzOGViZjIxM2FkNjUzNzNhMjFlZjVhZTE3NTRlMDUyMTE2ZDg5OTIzYmY4NjdkMDFiMzI2NzU2YzA2Y2IiLCJpYXQiOjE0ODY4ODI0MzksIm5iZiI6MTQ4Njg4MjQzOSwiZXhwIjoxNTE4NDE4NDM5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.N0GOCu1GN6v9w6s8GcSX_H_HxxDhorByu3ScZk4JvfwG-wXiv3ZYLckg6GAaTlMaRwc6OgZ28kklUmbQf2XDd1GRHX_ooH9wkNN7ufYyj2ZvKTq2IDvophCcRNIjoikB1xDoIMlLIVaHdJ3jlowY21kZ_b50JtsqvEVktuNmymVAgr2QLkXxAAUGMDQTQJ0KST3tZCwi6RiFK5IKZhI4WdoAMyImHqwYF7hD8vjq7Eu7KFayYsLCmFUuNhD0aX_8YmYuel4nPbX-jwkhhz5pconMrw0wwUeVvbUzBqLQmOXE5NCNh2pBthLIH3HIturn29P5S3eb-jVHyiFfxRxKNSDUhH0gj3Zi_COuoDooBB8V1oJFZ6G22uvUa0g9dHOslZpu1l51aJj1iNXT8Krt1UryZy601mJT9Orwjw1tTTbsdGQhR1X9teMmRo61ccEmVrRqY78JF1RFht7kB2o96ycMgpIxTgr9GMFxTragzqyWwWhuWyecH6rMYlfcgc6p-tblriV-rk8chAOHLyLdEEyFYswkPkgHZCA-tvya3ZPOxK7v3zvSbTkxXd8MNzbpCqbRxbKAXwAZPyubm7t8e3_JltI9InN7Uc32dQ7jToZffhHtfl0I4ehSPGf_gUS8waHFu9zQXgZgrMOyf0bmRZc7JVbI_fkmkhR5EpVoqxI"
//     }
// );
//
// let id = 1;
// let channel  = 'private-App.User.' + id + ':App\\Events\\MessagesEvent';
// socket.on('connect', function(){
//     socket.emit('subscribe', channel);
//     console.log('test')
// });
// socket.on('error', function (error) {
//     console.warn(error)
// });
// socket.on('message', function (message) {
//     console.warn(message)
// });
// socket.on('private-App.User.3:App\\Events\\MessagesEvent', function (msg) {
//     console.log(msg)
// });
// socket.on(channel, function (msg) {
//     console.log(msg)
// });
//
// socket.on('disconnect', function () {
// });

// window.Echo = new Echo({
//     broadcaster: 'socket.io',
//     host: 'http://band2.dev:6001',
// });
// window.socketId = window.Echo.socketId();