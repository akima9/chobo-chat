<template>
    <div class="flex-1 p-10">
        chat area test {{ chatId }}
    </div>
</template>

<script>
export default {
    props : {
        chatId : {
            type : Number,
            required : true
        }
    }
}
</script>