<template>
    <div class="container">
        <div class="fb-profile">
            <img align="left" class="fb-image-lg " :src="require('../../../../public/uploads/' + this.cover)" alt="Profile image example"/>
            <img align="left" class="fb-image-profile thumbnail " :src="require('../../../../public/uploads/' + this.profile)" alt="Profile image example"/>
            <div class="fb-profile-text">
                <h1>{{name}}</h1>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'example',
        props:['name', 'cover', 'profile'],

        data(){
            return{

            }
        },
        methods:{

        }
    }
</script>
<style scoped>
    div{
        font-family:Lato,Helvetica,Arial,sans-serif;
        font-weight:200;
        letter-spacing:1px;

    }

    .fb-profile img.fb-image-lg{
        z-index: 0;
        width: 100%;
        margin-bottom: 10px;

    }

    .fb-image-profile
    {
        margin: -90px 10px 0px 50px;
        z-index: 9;
        height: 230px;
        width: 230px;
        border-radius: 50%;
    }

    @media (max-width:768px)
    {

        .fb-profile-text>h1{
            font-weight: 700;
            font-size:16px;
        }

        .fb-image-profile
        {
            margin: -45px 10px 0px 25px;
            z-index: 9;
            width: 20%;

        }
    }
</style>
