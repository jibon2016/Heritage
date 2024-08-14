<script setup>
const props = defineProps({
    color: {
        type: String,
        required: true,
    },
});
let bgClasses = '';
let SvgClasses = '';

if (props.color === 'light')
{
    bgClasses = 'bg-blue-50 text-blue-700'
    SvgClasses = '#0059B1';
}else if(props.color === 'dark') {
    bgClasses = 'bg-blue-800 text-white'
    SvgClasses = '#fff';
}
</script>

<template>
    <a href="/find-property" :class="bgClasses" class=" px-4 py-3 mx-auto inline-flex rounded">
        <svg class="h-[24px] w-[24px] " viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z" :stroke="SvgClasses" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <span class=" mx-3">Find Property</span>
    </a>
</template>

<style scoped>

</style>
