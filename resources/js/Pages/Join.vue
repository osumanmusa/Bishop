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

          <span class="text-red-700 text-5xl">\\\</span> <span class="text-white text-5xl">Membership </span>
        </h2>


    </div>

</div>
</section>
<section class="bg-gray-50">
    <div class="flex justify-center lg:px-40 ">
    <p class="text-center lg:p-16 font-bold">    
    We would love for you to join us as a member of this great church movement.  Below you will find the various ways you can participate as a member of International Kingdom Church and Damion Bennett Ministries.  

    No matter which membership you choose, we are happy to have you a part of the family.  As we grow together in discovering God, discovering love, and discovering life, it is our prayer that you will receive from Him, be transformed by Him, and make impact in your world.  We can't wait to see you and get to know you.
    </p>    
    </div>
        <div class="flex flex-wrap lg:grid md:grid-cols-12 md:gap-6 justify-center lg:px-40">
            <div class="col-span-3 max-w-sm rounded overflow-hidden shadow-lg bg-gray-200 mb-10">
             
                <span class="w-full px-2 py-2 flex justify-center"><i class="fa fa-house  text-7xl text-blue-700 py-4" ></i></span>
                
                <div class="font-bold text-xl mb-2 px-3 py-4 flex  text-red-800 ">LOCAL CAMPUS MEMBER</div>
                 <div class="mx-1 my-1 ">
                    <p class="text-red-800 text-base px-2 py-3 font-bold">
                        Do you live in the Accra, Ghana area and want to join us in our in person live services; and become a part of a great church movement that is impacting lives across the world.  Then consider becoming a member of our local church campus. 
                    </p>
                 </div>
            </div>
            <div  class="col-span-3 max-w-sm rounded overflow-hidden shadow-lg bg-gray-200 mb-10">  
                <span class="w-full px-2 py-2 flex justify-center"><i class="fa fa-globe text-7xl text-blue-700 py-4" ></i></span>
                
                <div class="font-bold text-xl mb-2 px-3 py-4 flex  text-red-800 ">GLOBAL CAMPUS MEMBER</div>
                <div class="mx-1 my-1 ">
                    <p class="text-red-800 text-base px-2 py-3 font-bold">
                        Do you live in the Accra, Ghana area and want to join us in our in person live services; and become a part of a great church movement that is impacting lives across the world.  Then consider becoming a member of our local church campus. 
                    </p>
                 </div>
            </div>
            <div  class="col-span-3 max-w-sm rounded overflow-hidden shadow-lg bg-gray-200 mb-10">
                <span class="w-full px-2 py-2 flex justify-center"><i class="fa fa-users text-7xl text-blue-700 py-4" ></i></span>
                
                <div class="font-bold text-xl mb-2 px-3 py-4 flex  text-red-800 ">SUPPORT TEAM MEMBERS</div>
                <div class="mx-1 my-1 ">
                    <p class="text-red-800 text-base px-2 py-3 font-bold">
                        Do you live in the Accra, Ghana area and want to join us in our in person live services; and become a part of a great church movement that is impacting lives across the world.  Then consider becoming a member of our local church campus. 
                    </p>
                 </div>
            </div>
            <div  class="col-span-3 max-w-sm rounded overflow-hidden shadow-lg bg-gray-200 mb-10">
                <span class="w-full px-2 py-2 flex justify-center"><i class="fa fa-school text-7xl text-blue-700 py-4" ></i></span>
                
                <div class="font-bold text-xl mb-2 px-3 py-4 flex  text-red-800 ">UNIVERSITY CAMPUS TEAM</div>
                <div class="mx-1 my-1 ">
                    <p class="text-red-800 text-base px-2 py-3 font-bold">
                        Do you live in the Accra, Ghana area and want to join us in our in person live services; and become a part of a great church movement that is impacting lives across the world.  Then consider becoming a member of our local church campus. 
                    </p>
                 </div>
            </div>

        </div>
</section>
<section class="px-16 bg-white py-20">
<div class="flex flex-wrap justify-center ">
    <h1 class="font-bold text-4xl font-weight-bolder pb-6 ">
        MEMBERSHIP REGISTRATION
    </h1>
    <div>
        <form action=" " class="justify-center">
    <div class="grid gap-4 mb-3 md:grid-cols-3  lg:justify-center lg:mx-44">
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

    <div class="p-1 px-2">
    <p>
        If you are in the Accra area, we would love to see you in person.
    </p>

    </div>    

   
</div>

    <div>
        <div class="grid gap-4 mb-3 md:grid-cols-3 lg:justify-center lg:mx-44">
<button class="bg-green-500 text-white border border-lg px-16 py-3  hover:bg-white hover:text-black hover:border border hover:border-black  text-sm text-white  transition duration-200">Submit</button>
    </div>
    </div>
  

    </form>
    </div>
</div>
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
