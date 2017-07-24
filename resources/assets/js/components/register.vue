<template>
    <div>

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
                <input type="radio" name="access_token" v-model="access_token" id="access_token4" value="">4 (none)
            </label>
        </div>

        <div class="form-group">
            <label for="access_token">User access token</label>
            <textarea class="form-control disabled" disabled="disabled" id="access_token" rows="3"
                      v-model="access_token"> </textarea>

        </div>
        <h1>User API</h1>

        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#apiReg"
                aria-expanded="false" aria-controls="apiReg">
            api/register (post)







        </button>
        <br><br>
        <div class="collapse" id="apiReg">
            <div class="well">
                <div class="form-group">
                    <label for="nickname">nick name</label>
                    <input type="text" class="form-control" v-model="nickname1" id="nickname" placeholder="nick name">
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" class="form-control" v-model="email1" id="email" placeholder="nick name">
                </div>
                <div class="form-group">
                    <label for="password">password</label>
                    <input type="password" class="form-control" v-model="password1" id="password"
                           placeholder="password">
                </div>
                <button type="button" @click="register()" class="btn btn-default">отправить</button>
                <pre>{{data1}}</pre>
                <div>
                    {{data1['data']}}







                </div>
            </div>
        </div>


        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#getToken"
                aria-expanded="false" aria-controls="getToken">
            /oauth/token (post)







        </button>
        <br><br>
        <div class="collapse" id="getToken">
            <div class="well">
                <div class="form-group">
                    <label for="nickname2">nick name</label>
                    <input type="text" class="form-control" v-model="nickname2" id="nickname2" placeholder="nick name">
                </div>

                <div class="form-group">
                    <label for="password2">password</label>
                    <input type="password" class="form-control" v-model="password2" id="password2"
                           placeholder="password">
                </div>
                <button type="button" @click="getToken()" class="btn btn-default">отправить</button>
                <pre>{{data2}}</pre>
                <div>
                    <!--{{data2['data']}}-->
                </div>
            </div>
        </div>


        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#getDataUser"
                aria-expanded="false" aria-controls="getDataUser">
            /api/user (get)







        </button>
        <br><br>
        <div class="collapse" id="getDataUser">
            <div class="well">
                <button type="button" @click="getDataUser()" class="btn btn-default">отправить</button>
                <pre>{{data3}}</pre>
                <div>
                    <!--{{data2['data']}}-->
                </div>
            </div>
        </div>


        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#updateProfileUser"
                aria-expanded="false" aria-controls="updateProfileUser">
            /api/update (put)







        </button>
        <br><br>
        <div class="collapse" id="updateProfileUser">
            <div class="well">


                <div class="form-group form-inline">
                    <label for="name">name</label>
                    <input type="text" class="form-control" v-model="name" id="name" placeholder="name">
                    <label for="last_name">last name</label>
                    <input type="text" class="form-control" v-model="last_name" id="last_name" placeholder="last name">
                </div>
                <div class="form-group">
                    <label class="radio-inline">
                        <input type="radio" name="genderUser" v-model="genderUser" id="inlineRadio1" value="man"> M
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="genderUser" v-model="genderUser" id="inlineRadio2" value="woman"> W
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="genderUser" v-model="genderUser" id="inlineRadio3" value="test"> test
                    </label>
                </div>

                <div class="form-group">
                    <label for="birthday">birthday</label>
                    <input type="date" class="form-control" v-model="birthday" id="birthday" placeholder="birth day">
                </div>
                <div class="form-group">
                    <label for="job">Job</label>
                    <input type="text" class="form-control" v-model="job" id="job" placeholder="job">
                </div>


                <div class="form-group">
                    <label for="numberPhone">number Phone</label>
                    <input type="number" class="form-control" v-model="numberPhone" id="numberPhone"
                           placeholder="number Phone">
                </div>
                <div class="form-group">
                    <label for="length">length</label>
                    <input type="number" class="form-control" v-model="length" id="length" placeholder="length">
                </div>

                <div class="form-group">
                    <label for="weight">weight</label>
                    <input type="number" class="form-control" v-model="weight" id="weight" placeholder="weight">
                </div>


                <div class="form-group">
                    <label for="password4-1">new password</label>
                    <input type="password" class="form-control" v-model="password4_1" id="password4-1"
                           placeholder="password">
                </div>

                <div class="form-group">
                    <label for="password4-2">new password return</label>
                    <input type="password" class="form-control" v-model="password4_2" id="password4-2"
                           placeholder="password">
                </div>
                <button type="button" @click="updateProfileUser()" class="btn btn-default">отправить</button>
                <pre>{{data4}}</pre>
                <div>
                    {{genderUser}}







                </div>
            </div>
        </div>


        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#getProfile"
                aria-expanded="false" aria-controls="getProfile">
            /api/profile/{id} (get)







        </button>
        <br><br>
        <div class="collapse" id="getProfile">
            <div class="well">
                <div class="form-group">
                    <label for="nickname2">id user</label>
                    <input type="number" class="form-control" v-model="idUser" id="idUser" placeholder="id user">
                </div>

                <button type="button" @click="getProfile()" class="btn btn-default">отправить</button>
                <pre>{{data5['data']}}</pre>
                <div>
                    <!--{{data2['data']}}-->
                </div>
            </div>
        </div>


        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#search"
                aria-expanded="false" aria-controls="search">
            /api/search (get)







        </button>
        <br><br>
        <div class="collapse" id="search">
            <div class="well">
                <div class="form-group">
                    <label for="nickname3">nickname</label>
                    <input type="text" class="form-control" v-model="nickname3" id="nickname3" placeholder="nickname">
                </div>

                <div class="form-group">
                    <label for="name3">name</label>
                    <input type="text" class="form-control" v-model="name3" id="name3" placeholder="name">
                </div>
                <div class="form-group">
                    <label for="last_name3">last name</label>
                    <input type="text" class="form-control" v-model="last_name3" id="last_name3"
                           placeholder="last name">
                </div>
                <div class="form-group">
                    <label class="radio-inline">
                        <input type="radio" name="genderUser" v-model="genderUser3" id="genderUser3_1" value="man"> M
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="genderUser" v-model="genderUser3" id="genderUser3_2" value="woman"> W
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="genderUser" v-model="genderUser3" id="genderUser3_3" value=""> none
                    </label>
                </div>
                <div class="form-group">
                    <label for="birthday33">data</label>
                    <input type="date" class="form-control" v-model="birthday33" id="birthday33"
                           placeholder="year">
                </div>
                <div class="form-group">
                    <label for="birthday33_U">data max</label>
                    <input type="date" class="form-control" v-model="birthday33_U" id="birthday33_U"
                           placeholder="year">
                </div>
                <div class="form-group">
                    <label for="birthday3Y">year</label>
                    <input type="text" class="form-control" v-model="birthday3Y" id="birthday3Y"
                           placeholder="year">
                </div>
                <div class="form-group">
                    <label for="birthday3M">M</label>
                    <input type="text" class="form-control" v-model="birthday3M" id="birthday3M"
                           placeholder="M">
                </div>
                <div class="form-group">
                    <label for="birthday3D">day</label>
                    <input type="text" class="form-control" v-model="birthday3D" id="birthday3D"
                           placeholder="day">
                </div>
                <div class="form-group">
                    <label for="length3">length</label>
                    <input type="number" class="form-control" v-model="length3" id="length3" placeholder="length">
                </div>
                <div class="form-group">
                    <label for="maxlength">max length</label>
                    <input type="number" class="form-control" v-model="length_max3" id="maxlength"
                           placeholder="max length">
                </div>

                <div class="form-group">
                    <label for="weight3">weight</label>
                    <input type="number" class="form-control" v-model="weight3" id="weight3" placeholder="weight">
                </div>
                <div class="form-group">
                    <label for="maxweight">max weight</label>
                    <input type="number" class="form-control" v-model="weight_max3" id="maxweight"
                           placeholder="max weight">
                </div>
                <button type="button" @click="search()" class="btn btn-default">отправить</button>
                <pre>{{data6['data']}}</pre>
                <pre>{{data6}}</pre>
                <div>
                    <!--{{data2['data']}}-->
                </div>
            </div>
        </div>


        <h1>Friends API</h1>


        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#getFriends"
                aria-expanded="false" aria-controls="getFriends">
            /api/friend/list and /api/friend/subscribes and /api/friend/queryFriends (get)







        </button>
        <br><br>
        <div class="collapse" id="getFriends">
            <div class="well">
                <div class="form-group">
                    <label for="nickname2">type Subscribes (0 or 2)</label>
                    <input type="number" class="form-control" v-model="typeSubscribes" id="typeSubscribes"
                           placeholder="type Subscribes">
                </div>

                <button type="button" @click="getFriends()" class="btn btn-default">/friend/list</button>
                <button type="button" @click="getSubscribes()" class="btn btn-default">/friend/subscribes</button>
                <button type="button" @click="getSubscribes2()" class="btn btn-default">/friend/queryFriends</button>
                <pre>{{data7['data']}}</pre>
                <div>
                    <!--{{data2['data']}}-->
                </div>
            </div>
        </div>


        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#sendRequest"
                aria-expanded="false" aria-controls="sendRequest">
            /api/sendRequest (post)







        </button>
        <br><br>
        <div class="collapse" id="sendRequest">
            <div class="well">
                <div class="form-group">
                    <label for="idUser8">id user</label>
                    <input type="number" class="form-control" v-model="idUser8" id="idUser8" placeholder="id user">
                </div>

                <button type="button" @click="sendRequest()" class="btn btn-default">отправить</button>
                <pre>{{data8['data']}}</pre>
                <div>
                    <!--{{data2['data']}}-->
                </div>
            </div>
        </div>

        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#acceptRequestToFriends"
                aria-expanded="false" aria-controls="acceptRequestToFriends">
            /api/friend/acceptRequest and /api/friend/denyRequest and /api/friend/removeFriend (put)







        </button>
        <br><br>
        <div class="collapse" id="acceptRequestToFriends">
            <div class="well">
                <div class="form-group">
                    <label for="idUser9">id user</label>
                    <input type="number" class="form-control" v-model="idUser9" id="idUser9" placeholder="id user">
                </div>

                <button type="button" @click="acceptRequestToFriends()" class="btn btn-default">acceptRequestToFriends







                </button>
                <button type="button" @click="denyRequestToFriends()" class="btn btn-default">denyRequestToFriends







                </button>
                <button type="button" @click="removeFriend()" class="btn btn-default">removeFriend</button>
                <pre>{{data9['data']}}</pre>
                <div>
                    <!--{{data2['data']}}-->
                </div>
            </div>
        </div>

        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#testUserGetStatusFriends"
                aria-expanded="false" aria-controls="testUserGetStatusFriends">
            test user







        </button>
        <br><br>
        <div class="collapse" id="testUserGetStatusFriends">
            <div class="well">
                <div class="form-group">
                    <label for="idUser17">id user</label>
                    <input type="number" class="form-control" v-model="idUser17" id="idUser17" placeholder="id user">
                </div>


                <button type="button" @click="testUserGetStatusFriends()" class="btn btn-default">test</button>
                <pre>{{data17['data']}}</pre>
                <div v-html="data17['data']">

                </div>
            </div>
        </div>


        <h1>Messages API</h1>

        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#newDialog"
                aria-expanded="false" aria-controls="newDialog">
            /api/messages/newDialog







        </button>
        <br><br>
        <div class="collapse" id="newDialog">
            <div class="well">

                <div class="form-group">
                    <label for="subject">Name dialog</label>
                    <input type="text" class="form-control" v-model="subject" id="subject" placeholder="Name dialog">
                </div>

                <label>Recipients</label>
                <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="recipients1" v-model="recipients" value="1"> usa_com
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" id="recipients2" v-model="recipients" value="2"> fortael
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" id="recipients3" v-model="recipients" value="11"> Vadim
                    </label>
                </div>
                <pre>{{recipients}}</pre>

                <button type="button" @click="newMessages()" class="btn btn-default">post messages</button>
                <div v-html="data10['data']"></div>
                <pre>{{data10}}</pre>
            </div>
        </div>

        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#privateDialog"
                aria-expanded="false" aria-controls="privateDialog">
            /api/messages/openPrivate







        </button>
        <br><br>
        <div class="collapse" id="privateDialog">
            <div class="well">

                <div class="form-group">
                    <label for="idUserPrivateDialog">id user</label>
                    <input type="number" class="form-control" v-model="idUserPrivateDialog" id="idUserPrivateDialog"
                           placeholder="id user">
                </div>

                <button type="button" @click="privateDialog()" class="btn btn-default">open or create</button>
                <div v-html="data10['data']"></div>
                <pre>{{data10}}</pre>
            </div>
        </div>


        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#newMessages"
                aria-expanded="false" aria-controls="newMessages">
            /api/messages/list (get) /api/messages/show/{id} (get) /api/messages/show/{id}(put)







        </button>
        <br><br>
        <div class="collapse" id="newMessages">
            <div class="well">
                <div class="form-group">
                    <label for="MSG11">Text</label>
                    <textarea class="form-control" v-model="MSG11" id="MSG11"> </textarea>
                </div>
                <div class="form-group">
                    <label for="idDialog">Dialog id</label>
                    <input type="number" class="form-control" v-model="idDialog" id="idDialog">
                </div>
                <button type="button" @click="getAllLastDialog()" class="btn btn-default">list</button>
                <button type="button" @click="listUserInDialog()" class="btn btn-default">list user</button>
                <button type="button" @click="dialogOpen()" class="btn btn-default">open dialog</button>
                <button type="button" @click="pushMSG()" class="btn btn-default">new MSG</button>
                <div v-html="data11['data']"></div>
                <pre>{{data11['data']}}</pre>
            </div>
        </div>

        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#addUserDialog"
                aria-expanded="false" aria-controls="addUserDialog">
            /api/addUser/{id} (post) /api/leaveDialog/{id} (delete) /api/returnDialog/{id} (put)







        </button>
        <br><br>
        <div class="collapse" id="addUserDialog">
            <div class="well">

                <div class="form-group">
                    <label for="idNewUserDialog">User id</label>
                    <input type="number" class="form-control" v-model="idNewUserDialog" id="idNewUserDialog">
                </div>
                <div class="form-group">
                    <label for="idDialog12">id dialog</label>
                    <input type="number" class="form-control" v-model="idDialog12" id="idDialog12">
                </div>
                <button type="button" @click="addUserInDialog()" class="btn btn-default">add user</button>
                <button type="button" @click="leaveDialog()" class="btn btn-default">leave dialog</button>
                <button type="button" @click="comeBack()" class="btn btn-default">come back in dialog</button>
                <div v-html="data12['data']"></div>
                <pre>{{data12['data']}}</pre>
            </div>
        </div>


        <h1>Files API</h1>

        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#uploadFilesB"
                aria-expanded="false" aria-controls="uploadFilesB">
            /api/file/upload/ (post)







        </button>
        <br><br>
        <div class="collapse" id="uploadFilesB">
            <div class="well">

                <div class="form-group">
                    <label for="uploadimage">Изображение</label>
                    <input type="file" name="img" id="uploadimage">
                </div>
                <button type="button" @click="uploadFile()" class="btn btn-default">upload</button>
                <div v-html="data15"></div>
                <pre>{{data15}}</pre>
            </div>
        </div>

        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#openImgB"
                aria-expanded="false" aria-controls="openImgB">
            /api/file/open/img/ (get)

        </button>
        <br><br>
        <div class="collapse" id="openImgB">
            <div class="well">
                <div class="form-group">
                    <label for="uploadimage">Изображение</label>
                    <input type="text" class="form-control" name="img" v-model="imgName">
                </div>
                <img :src="adressIMG" class="img-responsive">

                <br>

                <button type="button" @click="openImg()" class="btn btn-default">open</button>
            </div>
        </div>


        <h1>Events API</h1>

        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#openmakeEvent"
                aria-expanded="false" aria-controls="openmakeEvent">
            /api/events/makeEvent (POST) <br>
            /api/events/list (GET) <br>
            /api/events/open/{id} (GET) <br>
            /api/events/invite (POST) <br>
            /api/events/acceptInvite (POST) <br>
            /api/events/deniedInvite (POST) <br>
        </button>
        <br><br>
        <div class="collapse" id="openmakeEvent">
            <div class="well">
                <h1>makeEvent</h1>
                <div class="well">


                    <div class="form-group">
                        <label for="idEditEvent">id event</label>
                        <input type="text" class="form-control" id="idEditEvent" v-model="idEditEvent">
                    </div>

                    <div class="form-group">
                        <label for="nameInvite">name event</label>
                        <input type="text" class="form-control" id="nameInvite" v-model="nameInvite">
                    </div>

                    <div class="form-group">
                        <label class="radio-inline">
                            <input type="radio" name="typeInvite" v-model="typeInvite" id="typeInvite1"
                                   value="public">public
                    </label>
                        <label class="radio-inline">
                            <input type="radio" name="typeInvite" v-model="typeInvite" id="typeInvite2"
                                   value="private">private
                    </label>
                    </div>

                    <div class="form-group">
                        <label for="targetEvent">target event</label>
                        <input type="number" class="form-control" id="targetEvent" v-model="targetEvent">
                    </div>

                    <div class="form-group">
                        <label for="targetDistance">targetDistance</label>
                        <input type="number" class="form-control" id="targetDistance" v-model="targetDistance">
                    </div>

                    <div class="form-group">
                        <label for="datetimeStartEvent">date time Start Event</label>
                        <input type="datetime" class="form-control" id="datetimeStartEvent"
                               v-model="datetimeStartEvent">
                    </div>

                    <div class="form-group">
                        <label for="datetimeEndEvent">date time End Event</label>
                        <input type="datetime" class="form-control" id="datetimeEndEvent" v-model="datetimeEndEvent">
                    </div>

                    <div class="form-group">
                        <label for="descriptionEvent">descriptionEvent</label>
                        <textarea name="" class="form-control" id="descriptionEvent" cols="30" rows="10"
                                  v-model="descriptionEvent"></textarea>
                    </div>
                    <button type="button" @click="makeEvent()" class="btn btn-default">makeEvent</button>
                    <button type="button" @click="editEvent()" class="btn btn-default">editEvent</button>
                </div>
                <h1>Open event and list your events </h1>
                <div class="well">
                    <div class="form-group">
                        <label for="idOpenEvent">id open event</label>
                        <input type="text" class="form-control" id="idOpenEvent" v-model="idOpenEvent">
                    </div>
                    <button type="button" @click="openEvent()" class="btn btn-default">openEvent</button>
                    <button type="button" @click="connectToEvent()" class="btn btn-default">connectToEvent</button>
                    <button type="button" @click="listEvent()" class="btn btn-default">listEvent</button>
                </div>


                <h1>Invite user in event </h1>
                <div class="well">
                    <div class="form-group">
                        <label for="id_userEvent">id user</label>
                        <input type="number" class="form-control" id="id_userEvent" v-model="id_userEvent">
                    </div>
                    <div class="form-group">
                        <label for="id_eventEvent">id event</label>
                        <input type="number" class="form-control" id="id_eventEvent" v-model="id_eventEvent">
                    </div>

                    <button type="button" @click="inviteEvent()" class="btn btn-default">inviteEvent</button>
                </div>


                <h1>accept or denied invite user in event </h1>
                <div class="well">
                    <div class="form-group">
                        <label for="id_inviteEvent">id invite</label>
                        <input type="number" class="form-control" id="id_inviteEvent" v-model="id_inviteEvent">
                    </div>

                    <div class="form-group">
                        <label for="id_inviteEvent2">id_inviteEvent2</label>
                        <input type="number" class="form-control" id="id_inviteEvent2" v-model="id_inviteEvent2">
                    </div>

                    <div class="form-group">
                        <label for="valueRace">valueRace</label>
                        <input type="number" class="form-control" id="valueRace" v-model="valueRace">
                    </div>


                    <button type="button" @click="acceptEvent()" class="btn btn-default">acceptEvent</button>
                    <button type="button" @click="leaveEvent()" class="btn btn-default">leaveEvent</button>
                    <button type="button" @click="deleteEvent()" class="btn btn-default">deleteEvent</button>
                    <button type="button" @click="comeBackEvent()" class="btn btn-default">leaveEvent</button>
                    <button type="button" @click="deniedInvite()" class="btn btn-default">deniedInvite</button>
                    <br>
                    <button type="button" @click="searchEvent()" class="btn btn-default">searchEvent</button>
                    <button type="button" @click="statusUserInEvent()" class="btn btn-default">statusUserInEvent
                    </button>
                    <button type="button" @click="historyInEvent()" class="btn btn-default">historyInEvent</button>
                    <button type="button" @click="updateStatus1()" class="btn btn-default">updateStatus1</button>
                    <button type="button" @click="updateStatus2()" class="btn btn-default">updateStatus2</button>
                    <br>
                    <button type="button" @click="identifyWinder()" class="btn btn-default">identifyWinder</button>
                    <button type="button" @click="setWinner()" class="btn btn-default">setWinner</button>


                </div>

                <br>


                <pre>{{data20['data']}}</pre>
                <div v-html="data20['data']"></div>
            </div>
        </div>

        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#getNotification"
                aria-expanded="false" aria-controls="getNotification">
            /api/notification/active/ (get)

        </button>
        <br><br>
        <div class="collapse" id="getNotification">
            <div class="well">

                <button type="button" @click="getNotification()" class="btn btn-default">getNotification</button>
                <br>


                <pre>{{data21['data']}}</pre>
                <div v-html="data21['data']"></div>
            </div>
        </div>




        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#testGPS1"
                aria-expanded="false" aria-controls="testGPS1">
            /api/testGPS (get)

        </button>
        <br><br>
        <div class="collapse" id="testGPS1">
            <div class="well">

                <button type="button" @click="testGPS1()" class="btn btn-default">testGPS1</button>
                <br>


                <pre>{{data23['data']}}</pre>
                <div v-html="data23['data']"></div>
            </div>
        </div>


    </div>
