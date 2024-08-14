<script setup>
const props = defineProps({
    text: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <div class="flex flex-wrap flex-row items-center">
        <div class="w-8 h-[4px] bg-orange-500 mr-2"></div> <p class="text-orange-400 font-semibold"> {{props.text}} </p>
    </div>
</template>

<style scoped>

</style>
