<script setup>
import  {getImageUrl} from '@/Composables/useImageURL.js';
const banner1 = getImageUrl('property.jpg');
</script>

<template>
    <div class="flex flex-col mb-4">
        <div class="flex space-x-6 justify-start p-3 bg-gray-100 ">
            <div class="">
                <img :src="banner1" class="h-[180px] w-[180px]" alt="">
            </div>
            <div class="flex flex-col rounded">
                <div class="flex justify-between">
                    <div class="">
                        <a href="/single-property" class="text-lg font-semibold pb-2">3 BHK Builder Floor for Sale in Site Ram Bazar New Delhi</a>
                        <div class="flex text-sm py-1 space-x-1"><svg width="20px" class="" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#EE6611"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z" stroke="#EE6611" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z" stroke="#d6c71f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg><p>Meadowshire Park, Greenfield, USA</p></div>
                    </div>
                    <div class="px-5">
                        <span class="text-2xl font-bold flex-nowrap">$ 30000</span>
                        <button class="rounded px-2 py-1 border-2 border-gray-500 mt-4">Bid Property</button>
                    </div>
                </div>
                <div class="flex justify-between items-center pt-1 space-x-2"><div class=" text-sm font-semibold text-nowrap">Property Details </div><div class="w-full h-[2px] bg-gray-300"></div></div>
                <div class="py-3 flex ">
                    <div class="basis-1/3 flex space-x-2">
                        <div class="w-[50px] h-[50px] bg-orange-500 flex justify-center items-center">
                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 2.99988V5.99988M12 20.9999V17.9999M4.20577 16.4999L6.80385 14.9999M21 11.9999H18M16.5 19.7941L15 17.196M3 11.9999H6M7.5 4.20565L9 6.80373M7.5 19.7941L9 17.196M19.7942 16.4999L17.1962 14.9999M4.20577 7.49988L6.80385 8.99988" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                        </div>
                        <div class="">
                            <h4 class="text-md font-semibold">Total Area</h4>
                            <span class="text-sm">891 sqft</span>
                        </div>
                    </div>
                    <div class="basis-1/3 flex space-x-2">
                        <div class="w-[50px] h-[50px] bg-orange-500 flex justify-center items-center">
                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 2.99988V5.99988M12 20.9999V17.9999M4.20577 16.4999L6.80385 14.9999M21 11.9999H18M16.5 19.7941L15 17.196M3 11.9999H6M7.5 4.20565L9 6.80373M7.5 19.7941L9 17.196M19.7942 16.4999L17.1962 14.9999M4.20577 7.49988L6.80385 8.99988" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                        </div>
                        <div class="">
                            <h4 class="text-md font-semibold">Status</h4>
                            <span class="text-sm">Ready to Move</span>
                        </div>
                    </div>
                    <div class="basis-1/3 flex space-x-2">
                        <div class="w-[50px] h-[50px] bg-orange-500 flex justify-center items-center">
                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 2.99988V5.99988M12 20.9999V17.9999M4.20577 16.4999L6.80385 14.9999M21 11.9999H18M16.5 19.7941L15 17.196M3 11.9999H6M7.5 4.20565L9 6.80373M7.5 19.7941L9 17.196M19.7942 16.4999L17.1962 14.9999M4.20577 7.49988L6.80385 8.99988" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                        </div>
                        <div class="">
                            <h4 class="text-md font-semibold">Total Area</h4>
                            <span class="text-sm">891 sqft</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
