<script setup>
import { Head } from '@inertiajs/vue3';
import  {getImageUrl}  from '@/Composables/useImageURL.js';
import GuestLayout from "@/Layouts/GuestLayout.vue";

const image = getImageUrl('banner-1.jpg');
</script>

<template>
    <GuestLayout>
        <Head title="Single Porperty"/>
        <div class="px-20 py-5 mx-auto">
            <div class="flex">
                <div class="">
                    <h1 class="text-lg font-semibold">3 BHK Builder Floor for Sale in Site Ram Bazar New Delhi</h1>
                    <div class="flex text-sm py-1 space-x-1 ml-0"><svg width="20px" class="" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#EE6611"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z" stroke="#EE6611" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z" stroke="#d6c71f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg><p>Meadowshire Park, Greenfield, USA</p></div>
                </div>
                <span class="text-2xl font-bold px-5">$300k</span>
            </div>
            <div class="flex">
                <div class="basis-[70%] py-5">
                    <div class="">
                        <img :src="image" width="100%" class="w-full h-96" alt="">
                    </div>
                    <div class="flex space-x-10 py-5">
                        <div class="basis-1/3 ">
                            <img :src="image" class="w-full h-[120px]" alt="">
                        </div>
                        <div class="basis-1/3 ">
                            <img :src="image" class="w-full h-[120px]" alt="">
                        </div>
                        <div class="basis-1/3">
                            <img :src="image" class="w-full h-[120px]" alt="">
                        </div>
                    </div>
                </div>
                <div class="basis-[30%] py-5 px-4">
                    <div class=" px-5 pt-5 bg-blue-50">
                        <span class=" text-gray-800 text-sm  ">Property Value</span>
                        <h3 class="text-md py-3 font-bold font-bl">$ 300k - $310k</h3>
                        <p class="text-xs text-gray-600 leading-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid assumenda est ex nemo porro. Architecto error explicabo </p>
                        <div>
                            <div class="pt-3">
                                <div class="pb-2 text-sm font-[500]">Min</div>
                                <input type="text" class="py-2 rounded border-0 w-full text-sm " placeholder="$200k">
                            </div>
                            <div class="pt-3 ">
                                <div class="pb-2 text-sm font-[500]">Max</div>
                                <input type="text" class="py-2 rounded border-0 w-full text-sm " placeholder="$200k">
                            </div>
                            <div class="p-3">
                                <input type="range" class="py-2 rounded border-0 w-full text-sm " placeholder="$200k">
                            </div>
                            <div class="text-center pb-5">
                                <button class="bg-blue-500 text-blue-100 py-1 px-2">Bid Property</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>

<style scoped>

</style>
