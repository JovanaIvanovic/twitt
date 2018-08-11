<template>
    <div class="entry-body">
        <h3><a href="#">{{user.name}}</a></h3>
        <p>{{post.body}}</p>
        <div class="read-more-date">
            <div class="imagelike" :class="{yes: liked}" @click="like">
            </div>
            <div class="imagecomment">
            </div>
            <span class="date">3 Hours ago</span>
        </div>
    </div>
</template>

<script>
    export default {
        name: "post",
        props:{
            'post': Object,
            'user': Object
        },
        data(){
            return{
                liked: false,
            }
        },
        methods:{
            like: function(){
                console.log("Like");
            }
        }
    }

</script>

<style scoped>
    .imagecomment{
        background: url(../../../../public/uploads/comment.png) no-repeat;
        width: 30px; height: 30px;
        display:inline-block;
    }
    .imagelike{
        cursor: pointer;
        background: url(../../../../public/uploads/notliked.png) no-repeat;
        width: 30px; height: 30px;
        display:inline-block;
    }
    .imagelike .yes{
        cursor: pointer;
        background: url(../../../../public/uploads/comment.png) no-repeat;
        width: 30px; height: 30px;
        display:inline-block;
    }

    .entry-body .cat {
        font-family: "Poppins", sans-serif;
        font-size: 12px;
        font-weight: 600;
        color: #6220d9;
        text-transform: uppercase;
    }
    .entry-body {
        padding: 27px 10px;

    }
    .read-more-date {
        position: relative;
    }

    .read-more-date .date {

        position: absolute;
        right: 0;
        color: #90949a;
        display:inline-block;
    }

    .entry-body h3 {
        font-size: 21px;
        font-weight: 600;
        line-height: 1.30em;
        margin: 3px 0 0.73em;
    }

    .entry-body h3 a {
        color: #7b4397;
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