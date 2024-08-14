<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {ref} from "vue";
import SingleProperty from "@/Components/SingleProperty.vue";
import Testimonial from "@/Components/Testimonial.vue";
import  {getImageUrl} from '@/Composables/useImageURL.js';
import {useForm} from "@inertiajs/vue3";
import GuestLayout from "@/Layouts/GuestLayout.vue";

const user = getImageUrl('iron-man.jpg');
const BgProperty = getImageUrl('find-property-bg.jpg');
const tabID = ref(1);

function tabToggler (value) {
    tabID.value = value;
}


const form = useForm({
    search: '',
    location: '',
    property_type: '',
    budget: '',
});

const submit = () => {
    form.post('/search' );
};
</script>

<template>
    <GuestLayout>
        <div class="relative h-[500px]">
            <img :src="BgProperty" class="h-[200px] w-full" alt="">
            <div class="w-[800px] absolute left-[20%] bg-white rounded top-[100px]">
                <div class="tabs p-5 shadow-2xl">
                    <div class="block">
                        <ul class="flex border-b border-gray-200 space-x-3 transition-all duration-300 -mb-px">
                            <li>
                                <a @click="tabToggler(1)" class="cursor-pointer inline-block py-4 px-6 text-gray-500 hover:text-gray-800 font-medium tab-active:border-b-indigo-600 tab-active:text-indigo-600 tablink whitespace-nowrap" :class="tabID === 1 ? ' border-b-2 border-blue-400' : ''"> Buy </a>
                            </li>
                            <li>
                                <a @click="tabToggler(2)" class="cursor-pointer inline-block py-4 px-6 text-gray-500 hover:text-gray-800 font-medium tab-active:border-b-indigo-600 tab-active:text-indigo-600 tablink whitespace-nowrap" :class="tabID === 2 ? ' border-b-2 border-blue-400' : ''"> Rent </a>
                            </li>
                            <li>
                                <a @click="tabToggler(3)" class="cursor-pointer inline-block py-4 px-6 text-gray-500 hover:text-gray-800 font-medium tab-active:border-b-indigo-600 tab-active:text-indigo-600 tablink whitespace-nowrap" :class="tabID === 3 ? ' border-b-2 border-blue-400' : ''"> PG </a>
                            </li>
                            <li>
                                <a @click="tabToggler(4)" class="cursor-pointer inline-block py-4 px-6 text-gray-500 hover:text-gray-800 font-medium tab-active:border-b-indigo-600 tab-active:text-indigo-600 tablink whitespace-nowrap" :class="tabID === 4 ? ' border-b-2 border-blue-400' : ''"> Plot </a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-3">
                        <div class="" :class="tabID === 1 ? 'block' : 'hidden' ">
                            <div class="flex items-center border border-gray-300 rounded px-3 ">
                                <svg class="h-[20px] w-[20px] p-0 m-0" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.7955 15.8111L 21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z" stroke="#333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <input type="text" v-model="form.search" placeholder="search properties" class="border-0 w-full outline-0 focus:ring-0">
                            </div>
                            <div class="flex py-4" >
                                <div class="basis-1/3 px-3" >
                                    <span class="flex font-semibold"><svg width="20px" class="" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#e9c616"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z" stroke="#d6c71f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z" stroke="#EE6611" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>  Your Location</span>
                                    <select v-model="form.location" class="mt-3 w-full border-0 bg-blue-50 ">
                                        <option value=""></option>
                                        <option value="">Dhaka</option>
                                    </select>
                                </div>
                                <div class="basis-1/3 px-3" >
                                    <span class="flex font-semibold"><svg width="24px" height="24px" viewBox="0 -0.5 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M11.75 18C11.75 18.4142 12.0858 18.75 12.5 18.75C12.9142 18.75 13.25 18.4142 13.25 18H11.75ZM13.25 15C13.25 14.5858 12.9142 14.25 12.5 14.25C12.0858 14.25 11.75 14.5858 11.75 15H13.25ZM12.5 18.75C12.9142 18.75 13.25 18.4142 13.25 18C13.25 17.5858 12.9142 17.25 12.5 17.25V18.75ZM6.15 16.5L5.40486 16.4147C5.40162 16.443 5.4 16.4715 5.4 16.5H6.15ZM7.74514 9.15523C7.79222 8.7437 7.49677 8.37192 7.08524 8.32484C6.67372 8.27776 6.30194 8.57321 6.25486 8.98474L7.74514 9.15523ZM12.5 17.25C12.0858 17.25 11.75 17.5858 11.75 18C11.75 18.4142 12.0858 18.75 12.5 18.75V17.25ZM18.85 16.5H19.6C19.6 16.4715 19.5984 16.443 19.5951 16.4147L18.85 16.5ZM18.7451 8.98474C18.6981 8.57321 18.3263 8.27776 17.9148 8.32484C17.5032 8.37192 17.2078 8.7437 17.2549 9.15523L18.7451 8.98474ZM6.60593 8.43185C6.2535 8.6495 6.14423 9.11163 6.36187 9.46405C6.57951 9.81648 7.04165 9.92575 7.39407 9.70811L6.60593 8.43185ZM11.662 6.19098L11.337 5.51504C11.3133 5.52643 11.2903 5.53905 11.2679 5.55285L11.662 6.19098ZM13.338 6.19098L13.7324 5.55304C13.7099 5.53916 13.6868 5.52648 13.663 5.51504L13.338 6.19098ZM17.6056 9.71093C17.958 9.92873 18.4201 9.81968 18.6379 9.46735C18.8557 9.11503 18.7467 8.65284 18.3944 8.43504L17.6056 9.71093ZM7.39428 9.71098C7.74664 9.49322 7.85575 9.03106 7.638 8.6787C7.42024 8.32634 6.95807 8.21723 6.60572 8.43498L7.39428 9.71098ZM5.10572 9.36198C4.75336 9.57974 4.64425 10.0419 4.862 10.3943C5.07976 10.7466 5.54193 10.8557 5.89428 10.638L5.10572 9.36198ZM18.3943 8.43498C18.0419 8.21723 17.5798 8.32634 17.362 8.6787C17.1442 9.03106 17.2534 9.49322 17.6057 9.71098L18.3943 8.43498ZM19.1057 10.638C19.4581 10.8557 19.9202 10.7466 20.138 10.3943C20.3558 10.0419 20.2466 9.57974 19.8943 9.36198L19.1057 10.638ZM13.25 18V15H11.75V18H13.25ZM12.5 17.25H8V18.75H12.5V17.25ZM8 17.25C7.54762 17.25 7.27174 17.2032 7.11505 17.1103C7.056 17.0753 7.0146 17.0337 6.98122 16.9671C6.94399 16.8928 6.9 16.7523 6.9 16.5H5.4C5.4 17.3745 5.72359 18.0292 6.3502 18.4007C6.89026 18.7208 7.53938 18.75 8 18.75V17.25ZM6.89514 16.5852L7.74514 9.15523L6.25486 8.98474L5.40486 16.4147L6.89514 16.5852ZM12.5 18.75H17V17.25H12.5V18.75ZM17 18.75C17.4606 18.75 18.1097 18.7208 18.6498 18.4007C19.2764 18.0292 19.6 17.3745 19.6 16.5H18.1C18.1 16.7523 18.056 16.8928 18.0188 16.9671C17.9854 17.0337 17.944 17.0753 17.8849 17.1103C17.7283 17.2032 17.4524 17.25 17 17.25V18.75ZM19.5951 16.4147L18.7451 8.98474L17.2549 9.15523L18.1049 16.5852L19.5951 16.4147ZM7.39407 9.70811L12.0561 6.82911L11.2679 5.55285L6.60593 8.43185L7.39407 9.70811ZM11.987 6.86692C12.3112 6.71103 12.6888 6.71103 13.013 6.86692L13.663 5.51504C12.9279 5.16165 12.0721 5.16165 11.337 5.51504L11.987 6.86692ZM12.9436 6.82893L17.6056 9.71093L18.3944 8.43504L13.7324 5.55304L12.9436 6.82893ZM6.60572 8.43498L5.10572 9.36198L5.89428 10.638L7.39428 9.71098L6.60572 8.43498ZM17.6057 9.71098L19.1057 10.638L19.8943 9.36198L18.3943 8.43498L17.6057 9.71098ZM11.75 11.044C11.75 10.6298 12.0858 10.294 12.5 10.294V8.79398C11.2574 8.79398 10.25 9.80134 10.25 11.044H11.75ZM12.5 10.294C12.9142 10.294 13.25 10.6298 13.25 11.044H14.75C14.75 9.80134 13.7426 8.79398 12.5 8.79398V10.294ZM13.25 11.044C13.25 11.4582 12.9142 11.794 12.5 11.794V13.294C13.7426 13.294 14.75 12.2866 14.75 11.044H13.25ZM12.5 11.794C12.0858 11.794 11.75 11.4582 11.75 11.044H10.25C10.25 12.2866 11.2574 13.294 12.5 13.294V11.794Z" fill="#EE6611"></path> </g></svg>  Property Type</span>
                                    <select v-model="form.property_type" class="mt-3 w-full border-0 bg-blue-50 ">
                                        <option value=""></option>
                                        <option value="">Apartment</option>
                                    </select>
                                </div>

                                <div class="basis-1/3 px-3" >
                                    <span class="flex items-center font-semibold"><svg fill="#EE6611" width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M12.32 8a3 3 0 0 0-2-.7H5.63A1.59 1.59 0 0 1 4 5.69a2 2 0 0 1 0-.25 1.59 1.59 0 0 1 1.63-1.33h4.62a1.59 1.59 0 0 1 1.57 1.33h1.5a3.08 3.08 0 0 0-3.07-2.83H8.67V.31H7.42v2.3H5.63a3.08 3.08 0 0 0-3.07 2.83 2.09 2.09 0 0 0 0 .25 3.07 3.07 0 0 0 3.07 3.07h4.74A1.59 1.59 0 0 1 12 10.35a1.86 1.86 0 0 1 0 .34 1.59 1.59 0 0 1-1.55 1.24h-4.7a1.59 1.59 0 0 1-1.55-1.24H2.69a3.08 3.08 0 0 0 3.06 2.73h1.67v2.27h1.25v-2.27h1.7a3.08 3.08 0 0 0 3.06-2.73v-.34A3.06 3.06 0 0 0 12.32 8z"></path></g></svg> Budget</span>
                                    <input v-model="form.budget" class="mt-3 w-full border-0 bg-blue-50 outline-amber-300 focus:ring-amber-300" type="text"/>
                                </div>
                            </div>
                            <a @click="submit" class="w-full rounded text-white flex bg-blue-600 text-center justify-center items-center py-2  mt-4">
                                <svg class="h-[20px] w-[20px] p-0 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.7955 15.8111L 21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> Find Property</a>
                        </div>
                        <div  class="" :class="tabID === 2 ? 'block' : 'hidden' ">
                            <p class="text-gray-500 dark:text-gray-400"> This is the <em class="font-semibold text-gray-800 dark:text-gray-200">second</em> item's tab body. </p>
                        </div>
                        <div class="" :class="tabID === 3 ? 'block' : 'hidden' ">
                            <p class="text-gray-500 dark:text-gray-400"> This is the <em class="font-semibold text-gray-800 dark:text-gray-200">third</em> item's tab body. </p>
                        </div>
                        <div class="" :class="tabID === 4 ? 'block' : 'hidden' ">
                            <p class="text-gray-500 dark:text-gray-400"> This is the <em class="font-semibold text-gray-800 dark:text-gray-200">third</em> item's tab body. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="px-20 py-10">
            <div class="flex justify-center items-center">
                <div class="basis-1/4 py-3 px-5 mx-3 bg-orange-100">
                    <h2 class="text-4xl font-bold text-orange-600 py-3 ">2k+</h2>
                    <p class="text-sm py-2">New Flat Listed</p>
                    <div class="flex justify-between items-center">
                        <a href="" class="underline text-orange-400">view all</a>
                        <div class="">
                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M9 13L12 16M12 16L15 13M12 16V8M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#EE6611" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                        </div>
                    </div>
                </div>
                <div class="basis-1/4 py-3 px-5 mx-3 bg-blue-100">
                    <h2 class="text-4xl font-bold text-orange-600 py-3"></h2>
                    <p class="text-sm mt-10 py-2">New Flat Listed</p>
                    <div class="flex justify-between items-center">
                        <a href="" class="underline text-blue-400">view all</a>
                        <div class="">
                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M9 13L12 16M12 16L15 13M12 16V8M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#0059B1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                        </div>
                    </div>
                </div>
                <div class="basis-1/4 py-3 px-5 mx-3 bg-orange-100">
                    <h2 class="text-4xl font-bold text-orange-600 py-3 ">2k+</h2>
                    <p class="text-sm py-2">New Flat Listed</p>
                    <div class="flex justify-between items-center">
                        <a href="" class="underline text-orange-400">view all</a>
                        <div class="">
                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M9 13L12 16M12 16L15 13M12 16V8M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#EE6611" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                        </div>
                    </div>
                </div>
                <div class="basis-1/4 py-3 px-5 mx-3 bg-blue-100">
                    <h2 class="text-4xl font-bold text-orange-600 py-3">2k+</h2>
                    <p class="text-sm  py-2">New Flat Listed</p>
                    <div class="flex justify-between items-center">
                        <a href="" class="underline text-blue-400">view all</a>
                        <div class="">
                            <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M9 13L12 16M12 16L15 13M12 16V8M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#0059B1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="px-20 py-10">
            <div class="flex justify-between items-center">
                <h3 class="text-4xl font-bold text-gray-900 ">Popular Properties</h3>
                <a href="" class="underline text-sm font-semibold text-blue-700">See all property</a>
            </div>
            <div class="flex justify-between space-x-6 py-5">
                <SingleProperty/>
                <SingleProperty/>
                <SingleProperty/>
            </div>
        </div>

        <div class="px-20 py-10">
            <div class="flex justify-between items-center">
                <h3 class="text-4xl font-bold text-gray-900 ">New Listed Properties</h3>
                <a href="" class="underline text-sm font-semibold text-blue-700">See all property</a>
            </div>
            <div class="flex justify-between space-x-6 py-5">
                <SingleProperty/>
                <SingleProperty/>
                <SingleProperty/>
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
