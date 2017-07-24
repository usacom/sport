<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="form-group">
                    <label class="radio-inline">
                        <input type="radio" name="access_token" v-model="access_token" id="access_token1"
                               value="eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjUxODJmZDUyY2RlNGRjZTM3Mjc4MzhlYmYyMTNhZDY1MzczYTIxZWY1YWUxNzU0ZTA1MjExNmQ4OTkyM2JmODY3ZDAxYjMyNjc1NmMwNmNiIn0.eyJhdWQiOiIyIiwianRpIjoiNTE4MmZkNTJjZGU0ZGNlMzcyNzgzOGViZjIxM2FkNjUzNzNhMjFlZjVhZTE3NTRlMDUyMTE2ZDg5OTIzYmY4NjdkMDFiMzI2NzU2YzA2Y2IiLCJpYXQiOjE0ODY4ODI0MzksIm5iZiI6MTQ4Njg4MjQzOSwiZXhwIjoxNTE4NDE4NDM5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.N0GOCu1GN6v9w6s8GcSX_H_HxxDhorByu3ScZk4JvfwG-wXiv3ZYLckg6GAaTlMaRwc6OgZ28kklUmbQf2XDd1GRHX_ooH9wkNN7ufYyj2ZvKTq2IDvophCcRNIjoikB1xDoIMlLIVaHdJ3jlowY21kZ_b50JtsqvEVktuNmymVAgr2QLkXxAAUGMDQTQJ0KST3tZCwi6RiFK5IKZhI4WdoAMyImHqwYF7hD8vjq7Eu7KFayYsLCmFUuNhD0aX_8YmYuel4nPbX-jwkhhz5pconMrw0wwUeVvbUzBqLQmOXE5NCNh2pBthLIH3HIturn29P5S3eb-jVHyiFfxRxKNSDUhH0gj3Zi_COuoDooBB8V1oJFZ6G22uvUa0g9dHOslZpu1l51aJj1iNXT8Krt1UryZy601mJT9Orwjw1tTTbsdGQhR1X9teMmRo61ccEmVrRqY78JF1RFht7kB2o96ycMgpIxTgr9GMFxTragzqyWwWhuWyecH6rMYlfcgc6p-tblriV-rk8chAOHLyLdEEyFYswkPkgHZCA-tvya3ZPOxK7v3zvSbTkxXd8MNzbpCqbRxbKAXwAZPyubm7t8e3_JltI9InN7Uc32dQ7jToZffhHtfl0I4ehSPGf_gUS8waHFu9zQXgZgrMOyf0bmRZc7JVbI_fkmkhR5EpVoqxI">
                        1 (usa_com)
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="access_token" v-model="access_token" id="access_token2"
                               value="eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjY3ZTU4MzRhMWQ1ODg2OGUxMmFlMDkxY2Q2NGZhMjMyZGMwMGQzMjk1NmMwZGI1ZWE4YTE0OTU5MjJiMmFhMDkwYmQ2Mjg3Njg0ZDM2YTNiIn0.eyJhdWQiOiIzIiwianRpIjoiNjdlNTgzNGExZDU4ODY4ZTEyYWUwOTFjZDY0ZmEyMzJkYzAwZDMyOTU2YzBkYjVlYThhMTQ5NTkyMmIyYWEwOTBiZDYyODc2ODRkMzZhM2IiLCJpYXQiOjE0ODcwMDQ5NjMsIm5iZiI6MTQ4NzAwNDk2MywiZXhwIjoxNTE4NTQwOTYzLCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.Tij0hh62BUwTxsU-blz8wRVVUDCfBit0b24ydawel4DyRjvb_fePSxQwP577PIfy1Yf2_278_RdvRex3SqyOQ9mibvU8KkkvDIqNNDBtX_83ZrBDOeWBapghbD5W6DGC4tYOryrhvNUHsgUpFMuiFTPuKu1dbpZ4n8XLBhqJAGWcS_yN0avVNHaah9ftZ4nnC3c-3WKAU-gIvc2lEcn36DZ-_Uj6uve0XdAlM03J1Dxbav0EblMF2WZPOdCy_G9fBYnZbHTAt1S88yRcRsi_zoLp-9OsC1Zd2tGpYABnbD_T0xuVJBq40nQsGTPsqVe4bKjQYr4RkVblUu-MGD8RDG90HQrfDEAykc0XSo52R_AcjviDVYxugmq6ZwdCvZBKVRt9evo4gJFY1fDgLc3dWIXP1MzV1kKE5OISTplADjGjJe8b_pP93R0Yq0hoAk_VvDldTGnQuhxdWaR3aElKxdecwiSr6j8f8t-NHvPP9WiTTjMuRCTWQNTd9vMRkA11fac9KG5FbfHsqnRkoo1w4Qf9Hpo8C2El-LyALMxpb819zGOyCH3FQoqSpfFvUaI9a_WuJ-WtqUvOmEHdbikEZHwHMc0oz8FCGdMFQvy2D4BTlfJTKpG2aoSny-y6N9DNLt9ZLpOv8KoyhgXcCzbRohGGxLDps_IMCCQKBtnaMCQ">
                        2 (fortael)
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="access_token" v-model="access_token" id="access_token3"
                               value="eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImE2NGI0Y2RhNjA4ZjU1YzM4OTdmNjAyNWFmMzE0NTM1N2Y0MjA5OWY4ZjM4OWMwOGNhMDE2MmJjM2VkY2IxNTk3Yzg4OWIxMTU4ODkzYWIyIn0.eyJhdWQiOiIzIiwianRpIjoiYTY0YjRjZGE2MDhmNTVjMzg5N2Y2MDI1YWYzMTQ1MzU3ZjQyMDk5ZjhmMzg5YzA4Y2EwMTYyYmMzZWRjYjE1OTdjODg5YjExNTg4OTNhYjIiLCJpYXQiOjE0ODcwMDUwMTEsIm5iZiI6MTQ4NzAwNTAxMSwiZXhwIjoxNTE4NTQxMDExLCJzdWIiOiIzIiwic2NvcGVzIjpbXX0.B2WXmRn-mvBgtn9WD00d-v_hswFxZ5FbarZnExWwTlM3heodpMKb5R7Mh2Nj3VidINlGiO4VZqdI5f2CgEzKj2Nlim4yybhkhZZIK5WfaoA1drwM-cjBo4ANblo5lhgrwrkthcay4djiOHwK9JOl-h6SZMOGyKpyKszPhabf6SwJDB5KQxcMoxtsBBAPDODcF4ot5iMIxxengd79TzAljAts_cg7Wpp8n30QOzl7tiC3dLYHFA8adFRKYnCj5BohwAXImc-3qbLA7Mdhblb0LjDoqrNCbf13ksl5fBKC5iZczQ5OlnqKj9KCi942P8TLCz2Zzn6LPQxSB6H9brtsy07e0J8SDn_BdBE2r4Vqj-8pFcsMkfje1DfUeR9KBdPZ6U8KqFuySEW-sh23mJjZrSkcIq3sXQKNAjLWysDycTpkQcqmGvmCBoPWdKSb117cNg37m-x6PVHWtNIupTentze39qLtMkbA0xrQ2Nodfjw0qtvZyrs1lL4DIAEzGTSq4x1pxMCiLRraDib7vhpyV1sOCqO36YCP-KhNLnrJg_lK-uhMVibI4RhbzqrBq_H_7zN4pKBwQBkFRXyTmycl192Ha9SnLXK94Rt4QsvuRD0tA8byW7rxmmHFX0yzu2t5PIQZBcNhUVT5TQNZj2QZ2TG8P7evvHWeAidaX856f58">
                        3 (Vadim)
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="access_token" v-model="access_token" id="access_token4" value="">4
                        (none)
                    </label>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Chat
                        <button type="button" @click="reconect" class="btn btn-default btn-xs pull-right">reconect
                        </button>
                        <button type="button" @click="loadList" class="btn btn-default btn-xs pull-right">load</button>
                    </div>
                    <div class="panel-body">
                        <div class="row content-msg">
                            <div class="col-md-4 padding-none">
                                <ul class="nav nav-pills nav-stacked">

                                    <li role="presentation" v-for="dialog in dialogList">
                                        <button type="button" class="btn btn-default btn-block"
                                                :class="{'btn-primary':dialogSelect==dialog['id']}"
                                                @click="selectDialog(dialog['id'])">
                                            {{dialog['subject']}}
                                        </button>
                                    </li>

                                </ul>
                            </div>
                            <div class="col-md-8">
                                <div>
                                    <chat-msg v-if="dialogSelect!=''" v-for="message in messages" :message="message"
                                              :user="users[message.user_id]"></chat-msg>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-8">
                                <chat-comp v-if="dialogSelect!=''" v-on:messagesent="addMsg"></chat-comp>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="button" @click="test" class="btn btn-default">test</button>
                <!--<pre>{{data11.data}}</pre>-->
                <div v-html="data11.data"></div>
            </div>
        </div>
    </div>
