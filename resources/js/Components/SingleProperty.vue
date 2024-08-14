<script setup>
import  {getImageUrl} from '@/Composables/useImageURL.js';


const banner1 = getImageUrl('banner-2.jpg');
</script>

<template>
    <div class="basis-1/3 bg-gray-100 w-full">
        <div class=" bg-image-overlay relative">
            <img :src="banner1" alt="" class="w-full h-[200px]">
            <div class="flex items-center px-1 py-0 rounded space-x-1 absolute bg-orange-50 bottom-3 left-3">
                <svg width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M8 11C9.10457 11 10 10.1046 10 9C10 7.89543 9.10457 7 8 7C6.89543 7 6 7.89543 6 9C6 10.1046 6.89543 11 8 11Z" stroke="#EE6611" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M6.56055 21C12.1305 8.89998 16.7605 6.77998 22.0005 14.63" stroke="#EE6611" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M18 3H6C3.79086 3 2 4.79086 2 7V17C2 19.2091 3.79086 21 6 21H18C20.2091 21 22 19.2091 22 17V7C22 4.79086 20.2091 3 18 3Z" stroke="#EE6611" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                <span class="text-xs font-[500] text-black">20</span>
            </div>
        </div>
        <div class="px-3 pt-1">
            <div class="border-b border-gray-200 flex justify-between items-center py-1">
                <h5 class="px-2 py-1 bg-blue-100 text-xs text-blue-600 font-semibold">Apartment</h5>
                <div class="flex justify-between items-center space-x-2"><div class="h-2 w-2 bg-orange-500 "></div> <p class="text-xs font-[500]">Ready to move</p></div>
            </div>
            <div class="py-1">
                <h1 class="text-black text-xl font-semibold pt-2 pb-1">SunnySlope Suites </h1>
                <div class="flex text-xs py-1 space-x-1"><svg width="15px" class="" height="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#EE6611"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z" stroke="#EE6611" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z" stroke="#d6c71f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg><p>Meadowshire Park, Greenfield, USA</p></div>
            </div>
            <div class="py-2 ">
                <span class="text-lg font-semibold">$ 250000</span>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
