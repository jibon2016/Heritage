<script setup>
import PropertyCard from "@/Components/PropertyCard.vue";
import Testimonial from "@/Components/Testimonial.vue";
import GuestLayout from "@/Layouts/GuestLayout.vue";
defineProps({
    properties: {
        type: Object,
        required: true,
    },
    search: {
        type: Object,
        required: true,
    },
})

</script>

<template>
<GuestLayout>
    <div class="px-20 py-5">
        <div class="flex justify-start">
            <div class="basis-[70%]">
                <div class="border-b-2 py-3 border-gray-200">
                    <div class="flex space-x-3">
                        <div class="px-3 py-1 rounded bg-blue-700 text-gray-100 font-[500]">
                            <span>Properties(400)</span>
                        </div>
                        <div class="px-3 py-1 rounded bg-blue-50 text-gray-500 font-[500]">
                            <span>New Projects(400)</span>
                        </div>
                        <div class="px-3 py-1 rounded bg-blue-50 text-gray-500 font-[500]">
                            <span>Pre-launch offers</span>
                        </div>
                    </div>
                </div>
                <div class="py-5 border-b-2 border-gray-200">
                    <h1 class="text-2xl font-bold pb-2">'{{search}}' result for rental</h1>
                    <PropertyCard v-for="property in properties" :key="property.id"/>
                </div>
                <div class="py-5">
                    <div class="flex space-x-3">
                        <div class="px-3 py-1 rounded bg-blue-700 text-gray-100 font-[500]">
                            <span>1</span>
                        </div>
                        <div class="px-3 py-1 rounded bg-blue-50 text-gray-500 font-[500]">
                            <span>2</span>
                        </div>
                        <div class="px-3 py-1 rounded bg-blue-50 text-gray-500 font-[500]">
                            <span>Next</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="px-20 py-10">
        <div class="flex justify-center items-center">
            <h3 class="text-4xl font-bold text-gray-900 ">Testimonials</h3>
        </div>
        <div class="flex justify-between space-x-6 py-5">
            <Testimonial/>
            <Testimonial/>
        </div>
    </div>
</GuestLayout>
</template>

<style scoped>

</style>
