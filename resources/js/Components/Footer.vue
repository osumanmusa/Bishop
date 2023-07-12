<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { ref,  onMounted  } from 'vue';
let showMenu = ref(false);
    const toggleNav = () => (showMenu.value = !showMenu.value);
</script>
<template>
<section class="footer-bg pb-16">
    <div class="flex justify-center py-10">
    <img src="/img/footer-img.png" class=""/>

    </div>
    <div class="flex justify-center ">
        <p class="font-bold mb-1 px-8 lg:text-4xl text-white">The Office of the Bishop</p>
   </div>
    <div class="grid justify-center ">
        <p class="font-bold mb-5 lg:text-4xl text-white">BISHOP DR. DAMION S.C. BENNETT</p>
        </div>
        
    <div class="grid justify-center ">
        <p class="font-bold mb-1 px-8 lg:text-3xl text-white">Adiringanor, East Legon</p>
        </div>
        
    <div class="grid justify-center ">
        <p class="font-bold mb-5 lg:text-3xl text-white">Accra, Ghana, West Africa</p>
        </div>
        
    <div class="grid justify-center ">
        <p class="font-bold mb-5 px-8 lg:text-3xl text-white">Telephone: +233 20 843 0523 | www.damionbennett.org</p>

    </div>
</section>
	
</template>
<style >
.footer-bg{
    background: rgb(52,50,50);
}
</style>