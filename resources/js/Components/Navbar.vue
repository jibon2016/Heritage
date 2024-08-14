<script setup>
import  {getImageUrl} from '@/Composables/useImageURL.js';
const logo = getImageUrl('logo.png')
</script>

<template>
    <div class="bg-blue-100 drop-shadow-md shadow-black">
        <nav class="container mx-auto px-10 flex justify-between text-black items-center text-lg">
            <div class="">
                <ul class="flex space-x-10 ">
                    <li><a href="">Buy</a></li>
                    <li><a href="">Sell</a></li>
                    <li><a href="">Service</a></li>
                </ul>
            </div>
            <div class="">
                <a href="/">
                    <img :src="logo" class=" h-[80px]"  alt="">
                </a>
            </div>
            <div class="">
                <ul class="flex space-x-4">
                    <li><a href="">Manage Rentals </a></li>
                    <li><a class="font-medium" href="/login">Sign In</a></li>
                </ul>
            </div>
        </nav>
    </div>
</template>

<style scoped>

</style>
