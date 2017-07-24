<template>
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Your msg"
               v-model="msgText" @keyup.enter="pushMsg()">
        <span class="input-group-btn">
            <button class="btn btn-primary" type="button" @click="pushMsg()">Send</button>
        </span>
    </div>
</template>
<style lang="css">
</style>
<script type="text/babel">

    export default{
        data(){
            return {
                msgText: '',

            }
        },
        methods: {
            pushMsg(){
                this.$emit('messagesent', {
                    message: this.msgText
                });
                this.msgText = '';
            }
        }
    }
</script>
