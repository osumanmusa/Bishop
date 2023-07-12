<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Navbar from "../Components/Navbar.vue";
import Footer from "../Components/Footer.vue";
import Contact from "../Components/Contact.vue";
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
    <div class="container-fluid">
        <div class="min-h-screen bg-white">
<section class="bish-bg">
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">

    <div class="flex flex-col mb-5 sm:text-center sm:mb-0">


        <h2 class="font-bold  text-gray-900 sm:text-4xl md:mx-auto">

          <span class="text-red-700 text-5xl">\\\</span> <span class="text-white text-5xl">Contact</span>
        </h2>


    </div>

</div>
</section>
<section class="bg-gray-50 ">
    <div class="flex grid justify-center lg:px-40 lg:py-16 p-6">
    <p class="text-center lg:px-16 font-bold">    
        We are so happy that you took the time to stop by our website.

        Always remember that we are here to serve you.  If you are in need of ministry services, business consultation, 

        want to find out more about our list of companies, or just in need of counseling,

        feel free to reach us by filling out the contact form below.
    </p>
    <p class=" text-center lg:px-16 font-bold py-4">
        We would love to meet you and be of assistance.
    </p>    
    </div>

        <form action=" " class="justify-center">
    <div class="flex flex-wrap grid gap-1 mb-3 md:grid-cols-3  lg:justify-center lg:mx-44">
        <div class="p-1">
        <select
            class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
        >
            <option value="Bishop">Bishop</option>
            <option value="Apostle">Apostle</option>
            <option value="Prophet">Prophet</option>
            <option value="Pastor">Pastor</option>
            <option value="Dr">Dr</option>
            <option value="Mr.">Mr.</option>
            <option value="Mrs.">Mrs.</option>
            <option value="Ms.">Ms.</option>
        </select>
    </div>
    <div class="p-1">
        <input type="text"  id="floating_phone" class="block py-2.5 px-3 w-full text-sm text-gray-900 bg-white  border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="First Name " required />
    </div>
    
    <div class="">
        <input type="text"  id="floating_phone" class="block py-2.5 px-3 w-full text-sm text-gray-900 bg-white border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="Last Name " required />
    </div>
    
    </div>
    
    <div class="grid gap-4 mb-3 md:grid-cols-3 lg:justify-center lg:mx-44">
    <div class="p-1">
        <input type="text"  id="floating_phone" class="block py-2.5 px-3 w-full text-sm text-gray-900 bg-white  border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="City " required />
    </div>
    
    <div class="p-1">
        <input type="text"  id="floating_phone" class="block py-2.5 px-3 w-full text-sm text-gray-900 bg-white border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="Town/Area " required />
    </div>    
    <div class="p-1">
        <input type="text"  id="floating_phone" class="block py-2.5 px-3 w-full text-sm text-gray-900 bg-white  border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="State/Regions/Province " required />
    </div>

    
</div>
    
    <div class="grid gap-4 mb-3 md:grid-cols-3 lg:justify-center lg:mx-44">
    <div class="p-1">
    <select id="countries" class="block py-2.5 px-3 w-full text-sm text-gray-900 bg-white border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"   required>
        <option disabled selected>Country</option>
        <option v-for="c in countries" :key="c.id" :value="c.id ">{{ c.name }}</option>
    </select> 
    </div>
    
    <div class="p-1 ">
        <input type="email"  id="floating_phone" class="block py-2.5 px-3 w-full text-sm text-gray-900 bg-white border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="Email Address " required />
    </div>    
    <div class="p-1 ">
        <input type="tel"  id="floating_phone" class="block py-2.5 px-3 w-full text-sm text-gray-900 bg-white  border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="Mobile Number " required />
    </div>
    
    
</div>
    
    <div class="grid gap-4 mb-3 md:grid-cols-3 lg:justify-center lg:mx-44">
    <div class="p-1 px-2">
        <input type="text"  id="floating_phone" class="block py-2.5 px-3 w-full text-sm text-gray-900 bg-white  border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="website" required />

    </div>
    
    <div class="p-1 ">
    <select id="countries" class="block py-2.5 px-3 w-full text-sm text-gray-900 bg-white border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"   required>
        <option disabled selected>Age</option>
        <option value="18-24">18-24 years</option>
    <option value="25-34">25-34 years</option>
    <option value="35+">>35+</option>
    </select>     
    </div>    
    <div class="p-1">
    <select id="countries" class="block py-2.5 px-3 w-full text-sm text-gray-900 bg-white border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"   required>
        <option disabled selected>Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select> 
    </div>

    
    </div>
    
    <div class="grid gap-4 mb-3 md:grid-cols-3 lg:justify-center lg:mx-44">
    <div class="p-1">
    <select id="countries" class="block py-2.5 px-3 w-full text-sm text-gray-900 bg-white border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"   required>
        <option value="18-24">Men and Women Relationship Confrence Accra</option>
    <option value="25-34">Kumasi Ministerial Workshop</option>
    </select> 
    </div>
    
    <div class="p-1">
    <select id="countries" class="block py-2.5 px-3 w-full text-sm text-gray-900 bg-white border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"   required>
    <option value="18-24">In person</option>
    <option value="25-34">Facebook Live</option>
    <option value="35+">Instagram Live</option>
    <option value="35+">Youtube Live</option>
    </select> 
    </div>



   
</div>

    <div>
        <div class="grid gap-4 mb-3 md:grid-cols-3 lg:justify-center lg:mx-44">
<button class="bg-green-500 text-white border border-lg px-16 py-3  hover:bg-white hover:text-black hover:border border hover:border-black  text-sm text-white  transition duration-200">Submit</button>
    </div>
    </div>
  

    </form>
</section>
<Contact/>
<Footer/>
</div>
</div>

</template>

<style >
.bish-bg{
background: rgb(12,49,174);

}
.card-bg{
    background: rgb(255,195,20);
}
.ab-bg{
    background: #14344E;
}
    @media (max-width: 768px) {
      .small-width  {
        width: 410px;
      }
      .hidden-small {
      display: block;
    }
    }
</style>
