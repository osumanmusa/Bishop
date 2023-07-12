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

          <span class="text-red-700 text-5xl">\\\</span> <span class="text-white text-5xl">Bishop Dr. Damion S.C. Bennett</span>
        </h2>


    </div>

</div>
</section>
<section class="bg-gray-100">
    <div class="lg:px-40 lg:py-20 px-5 py-4">
        <video src="/video/file.mp4" controls/>
        <div class="py-5 px-3 text-lg">
            <p class="mb-5">
                Dr. Damion S. C. Bennett has emerged with a passion to unapologetically preach the gospel of the Kingdom of Jesus Christ.  He has been mandated by God to preach the restoration of the dominance of man on earth, therefore leading a generation into their dominion power.

            </p>
            <p class="mb-5">
                Bishop Bennett was reared in church all his life and was baptized in Jesus Name and filled with the Holy Ghost on November 19, 1988 in Hartford, Connecticut.  He matriculated through universities earning his Bachelors, Masters, and Doctorate degrees.  He is an author, teacher, business owner, conference host, worshipper, and growth agent just to name a few.  As the president and CEO of Damion Bennett Ministries, he travels extensively preparing men and women for citizenship into the Kingdom of God and teaching them to access their right to power, authority and rulership as a immortal agent in God's kingdom. 
            </p>
            <p class="mb-5">
                Bishop Bennett was ordained to the office of the Bishop in the Lord's church in 2006 by Bishop Leo Smith and the late Bishop Byron V. Johnson, (both PAW Bishops at the time) in Chicago, Illinois.  Currently, Bishop Bennett serves as the Senior Pastor of the International Kingdom Church and Global Bishop of Kingdom Global Fellowship and the Most Sacred Order of the Melchizedek Priesthood. 
            </p>
            <p class="mb-5">
                He is fun, relaxed, loves to laugh and enjoys his life in its fullness!
            </p>
            <p class="py-8">
                <Link class="py-3 px-6 bg-gary-100 hover:bg-gray-100 hover:text-gray-800  text-sm text-green-600  rounded-lg  hover:border border rounded-lg 
                hover:border-black transition duration-200">Click here to schedule Bishop Dr. Damion S.C. Bennett for a speaking event
                </Link>

            </p>
        </div>
    </div>
</section>

<section class="bg-gray-400 relative " >
    <svg class="absolute z-0 overflow-hidden"  data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" preserveAspectRatio="none" ><path  d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill" fill="#FFFFFF" fill-opacity="1"></path></svg>
    <div class="relative lg:grid md:grid-cols-4 md:gap-6 justify-center px-16 visible ">
        <div>
            <img src="/img/b1.jpg" class="py-5"/>
        </div>
        <div>
            <img src="/img/b2.jpg" class="py-5"/>
        </div>
        <div>
            <img src="/img/b3.jpg" class="py-5"/>
        </div>
        <div>
            <img src="/img/b4.jpg" class="py-5"/>
        </div>
    </div>

    <div class="">
        <p class="px-16 py-20  lg:text-6xl text-gray-50 ">
            
No matter what people say about you, how much they try to stop you, or put stumbling blocks in your way, you must never give up.  God is on your side!
        </p>
    </div>
</section>
<section class="py-12 mb-6">
    <div  class="flex justify-center">
        
        <h1 class="text-3xl font-bold py-4">OFFICIAL PICTURE FOR MEDIA USE</h1>
    </div>
    <div class="flex justify-center">
    <img src="/img/profile.jpg"/>
    </div>
</section>
 
<section class="py-16 ab-bg">
    <div>
        <div class="flex flex-wrap lg:grid md:grid-cols-12 md:gap-6 justify-center px-16">
            <div class="col-span-3 max-w-sm rounded overflow-hidden shadow-lg card-bg mb-10">
                <img src="/img/profile1.jpg" class="w-full px-2 py-2"/>
                
                <div class="font-bold text-xl mb-2 px-6 py-4 flex justify-center ">ENTREPRENEUR</div>
                 <div class="mx-1 my-1 bg-white">
                    <p class="text-gray-700 text-base px-2 py-3 font-bold lg:h-80">
                        As a young man living in Hartford, Connecticut, Dr. Bennett opened his first business at age 14 and was named Entrepreneur of the Year 1994.  His business acumen has led him to receive multiple awards and features in city and state newspapers.  A strong believer in financial independence, he believes his mission is to help kingdom citizens unlock their potential for success.                    </p>
                </div>
            </div>
            <div  class="col-span-3 max-w-sm rounded overflow-hidden shadow-lg card-bg mb-10">  
                <img src="/img/profile2.jpg" class="w-full px-2 py-2"/>
                
                <div class="font-bold text-xl mb-2 px-6 py-4 flex justify-center ">LEADER</div>
                 <div class="mx-1 my-1 bg-white">
                    <p class="text-gray-700 text-base px-2 py-3 font-bold lg:h-80">
                        Bishop Damion Bennett has served in various leadership roles from age 14 and currently serves as President/CEO of Damion Bennett Ministries and as the Chief Apostle and Presiding Bishop of The International Kingdom Church.  He is the poster child for not allowing setbacks or circumstances to change his integrity or character and has stayed true to what leadership really is. 

                    </p>
                </div>
            </div>
            <div  class="col-span-3 max-w-sm rounded overflow-hidden shadow-lg card-bg mb-10">
                <img src="/img/profile3.jpg" class="w-full px-2 py-2"/>
                
                <div class="font-bold text-xl mb-2 px-6 py-4 flex justify-center ">APOSTLE</div>
                 <div class="mx-1 my-1 bg-white">
                    <p class="text-gray-700 text-base px-2 py-3 font-bold lg:h-80">
                        With a national and international vision, Apostle Damion Bennett is building a dynamic spiritual movement known as

                        The International Kingdom Church which will be expanding to Africa this year.  But mostly, he is charged with the passion of building people.  He receives much joy when someone has grown and is reaching their full potential in God and life.
                    </p>
                </div>
            </div>
            <div  class="col-span-3 max-w-sm rounded overflow-hidden shadow-lg card-bg mb-10">
                <img src="/img/profile4.jpg" class="w-full px-2 py-2"/>
                
                <div class="font-bold text-xl mb-2 px-6 py-4 flex justify-center ">TEACHER/PREACHER</div>
                 <div class="mx-1 my-1 bg-white">
                    <p class="text-gray-700 text-base px-2 py-3 font-bold lg:h-80">
                        Bishop Damion Bennett is a dynamic speaker who has been called to minister the Word of God and the Gospel of the Kingdom with power and clarity.  An energetic and powerful speaker, he has traveled nationally and internationally preaching the message of Dominion and restoring man back to their dominance in this earth through the power of the Holy Ghost.
                    </p>
                </div>
            </div>

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
.sv-image{
    z-index: 30;
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
