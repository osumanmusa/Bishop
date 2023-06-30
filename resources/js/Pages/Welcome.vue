<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Navbar from "../Components/Navbar.vue";
import { ref,  onMounted  } from 'vue'
import { initFlowbite } from 'flowbite';
import { 
    initAccordions, 
    initCarousels, 
    initCollapses, 
    initDials, 
    initDismisses, 
    initDrawers, 
    initDropdowns, 
    initModals, 
    initPopovers, 
    initTabs, 
    initTooltips} from 'flowbite';

    onMounted(() => {
        
    initFlowbite();
    initAccordions();
    initCarousels();
    initCollapses();
    initDials();
    initDismisses();
    initDrawers();
    initDropdowns();
    initModals();
    initPopovers();
    initTabs();
    initTooltips();
})

</script>

<template>
    <Head title="Welcome" />
<Navbar/>
    <div class="container">
        <div class="min-h-screen bg-white">
            <nav class="bg-white border-b border-gray-100">
<div id="default-carousel" class="relative w-full mx-height" data-carousel="slide" >
    <!-- Carousel wrapper -->
    <div class="relative h-full overflow-hidden rounded-lg md:h-full">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/img/logo.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/img/logo.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/img/logo.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/img/logo.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/img/logo.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
</nav>

<section class="justify-center nbg">
    <center class="py-12">
    <h1 class="text-4xl mb-4 mt-4 font-bold">
LOVE GOD. LOVE YOURSELF. LOVE OTHER PEOPLE.</h1>
    <div class="lg:grid lg:grid-cols-12 gap-1 ">
        <div class="qborder col-span-7 text-center leading-7 font-bold  lg:ml-48 py-4 px-6">
            
The mandate for humanity has always been and will always be manifested in our ability
 to demonstrate the love of Jesus Christ.  After all the theological debates, questions of purpose,
  and research of science, all we'll be left with is the great need, desire, and longing to be loved,
   to feel loved, and to give love.  And no matter how much we try to make sense of it, the conversation 
   of love can only be realized in the reality of God through Jesus Christ.
   <div class="inline-flex pt-12 mb-6">
   <Link class="mr-2 py-3 px-6 bg-red-700 hover:bg-red-500 text-sm text-white  rounded-lg transition duration-200">Learn More</Link>
   <Link class="py-3 px-6 bg-gary-100 hover:bg-gray-100 hover:text-gray-800  text-sm text-red-600  rounded-lg  hover:border border rounded-lg hover:border-black transition duration-200">Learn More About Bishop Bennet</Link>
    </div>
</div>

        <div class=" py-4 px-6 mx-10 lg:w-80 col-span-5 text-justify leading-7 border-left font-italic text-red-500 font-bold">
            <i>We have known and have believed the love that God has for us. 
            God is love, and those who remain in love remain in God and God remains in them</i>
        <p class="text-red-800 text-center mt-8">I John 4:16</p>
        </div>

    </div>
    </center>
</section>
<section>
    <div class="">

    </div>
</section>

</div>
</div>

</template>

<style scoped>
.mx-height{
    height:500px;
}
.qborder{
    border-right: 1px solid black;
}
.nbg{
    background: #F7F5E1;
}
</style>
