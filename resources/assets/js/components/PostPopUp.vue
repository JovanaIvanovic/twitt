<template>
    <div class="modal-content">
        <span class="close" @click="close" id="close">&times;</span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            Add a new post!
                        </div>
                        <div class="card-body">

                            <form method="post" @submit.prevent="onSubmit">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="post" required placeholder="Your new post" v-model="post">
                                </div>
                                <button type="submit" class="btn btn-primary"
                                        style="background:#7b4397;
                                        background:-webkit-linear-gradient(to left,#7b4397,#dc2430);
                                         background:linear-gradient(to left,#7b4397,#dc2430);
                                         border-color:rgba(34,34,34,.05);
                                         ">Publish</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "PostPopUp",
        data(){
            return{
                post:''
            }
        },
        methods:{
            close(){
                this.$emit('close');
            },
            onSubmit(){
                axios.post('/home',  {post: this.post})
                    .then(function (response) {
                        console.log(response.data);
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            }
        }
    }
</script>

<style scoped>

    .modal-content {
        background-color: #fefefe;
        margin: 15% auto; /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

</style>