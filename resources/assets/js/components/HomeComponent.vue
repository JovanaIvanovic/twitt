<template>
    <div class="container">
        <div class="row">
            <div  class="col col-sm-6">
                <div class="blog-grids">
                    <div class="grid" v-for="post in posts">
                        <post :post="post" :user="getUser(post.user_id)"></post>
                    </div>
                </div>
            </div>
        </div>
        <div id="button" @click="popup">
            <div id="addnew"></div>
        </div>

        <div class="modal" id="post-modal">
            <newpost @close="close"></newpost>
        </div>
    </div>
</template>

<script>

    export default {

        name:"home",
        props:{
            posts:Array,
            users:Array
        },
        methods:{
            close(){
                let modal= document.getElementById('post-modal');
                modal.style.display="none";
            },
            popup(){
                let modal= document.getElementById('post-modal');
                modal.style.display= "block";
            },
            getUser(id){
                let i;
                let user;
                for(i=0; i<this.users.length; i++){
                    if(id===this.users[i].id){
                        user=this.users[i];
                    }
                }
                return user;
            },
        }

    }
</script>

<style scoped>
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }
    #button{
        margin-top: 12%; float:right; position: relative;
    }
    #addnew{
        position: fixed;
        right: 60px;
        bottom: 60px;
        background: url(../../../../public/uploads/add.png) no-repeat;
        width: 60px; height: 60px;
        cursor:pointer;
        border-radius: 50%;
    }

    @media (min-width: 1200px){
        .container {
            width: 1170px;

        }

    }
    * {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    .row {
        margin-right: -15px;
        margin-left: -15px;
    }

    .col-sm-6 {
        width: 100%;
        margin: 0px auto;

    }

    .blog-grids {
        overflow: hidden;
        margin: 0 -15px;

    }

    .blog-grids .grid {
        background-color: #fff;
        float: left;
        padding: 15px;
        margin: 20px 15px 15px;
        border-radius: 10px;
        -webkit-box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
        box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
    }

    .entry-media img {
        border-radius: 10px;
        width: 100%;
        max-height: 188px;
    }

    .entry-body .cat {
        font-family: "Poppins", sans-serif;
        font-size: 12px;
        font-weight: 600;
        color: #6220d9;
        text-transform: uppercase;
    }

    .entry-body h3 {
        font-size: 21px;
        font-weight: 600;
        line-height: 1.30em;
        margin: 3px 0 0.73em;
    }

    .entry-body h3 a {
        color: #41516a;
    }

    .entry-body h3 a:hover {
        color: #6220d9;
        text-decoration: none;
    }

    .entry-body p {
        margin-bottom: 2em;
        color: #90949a;
        line-height: 1.8em;
    }

    .read-more-date a {
        font-family: "Poppins", sans-serif;
        font-size: 16px;
        font-size: 1.06667rem;
        font-weight: 600;
        color: #41516a;
        text-transform: uppercase;
    }

</style>