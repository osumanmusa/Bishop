<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { ref,  onMounted  } from 'vue';
let showMenu = ref(false);
    const toggleNav = () => (showMenu.value = !showMenu.value);
</script>
<template>
    
	<nav class="sticky top-0 nav px-4 py-4 flex justify-between items-center bg-white shadow-md  ">
		<a class="text-3xl font-bold leading-none" href="#">
			<img :src="'/img/logo.png'" class="h-20"/>
		</a>
        <div class="grid px-4">
            
        <span class="font-bold" >THE OFFICE OF THE BISHOP</span>
        <span class="text-xl font-bold">DR. DAMION S.C. BENNETT</span>

        </div>
		<div class="lg:hidden">
			<button @click="toggleNav" class="navbar-burger flex items-center text-blue-600 p-3">
				<svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<title>Mobile menu</title>
					<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
				</svg>
			</button>
		</div>
		<ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 md:w-auto xl:w-auto 2xl:w-auto lg:flex md:mx-auto xl:mx-auto 2xl:mx-auto lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
			<li><a class="text-sm text-gray-800 hover:text-red-500" :href="'/'" :class="{ 'activated': $page.url === '/' }">Home</a></li>
			<li class="text-gray-300">
		
			</li>
			<li><a class="text-sm text-gray-800 hover:text-red-500" :href="'/bishop'" :class="{ 'activated': $page.url === '/bishop' }">The Bishop</a></li>
			<li class="text-gray-300">

			</li>
			<li><a class="text-sm text-gray-800 hover:text-red-500" :href="'/Events'" :class="{ 'activated': $page.url === '/Events' }">Events</a></li>
			<li class="text-gray-300">
	
			</li>
			<li><a class="text-sm text-gray-800 hover:text-red-500" :href="'/Join'" :class="{ 'activated': $page.url === '/Join' }">Join</a></li>
			<li class="text-gray-300">
				<!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
				</svg> -->
			</li>
			<li><a class="text-sm text-gray-800 hover:text-red-500" :href="'/Contact'" :class="{ 'activated': $page.url === '/Contact' }">Contact</a></li>
		</ul>
		<a class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-blue-600 hover:bg-blue-400 text-sm text-white font-bold  rounded-xl transition duration-200" href="#">Church</a>
		<a class="hidden lg:inline-block lg:mr-3 py-2 px-6 bg-red-500 hover:bg-red-200 text-sm text-white font-bold rounded-xl transition duration-200" href="#">Work</a>
        <a class="hidden lg:inline-block py-2 px-6 bg-green-500 hover:bg-green-200 text-sm text-white font-bold rounded-xl transition duration-200" href="#">Business</a>

    </nav>
	<div 
        :class="showMenu ? 'flex' : 'hidden'"
         class="navbar-menu relative z-50 lg:hidden">
		<div 
        :class="showMenu ? 'flex' : 'hidden'" @click="toggleNav"  class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
		<nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
			<div class="flex items-center mb-8">
				<a class="mr-auto text-3xl font-bold leading-none" href="/">
					<img :src="'/img/logo.png'" class="h-12"/>
				</a>
        <div class="grid pr-1">
            
        <span class="font-bold font-sm" >THE OFFICE OF THE BISHOP</span>
        <span class="text-lg font-bold">DR. DAMION S.C. BENNETT</span>

        </div>
				<button @click="toggleNav"  class="navbar-close">
					<svg class="h-6 w-6 text-gray-800 cursor-pointer hover:text-gray-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
					</svg>
				</button>
			</div>
			<div>
				<ul>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-800 hover:bg-blue-50 hover:text-blue-600 rounded" :href="'/'" :class="{ 'activated': $page.url === '/' }">Home</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-800 hover:bg-blue-50 hover:text-blue-600 rounded" :href="'/bishop'" :class="{ 'activated': $page.url === '/bishop' }">The Bishop</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-800 hover:bg-blue-50 hover:text-blue-600 rounded" :href="'/Events'" :class="{ 'activated': $page.url === '/Events' }">Events</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-800 hover:bg-blue-50 hover:text-blue-600 rounded" :href="'/Join'" :class="{ 'activated': $page.url === '/Join' }">Join</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-800 hover:bg-blue-50 hover:text-blue-600 rounded" :href="'/Contact'" :class="{ 'activated': $page.url === '/Contact' }">Contact</a>
					</li>
					<li class="mb-1 flex justify-between ">
						<a class="block p-4 text-sm font-semibold lg:ml-auto lg:mr-3 py-2 px-6 blue-bg hover:bg-white text-sm text-white font-bold  rounded-xl transition duration-200" :href="'/Contact'" :class="{ 'activated': $page.url === '/Contact' }">Contact</a>
					
						<a class="block p-4 text-sm font-semibold lg:ml-auto lg:mr-3 py-2 px-6 red-bg hover:bg-white text-sm text-white font-bold  rounded-xl transition duration-200" :href="'/Contact'" :class="{ 'activated': $page.url === '/Contact' }">Contact</a>
						
						<a class="block p-4 text-sm font-semibold lg:ml-auto lg:mr-3 py-2 px-6 green-bg hover:bg-white text-sm text-white font-bold  rounded-xl transition duration-200" :href="'/Contact'" :class="{ 'activated': $page.url === '/Contact' }">Contact</a>
					</li>
				</ul>
			</div>

		</nav>
	</div>
</template>
<style scoped>
.activated{
    color:rgb(3, 45, 233)
}
.sticky{
	
position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
  
  z-index: 30;
}
.green-bg{
background: #3E8D41;
}
.red-bg{
background: rgb(165,37,39);
}
.blue-bg{
	background: #1D28DC;
}
</style>