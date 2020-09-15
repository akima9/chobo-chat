<template>
    <div class="flex flex-1">
        <ChatUserList :current-user="currentUser" @selectChatWith="selectChatWith"></ChatUserList>
        <div v-if="chatWith" class="w-4/5 flex flex-col">
            <ChatArea></ChatArea>
            <div class="flex-initial p-2">
                <input type="text" class="w-full p-3 border border-solid border-blue-300">
            </div>
        </div>
        <div v-else class="w-4/5 p-10">
            <p>채팅할 유저를 선택해주세요.</p>
        </div>
    </div>
</template>

<script>
    import ChatUserList from "./ChatUserList";
    import ChatArea from "./ChatArea";
    export default {
        props : {
            currentUser : {
                type : Number,
                required : true
            }
        },
        components : {
            ChatUserList,
            ChatArea
        },
        data() {
            return {
                chatWith : null
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods : {
            selectChatWith(value) {
                this.chatWith = value;
            }
        }
    }
</script>
