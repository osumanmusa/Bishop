<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { ref,  onMounted  } from 'vue';
let showMenu = ref(false);
    const toggleNav = () => (showMenu.value = !showMenu.value);

const form = useForm({
    firstname: "",
});

const submit = () => {
    form.post(route("getintouch.store"));
};
</script>
<template>
<section class="bg-gray-200 px-6">
    <h1 class="flex font-bold py-16 justify-center items-center ">Are you in need of prayer or counseling? Contact us today!</h1>
    <form action=" " class="justify-center">
    <div class="flex lg:grid md:grid-cols-12 md:gap-4 justify-center lg:mx-44">
    <div class="relative z-0 w-full mb-6 group col-span-3">
        <input type="text"  id="floating_phone" class="block py-2.5 px-3 w-full text-sm text-gray-900 bg-white  border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="First Name " required />
    </div>
    
    <div class="relative z-0 w-full mb-6 group col-span-3">
        <input type="text"  id="floating_phone" class="block py-2.5 px-3 w-full text-sm text-gray-900 bg-white border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="Last Name " required />
    </div>

    <div class="relative z-0 w-full mb-6 group col-span-3">

    <select id="countries" class="block py-2.5 px-3 w-full text-sm text-gray-900 bg-white border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"   required>
    <option value="Phone Call">Phone Call</option>
    <option value="Email">Email</option>
    <option value="WhatsApp Text">WhatsApp Text</option>
    <option value="WhatsApp Call">WhatsApp Call</option>
    <option value="Telegram">Telegram</option>
    </select>    
</div>
    
    <div class="relative z-0 w-full mb-6 group col-span-3">
        <input type="text"  id="floating_phone" class="block py-2.5 px-3 w-full text-sm text-gray-900 bg-white border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="Contact Information " required />
    </div>
</div>

<div class="flex lg:grid md:grid-cols-12 md:gap-4 justify-center lg:mx-44">
    <div class="relative  z-0 w-full mb-4 group lg:col-span-3 ">
        <select id="countries" class="block py-2.5 px-3 w-full text-sm text-gray-900 bg-white border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"   required>
    <option value="Prayer">Prayer</option>
    <option value="Counseling">Counseling</option>
    </select> 
    </div>
    <div class="relative  z-0 w-full mb-4 group lg:col-span-6 ">
        <textarea type="text"  id="floating_phone" class="block  px-3 w-full text-sm text-gray-900 bg-white border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer h-44"  placeholder="Please state your request here " required />
    </div>
    <div class="relative  z-0 w-full mb-4 group lg:col-span-3 hidden-small ">
    </div>
</div>
  <div class="flex lg:grid md:grid-cols-3 md:gap-4 justify-center">
    <div class="relative z-0 w-full mb-6 group"></div>
    <div class="relative z-0 w-full mb-6 group">
<button class="bg-black text-white border border-lg px-16 py-3  hover:bg-white hover:text-black hover:border border hover:border-black  text-sm text-white  transition duration-200">Submit</button>
    </div>
    <div class="relative z-0 w-full mb-6 group"></div>

  </div>
    </form>
</section>
</template>
<style >
.hidden-small {
      display: block;
    }

    @media (max-width: 768px) {
      .hidden-small {
        display: none;
      }
    }
</style>