</template>
<style lang="css">
    .content-msg {
        min-height: 350px;
    }

    .padding-none {
        padding: 0;
        height: 100%;
        border-right: #3097D1 1px solid;
    }

    .nav-pills > li > button {
        height: 40px;
        border-radius: 0;
        border: none;
        text-align: left;
    }
</style>
<script type="text/babel">

    export default{
        data(){
            return {
                access_token: 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjUxODJmZDUyY2RlNGRjZTM3Mjc4MzhlYmYyMTNhZDY1MzczYTIxZWY1YWUxNzU0ZTA1MjExNmQ4OTkyM2JmODY3ZDAxYjMyNjc1NmMwNmNiIn0.eyJhdWQiOiIyIiwianRpIjoiNTE4MmZkNTJjZGU0ZGNlMzcyNzgzOGViZjIxM2FkNjUzNzNhMjFlZjVhZTE3NTRlMDUyMTE2ZDg5OTIzYmY4NjdkMDFiMzI2NzU2YzA2Y2IiLCJpYXQiOjE0ODY4ODI0MzksIm5iZiI6MTQ4Njg4MjQzOSwiZXhwIjoxNTE4NDE4NDM5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.N0GOCu1GN6v9w6s8GcSX_H_HxxDhorByu3ScZk4JvfwG-wXiv3ZYLckg6GAaTlMaRwc6OgZ28kklUmbQf2XDd1GRHX_ooH9wkNN7ufYyj2ZvKTq2IDvophCcRNIjoikB1xDoIMlLIVaHdJ3jlowY21kZ_b50JtsqvEVktuNmymVAgr2QLkXxAAUGMDQTQJ0KST3tZCwi6RiFK5IKZhI4WdoAMyImHqwYF7hD8vjq7Eu7KFayYsLCmFUuNhD0aX_8YmYuel4nPbX-jwkhhz5pconMrw0wwUeVvbUzBqLQmOXE5NCNh2pBthLIH3HIturn29P5S3eb-jVHyiFfxRxKNSDUhH0gj3Zi_COuoDooBB8V1oJFZ6G22uvUa0g9dHOslZpu1l51aJj1iNXT8Krt1UryZy601mJT9Orwjw1tTTbsdGQhR1X9teMmRo61ccEmVrRqY78JF1RFht7kB2o96ycMgpIxTgr9GMFxTragzqyWwWhuWyecH6rMYlfcgc6p-tblriV-rk8chAOHLyLdEEyFYswkPkgHZCA-tvya3ZPOxK7v3zvSbTkxXd8MNzbpCqbRxbKAXwAZPyubm7t8e3_JltI9InN7Uc32dQ7jToZffhHtfl0I4ehSPGf_gUS8waHFu9zQXgZgrMOyf0bmRZc7JVbI_fkmkhR5EpVoqxI',
                dialogList: [],
                dialogSelect: '',
                users: [],
                messages: [],


                data11: ''
            }
        },
        mounted(){
            this.loadList();
            this.reconect();

        },
        methods: {
            test(){
                axios.post('/broadcasting/auth', {

                })
                        .then((response) => {
                            this.data11 = response;
                            console.log(response.data);
                        })
                        .catch((error) => {
                            this.data11 = error.response;
                            console.log(error.response);
                        });
            },
            reconect(){
                this.setToken();
                axios.get('/api/user')
                        .then((response) => {
                            console.log(response.data);
                            this.userId = response.data.id;
                            Echo.private('App.User.' + this.userId)
                                    .listen('MessagesEvent', (e)=> {
                                        console.log(e)
                                        if (e.message != null) {
                                            if (e.message.thread_id == this.dialogSelect) {
                                                this.messages.push(e.message);
                                            }
                                        }
                                    });

                        })
                        .catch((error) => {
                            console.log(error.response);
                        });
            },
            loadList(){
                this.setToken();
                axios.get('/api/messages/list')
                        .then((response) => {
                            this.dialogList = response.data;
                        })
                        .catch((error) => {
                            console.log(error.response);
                        });
            },
            setToken(){
                window.axios.defaults.headers.common['Authorization'] = 'Bearer ' + this.access_token;
            },

            selectDialog(id){
                this.messages = [];
                this.setToken();
                axios.get('/api/messages/show/' + id)
                        .then((response) => {
                            let users = response.data.users;
                            users.forEach((item)=> {
                                this.users[item['id']] = item
                            })
                            this.messages = response.data.messages;
                            this.dialogSelect = id;

                        })
                        .catch((error) => {
                            console.log(error.response);
                        });
            },
            addMsg(message){
                // this.messages.push(message);
                this.setToken();
                axios.put('/api/messages/show/' + this.dialogSelect, {
                    message: message.message,
                })
                        .then((response) => {
                            // console.log(response.data);
                            // this.messages.push(response.data.message);
                        })
                        .catch((error) => {
                            console.log(error.response);
                            this.data11 = error.response;
                        });
            }
        }
    }
</script>
