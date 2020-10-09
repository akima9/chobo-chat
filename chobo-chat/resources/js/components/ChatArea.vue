<template>
    <div class="flex-1 p-10">
        chat area test {{ chatId }}
        <ChatMessage/>
    </div>
</template>

<script>
import ChatMessage from "./ChatMessage";
export default {
    components : {
        ChatMessage
    },
    props : {
        chatId : {
            type : Number,
            required : true
        }
    }
}
</script>