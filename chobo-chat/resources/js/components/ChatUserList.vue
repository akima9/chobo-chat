<template>
    <div class="w-1/5 bg-blue-200 p-10">
        <p class="font-black text-3xl text-blue-900 mb-5">회원 목록</p>
        <div 
            v-for="user in userWithoutSignedInUser" 
            :key="user.id" 
            @click="selectChatWith(user.id)" 
            class="cursor-pointer mb-5 hover:text-orange-600 hover:font-black"
        >
            {{ user.email }}
        </div>
    </div>
</template>

<script>
export default {
    props : {
            currentUser : {
                type : Number,
                required : true
            }
    },
    computed : {
        userWithoutSignedInUser(){
            return this.users.filter(user => user.id !== this.currentUser);
        }
    },
    data(){
        return{
            users:[]
        }
    },
    created(){
        axios.get('/api/users').then(res => {
            console.log(res);
            this.users = res.data.users;
        }).catch(error => {
            console.log(error);
        });
    },
    methods : {
        selectChatWith(userId) {
            this.$emit('selectChatWith', userId);
        }
    }
}
</script>