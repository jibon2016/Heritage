<script setup>
import { Head, Link } from '@inertiajs/vue3';
import ButtonBg from "@/Components/ButtonBg.vue";
import PlayButton from "@/Components/PlayButton.vue";
import Heading from "@/Components/Heading.vue";
import Service from "@/Components/Service.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import  {getImageUrl} from '@/Composables/useImageURL.js';
import GuestLayout from "@/Layouts/GuestLayout.vue";


defineProps({
    phpVersion: {
        type: String,
        required: true,
    },
})



const heroVideo = getImageUrl('hero.webm');
const heroPoster = getImageUrl('hero-poster.png');
const banner1 = getImageUrl('banner-1.jpg');
const banner2 = getImageUrl('banner-2.jpg');
</script>

<template>
<GuestLayout>
    <div class="">
        <video playsinline autoplay muted loop :poster='heroPoster' class="absolute min-w-full min-h-full bottom-0 top-10">
            <source :src='heroVideo' type='video/mp4'>
        </video>>

        <div class="absolute w-full h-[535px] top-[75px] bg-overlay ">
            <div class="w-[700px] mx-auto mt-32 text-center">
                <h1 class="text-white text-6xl mb-10 font-bold">Your Portal to India's Exquisite Real Estate</h1>
                <h6 class="text-white mb-5 text-md">Seamlessly connecting you to the heartbeat of india's prime property.</h6>
                <ButtonBg color="dark"/>
            </div>
        </div>
    </div>

    <div class="container px-4 flex my-5 mt-[590px]">
        <div class="basis-1/2 flex relative justify-center">
            <img class="rounded" :src="banner1" width="450px" height="400px" alt="">
            <img class="absolute rounded top-[185px] left-[180px] w-[450px] h-[200px]" :src="banner2" alt="">
            <PlayButton class="absolute left-[500px] top-[150px] shadow"/>
        </div>
        <div class="basis-1/2 pl-24">
            <Heading text="Property buying" />
            <h3 class="text-4xl mt-4 font-bold">Efficient and Transparent Home Buying Solutions</h3>
            <p class="mt-5 drop-shadow-xl font-semibold text-black leading-7"> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
            <ButtonBg class="mt-4" color="light"/>
        </div>
    </div>
    <div class="container px-4 flex my-5 mt-[250px]">
        <div class="basis-1/2 pl-16">
            <Heading text="Property buying" />
            <h3 class="text-4xl mt-4 font-bold">Efficient and Transparent Home Buying Solutions</h3>
            <p class="mt-5 drop-shadow-xl font-semibold text-black leading-7"> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
            <ButtonBg class="mt-4" color="light"/>
        </div>
        <div class="basis-1/2 flex relative justify-center">
            <img class="rounded mt-16" :src="banner1" width="450px" height="400px" alt="">
            <img class="absolute rounded top-[0px] left-[180px] w-[450px] h-[200px]" :src="banner2" alt="">
            <PlayButton class="absolute left-[145px] top-[30px] shadow"/>
        </div>
    </div>

    <div class="container px-4 flex my-5 mt-[150px]">
        <div class="basis-1/2 flex relative justify-center">
            <img class="rounded" :src="banner1" width="450px" height="400px" alt="">
            <img class="absolute rounded top-[185px] left-[180px] w-[450px] h-[200px]" :src="banner2" alt="">
            <PlayButton class="absolute left-[500px] top-[150px] shadow-xl"/>
        </div>
        <div class="basis-1/2 pl-24">
            <Heading text="Property buying" />
            <h3 class="text-4xl mt-4 font-bold">Efficient and Transparent Home Buying Solutions</h3>
            <p class="mt-5 drop-shadow-xl font-semibold text-black leading-7"> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
            <ButtonBg class="mt-4" color="light"/>
        </div>
    </div>

    <div class=" px-20 py-10 mt-[150px]">
        <div class="text-center mb-10 text-4xl font-bold">Other Services</div>
        <div class="flex space-x-4">
            <Service/>
            <Service/>
            <Service/>
        </div>
    </div>
</GuestLayout>
</template>
