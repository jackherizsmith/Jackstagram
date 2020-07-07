<template>
    <div class="container">
        <button class="btn btn-primary ml-5" @click="followUser" v-text="buttonText"></button>
    </div>
</template>

<script>
    export default {

        props: ['userId', 'follows'],

        mounted() {
            console.log(this.userId);
        },

        data: function () {
            return {
                status: this.follows,
            }
        },

        methods: {
            followUser(){
               axios.post('/follow/'+this.userId)
               .then(res => {
                    this.status = !this.status;
               })
               .catch(error => {
                    if(error.response.status == 401){
                        window.location = '/login';
                    }
               })
            }
        },

        computed: {
            buttonText() {
                return (this.status ? "Unfollow" : "Follow");
            }
        }
    }
</script>
