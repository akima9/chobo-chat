<template>
    <div class="flex flex-1">
        <div class="w-1/5 bg-blue-200 p-2">user list</div>
        <div class="w-4/5 flex flex-col">
            <div class="flex-1 p-2">chat area</div>
            <div class="flex-initial p-2">
                <input type="text" class="w-full p-3 border border-solid border-blue-300">
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
