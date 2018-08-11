<template>
    <div class="container" id="app">
        <div class="row">
            <div  class="col col-sm-6">
                <div class="blog-grids">
                    <div class="grid" v-for="post in posts">
                        <post :post="post" :user="getUser(post.user_id)"></post>
                    </div>
                </div>
            </div>
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