</template>
<script type="text/babel">

    export default{
        data(){
            return {
                nickname1: '',
                email1: '',
                password1: '',

                client_id: 3,
                client_secret: 'dQDAqymuqEWkq49q3271BewZWHdV0mHfplqjTOPa',
                nickname2: 'usa_com',
                password2: 'test500500',


                access_token: '',


                password4_1: '',
                password4_2: '',
                birthday: '',
                genderUser: '',
                job: '',
                name: '',
                last_name: '',
                length: '',
                weight: '',
                numberPhone: '',

                idUser: 2,

                nickname3: '',
                name3: 'Clara',
                last_name3: 'Oswald',
                birthday33: '',
                birthday33_U: '',
                birthday3Y: '',
                birthday3M: '',
                birthday3D: '17',
                genderUser3: '',
                length3: '',
                length_max3: '',
                weight3: '',
                weight_max3: '',

                typeSubscribes: '',

                idUser8: '',

                idUser9: '',

                subject: '',
                MSG: '',
                recipients: [],

                idDialog: '',
                MSG11: '',


                idNewUserDialog: '',
                idDialog12: '',

                typeDialog: '',

                idUserPrivateDialog: '',

                imgName: '',
                adressIMG: '',

                idUser17: '',


                nameInvite: 'test',
                typeInvite: 'private',
                targetEvent: 0,
                datetimeStartEvent: '2018-02-11 21:51:56',
                datetimeEndEvent: '',
                descriptionEvent: 'test test',
                idOpenEvent: 1,
                id_userEvent: 1,
                id_eventEvent: 1,
                id_inviteEvent: 1,
                id_inviteEvent2: 1,
                idEditEvent: 1,
                valueRace: 1000,
                targetDistance: 10000,
                longitude: 59.934672,
                latitude: 30.330661,


                data1: '',
                data2: '',
                data3: '',
                data4: '',
                data5: '',
                data6: '',
                data7: '',
                data8: '',
                data9: '',
                data10: '',
                data11: '',
                data12: '',
                data13: '',

                data15: '',
                data17: '',

                data20: '',


                data21: '',


                data23: ''
            }
        },
        methods: {
            setToken(){
                window.axios.defaults.headers.common['Authorization'] = 'Bearer ' + this.access_token;
            },
            register(){
                axios.post('api/register', {
                    nickname: this.nickname1,
                    email: this.email1,
                    password: this.password1,
                })
                    .then((response) => {
                        console.log(response);
                        this.data1 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data1 = error.response;
                    });
            },
            getToken(){
                let data = {
                    grant_type: 'password',
                    client_id: this.client_id,
                    client_secret: this.client_secret,
                    username: this.nickname2,
                    password: this.password2,
                };
                console.log(data);

                axios.post('/oauth/token', data)
                    .then((response) => {

                        console.log(response);
                        this.data2 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data2 = error.response;
                    });
            },
            getDataUser(){
                this.setToken();
                axios.get('/api/user')
                    .then((response) => {
                        console.log(response);
                        this.data3 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data3 = error.response;
                    });
            },
            updateProfileUser(){
                this.setToken();
                axios.put('/api/update', {
                    password: this.password4_1,
                    password_confirmation: this.password4_2,
                    name: this.name,
                    last_name: this.last_name,
                    phone: this.numberPhone,
                    birthday: this.birthday,
                    job: this.job,
                    gender: this.genderUser,
                    length: this.length,
                    weight: this.weight,
                })
                    .then((response) => {
                        console.log(response);
                        this.data4 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data4 = error.response;
                    });
            },
            getProfile(){
                if (this.idUser == '') {
                    return;
                }
                this.setToken();
                axios.get('/api/profile/id' + this.idUser)
                    .then((response) => {
                        console.log(response);
                        this.data5 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data5 = error.response;
                    });
            },
            search(){
                if (this.idUser == '') {
                    return;
                }
                this.setToken();
                axios.get('/api/search', {
                    params: {
                        nickname: this.nickname3,
                        name: this.name3,
                        last_name: this.last_name3,
                        birthdayY: this.birthday3Y,
                        birthdayM: this.birthday3M,
                        birthdayD: this.birthday3D,
                        gender: this.genderUser3,
                        length: this.length3,
                        length_max: this.length_max3,
                        weight: this.weight3,
                        weight_max: this.weight_max3,
                        birthday: this.birthday33,
                        birthday_max: this.birthday33_U
                    }
                })
                    .then((response) => {
                        console.log(response);
                        this.data6 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data6 = error.response;
                    });
            },


            //Friends API


            getFriends(){
                this.setToken();
                axios.get('/api/friend/list', {
                    // params: {
                    //     id: 2,
                    // }
                })
                    .then((response) => {
                        console.log(response);
                        this.data7 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data7 = error.response;
                    });
            },
            getSubscribes(){
                this.setToken();
                axios.get('/api/friend/subscribes', {
                    params: {
                        type: this.typeSubscribes,
                    }
                })
                    .then((response) => {
                        console.log(response);
                        this.data7 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data7 = error.response;
                    });
            },
            getSubscribes2(){
                this.setToken();
                axios.get('/api/friend/queryFriends', {
                    params: {
                        type: this.typeSubscribes,
                    }
                })
                    .then((response) => {
                        console.log(response);
                        this.data7 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data7 = error.response;
                    });
            },
            sendRequest(){
                this.setToken();
                axios.post('/api/friend/sendRequest', {

                    id: this.idUser8,

                })
                    .then((response) => {
                        console.log(response);
                        this.data8 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data8 = error.response;
                    });
            },
            acceptRequestToFriends(){
                this.setToken();
                axios.put('/api/friend/acceptRequest', {

                    id: this.idUser9,

                })
                    .then((response) => {
                        console.log(response);
                        this.data9 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data9 = error.response;
                    });
            },
            denyRequestToFriends(){
                this.setToken();
                axios.put('/api/friend/denyRequest', {

                    id: this.idUser9,

                })
                    .then((response) => {
                        console.log(response);
                        this.data9 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data9 = error.response;
                    });
            },
            removeFriend(){
                this.setToken();
                axios.post('/api/friend/removeFriend', {

                    id: this.idUser9,

                })
                    .then((response) => {
                        console.log(response);
                        this.data9 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data9 = error.response;
                    });
            },


            newMessages(){
                let usersA = ['1'];
                this.recipients.forEach((item) => {
                    usersA.push(parseInt(item))
                });
                console.log('test2');
                console.log(usersA);
                this.setToken();
                axios.post('/api/messages/newDialog', {
                    name: this.subject,
                    users: usersA
                })
                    .then((response) => {
                        console.log(response);
                        this.data10 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data10 = error.response;
                    });
            },
            privateDialog(){
                this.setToken();
                axios.post('/api/messages/openPrivate', {
                    id: this.idUserPrivateDialog
                })
                    .then((response) => {
                        console.log(response);
                        this.data10 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data10 = error.response;
                    });
            },
            listUserInDialog(){
                this.setToken();
                axios.get('/api/messages/users/' + this.idDialog)
                    .then((response) => {
                        console.log(response);
                        this.data11 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data11 = error.response;
                    });
            },
            getAllLastDialog(){
                this.setToken();
                axios.get('/api/messages/list')
                    .then((response) => {
                        console.log(response);
                        this.data11 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data11 = error.response;
                    });
            },
            dialogOpen(){
                this.setToken();
                axios.get('/api/messages/show/' + this.idDialog)
                    .then((response) => {
                        console.log(response);
                        this.data11 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data11 = error.response;
                    });
            },
            pushMSG(){
                this.setToken();
                axios.put('/api/messages/show/' + this.idDialog, {
                    message: this.MSG11,
                })
                    .then((response) => {
                        console.log(response);
                        this.data11 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data11 = error.response;
                    });
            },
            addUserInDialog(){
                this.setToken();
                axios.post('/api/messages/addUser/' + this.idDialog12, {
                    users: [1, 4, 5],
                })
                    .then((response) => {
                        console.log(response);
                        this.data12 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data12 = error.response;
                    });
            },
            leaveDialog(){
                this.setToken();
                axios.delete('/api/messages/leaveDialog/' + this.idDialog12)
                    .then((response) => {
                        console.log(response);
                        this.data12 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data12 = error.response;
                    });
            },
            comeBack(){
                this.setToken();
                axios.put('/api/messages/returnDialog/' + this.idDialog12)
                    .then((response) => {
                        console.log(response);
                        this.data12 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data12 = error.response;
                    });
            },

            uploadFile(){
                this.setToken();

                let that = this;
                let file_data = $('#uploadimage').prop('files')[0];
                let form_data = new FormData();
                form_data.append('img', file_data);
                $.ajax({
                    headers: {
                        Authorization: 'Bearer ' + this.access_token
                    },
                    url: '/api/file/upload/avatar',
                    dataType: 'text',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,
                    type: 'post',
                    success: (response) => {
                        console.log(response);
                        this.data15 = JSON.parse(response);
                    },
                    error: (response) => {
                        // this.data15 = response;
                        // this.data15 = response;
                        this.data15 = response.responseText;
                    }
                });
            },
            openImg(){
                this.adressIMG = '';
                if (this.imgName != '') {
                    this.adressIMG = '/api/file/open?name=' + this.imgName;
                }
            },
            allFilesUser(){
                this.setToken();
                axios.get('/api/file/allFiles/')
                    .then((response) => {
                        console.log(response);
                        this.data13 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data13 = error.response;
                    });
            },
            testUserGetStatusFriends(){
                this.setToken();
                let name = '/api/test/profile/id' + this.idUser17;
                axios.get(name)
                    .then((response) => {
                        console.log(response);
                        this.data17 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data17 = error.response;
                    });
            },
            listEvent(){
                this.setToken();
                let name = '/api/events/list';
                axios.get(name)
                    .then((response) => {
                        console.log(response);
                        this.data20 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data20 = error.response;
                    });
            },
            openEvent(){
                this.setToken();
                let name = '/api/events/open/' + this.idOpenEvent;
                axios.get(name)
                    .then((response) => {
                        console.log(response);
                        this.data20 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data20 = error.response;
                    });
            },
            connectToEvent(){
                this.setToken();
                let name = '/api/events/connect/' + this.idOpenEvent;
                axios.get(name)
                    .then((response) => {
                        console.log(response);
                        this.data20 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data20 = error.response;
                    });
            },
            makeEvent(){
                this.setToken();
                let name = '/api/events/makeEvent';
                axios.post(name, {
                    'name': this.nameInvite,
                    'type': this.typeInvite,
                    'target': this.targetEvent,
                    'target_description': JSON.stringify({
                        'target': {
                            'value': this.targetDistance
                        }
                    }),
                    'data_start': this.datetimeStartEvent,
                    'data_end': this.datetimeEndEvent,
                    'description': this.descriptionEvent
                })
                    .then((response) => {
                        console.log(response);
                        this.data20 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data20 = error.response;
                    });
            },
            editEvent(){
                this.setToken();
                let name = '/api/events/edit';
                axios.post(name, {
                    'id': this.idEditEvent,
                    'name': this.nameInvite,
                    'type': this.typeInvite,
                    'target': this.targetEvent,
                    'data_start': this.datetimeStartEvent,
                    'data_end': this.datetimeEndEvent,
                    'description': this.descriptionEvent
                })
                    .then((response) => {
                        console.log(response);
                        this.data20 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data20 = error.response;
                    });
            },
            inviteEvent(){
                this.setToken();
                let name = '/api/events/invite';
                axios.post(name, {
                    'id_user': this.id_userEvent,
                    'id_event': this.id_eventEvent
                })
                    .then((response) => {
                        console.log(response);
                        this.data20 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data20 = error.response;
                    });
            },
            acceptEvent(){
                this.setToken();
                let name = '/api/events/acceptInvite';
                axios.post(name, {
                    'id': this.id_inviteEvent
                })
                    .then((response) => {
                        console.log(response);
                        this.data20 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data20 = error.response;
                    });
            },
            deniedInvite(){
                this.setToken();
                let name = '/api/events/deniedInvite';
                axios.post(name, {
                    'id': this.id_inviteEvent
                })
                    .then((response) => {
                        console.log(response);
                        this.data20 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data20 = error.response;
                    });
            },
            leaveEvent(){
                this.setToken();
                let id = this.id_inviteEvent;
                let name = '/api/events/leaveEvent/' + id;
                axios.delete(name)
                    .then((response) => {
                        console.log(response);
                        this.data20 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data20 = error.response;
                    });
            },
            deleteEvent(){
                this.setToken();
                let id = this.id_inviteEvent;
                let name = '/api/events/delete/' + id;
                axios.delete(name)
                    .then((response) => {
                        console.log(response);
                        this.data20 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data20 = error.response;
                    });
            },
            comeBackEvent(){
                this.setToken();
                let id = this.id_inviteEvent;
                let name = '/api/events/return/' + id;
                axios.delete(name)
                    .then((response) => {
                        console.log(response);
                        this.data20 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data20 = error.response;
                    });
            },
            searchEvent(){
                this.setToken();
                let name = '/api/events/search/';
                axios.get(name)
                    .then((response) => {
                        console.log(response);
                        this.data20 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data20 = error.response;
                    });
            },
            statusUserInEvent(){
                this.setToken();
                let name = '/api/events/statusUserInEvent/' + this.id_inviteEvent;
                axios.get(name)
                    .then((response) => {
                        console.log(response);
                        this.data20 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data20 = error.response;
                    });
            },
            historyInEvent(){
                this.setToken();
                let name = '/api/events/historyInEvent/' + this.id_inviteEvent;
                axios.get(name)
                    .then((response) => {
                        console.log(response);
                        this.data20 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data20 = error.response;
                    });
            },
            updateStatus1(){
                this.setToken();
                let name = '/api/events/update/';
                axios.post(name, {
                    id: this.id_inviteEvent,
                    value: JSON.stringify({
                        race: {
                            value: parseInt(this.valueRace)
                        }
                    }),

                })
                    .then((response) => {
                        console.log(response);
                        this.data20 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data20 = error.response;
                    });
            },
            updateStatus2(){
                this.setToken();
                let name = '/api/events/update/';
                axios.post(name, {
                    id: this.id_inviteEvent,
                    value: JSON.stringify({
                        marathon: {
                            value: this.valueRace
                        }
                    }),

                })
                    .then((response) => {
                        console.log(response);
                        this.data20 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data20 = error.response;
                    });
            },
            identifyWinder(){
                this.setToken();
                let name = '/api/events/identifyWinner/' + this.id_inviteEvent;
                axios.get(name)
                    .then((response) => {
                        console.log(response);
                        this.data20 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data20 = error.response;
                    });
            },
            setWinner(){
                this.setToken();
                let name = '/api/events/setWinner/' + this.id_inviteEvent;
                axios.post(name, {
                    'id_winner': this.id_inviteEvent2
                })
                    .then((response) => {
                        console.log(response);
                        this.data20 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data20 = error.response;
                    });
            },
            getNotification(){
                this.setToken();
                let name = '/api/notification/active/';
                axios.get(name)
                    .then((response) => {
                        console.log(response);
                        this.data21 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data21 = error.response;
                    });
            },

            testGPS1(){
                this.setToken();
                let name = '/api/testGPS';
                axios.get(name)
                    .then((response) => {
                        console.log(response);
                        this.data23 = response;
                    })
                    .catch((error) => {
                        console.log(error.response);
                        this.data23 = error.response;
                    });
            }

        }
    }
</script>
