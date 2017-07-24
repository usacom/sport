/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


Vue.component('register', require('./components/register.vue'));
// Vue.component('chat-log', require('./components/chat-log.vue'));
// Vue.component('chat-msg', require('./components/chat-msg.vue'));
// Vue.component('chat-comp', require('./components/chat-composer.vue'));

const app = new Vue({
    el: '#app',
    data(){
        return {
            userId: '',
        }
    },
    created(){
    },
    mounted(){
    }
});
