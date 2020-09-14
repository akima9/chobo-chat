<template>
    <div class="w-1/5 bg-blue-200 p-2">
        user list
        <div v-for="user in users" :key="user.id">
            {{ user.email }}
        </div>
    </div>
</template>

<script>
export default {
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
    }
}
</script>