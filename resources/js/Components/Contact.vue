<script setup>
import { Head,Link, useForm  } from '@inertiajs/vue3';
import { ref,  onMounted  } from 'vue';
let showMenu = ref(false);
    const toggleNav = () => (showMenu.value = !showMenu.value);

const form = useForm({
    firstname: "",
    lastname: "",
    contact: "",
    contact_info: "",
    activity: "",
    message: "",
});

const submit = () => {
    form.post(route("touch.store"));
};
</script>
<template>
<section class="bg-gray-200 px-6">
    <h1 class="flex font-bold py-16 justify-center items-center ">Are you in need of prayer or counseling? Contact us today!</h1>
    <form @submit.prevent="submit" class="justify-center">
    <div class="grid gap-4 mb-3 md:grid-cols-4 lg:justify-center lg:mx-44">
    <div class="p-1">
        <input type="text"  id="floating_phone" v-model="form.firstname" class="block py-2.5 px-3 w-full text-sm text-gray-900 bg-white  border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="First Name " required />
    </div>
    
    <div class="p-1">
        <input type="text"  id="floating_phone" v-model="form.lastname" class="block py-2.5 px-3 w-full text-sm text-gray-900 bg-white border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="Last Name " required />
    </div>

    <div class="p-1">
 
    <select id="countries" class="block py-2.5 px-3 w-full text-sm text-gray-900 bg-white border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" v-model="form.contact"  required>
    <option value="" disabled >Best way to reach you</option>
    <option value="Phone Call">Phone Call</option>
    <option value="Email">Email</option>
    <option value="WhatsApp Text">WhatsApp Text</option>
    <option value="WhatsApp Call">WhatsApp Call</option>
    <option value="Telegram">Telegram</option>
    </select>    
</div>
    
    <div class="p-1">
        <input type="text"  id="floating_phone" class="block py-2.5 px-3 w-full text-sm text-gray-900 bg-white border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="Contact Information " v-model="form.contact_info" required />
    </div>
</div>

<div class="grid gap-4 mb-3 md:grid-cols-4 lg:justify-center lg:mx-44">
    <div class="p-1">
        <select id="countries" class="block py-2.5 px-3 w-full text-sm text-gray-900 bg-white border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"  v-model="form.activity" required>
            <option value="" disabled > What are you in need of</option>
            <option value="Prayer">Prayer</option>
            <option value="Counseling">Counseling</option>
    </select> 
    </div>
    <div class="p-1 col-span-2">
        <textarea type="text"  id="floating_phone" class="block  px-3 w-full text-sm text-gray-900 bg-white border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer h-44" v-model="form.message"  placeholder="Please state your request here " required />
    </div>
    <div class="p-1 ">
    </div>
</div>
  <div class="flex lg:grid md:grid-cols-3 md:gap-4 justify-center">
    <div class="relative z-0 w-full mb-6 group"></div>
    <div class="relative z-0 w-full mb-6 group">
<button class="bg-black text-white border border-lg px-16 py-3  hover:bg-white hover:text-black hover:border border hover:border-black  text-sm text-white  transition duration-200" :disabled="form.processing">Submit</button>
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