<template>
    <div>
        <small>{{user.nickname}}</small>
        <!--<pre>{{user}}</pre>-->
        <p>{{message.body}}</p>
        <hr class="msg-hr">
    </div>
</template>
<style lang="css">
    .msg-hr{
        margin-top: 7px;
        margin-bottom: 7px;
    }
</style>
<script type="text/babel">

    export default{
        props: [
            'message',
            'user'
        ],
        data(){
            return {}
        }
    }
</script>
