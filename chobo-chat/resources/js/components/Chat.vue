<template>
    <div class="flex flex-1">
        <ChatUserList></ChatUserList>
        <div class="w-4/5 flex flex-col">
            <div class="flex-1 p-2">chat area</div>
            <div class="flex-initial p-2">
                <input type="text" class="w-full p-3 border border-solid border-blue-300">
            </div>
        </div>
    </div>
</template>

<script>
    import ChatUserList from "./ChatUserList";
    export default {
        components : {
            ChatUserList
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
