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
            <nav class="bg-white border-b border-gray-100">
<div id="default-carousel" class="relative w-full md:h-[85vh]" data-carousel="slide" >
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

<section class="justify-center nbg w-full">
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

        <div class=" py-4 px-6 mx-10 lg:w-80 col-span-5 text-justify leading-7 border-left font-italic redish font-bold">
            <i>We have known and have believed the love that God has for us. 
            God is love, and those who remain in love remain in God and God remains in them</i>
        <p class="text-red-800 text-center mt-8 jredish">I John 4:16</p>
        </div>

    </div>
    </center>
</section>
<section class="m-6 px-5 ">
    <h1 class="flex flex-wrap justify-center font-bold font-extrabold text-2xl"><b> Visit us on our social media platforms </b></h1>
    <div class="flex flex-wrap justify-center mx-1 lg:-mx-4 lg:my-12 ">
        <a href="https://www.facebook.com/bishopdamionbennett"> <img src="/img/fb.png" class="h-[16vh] "/> </a> 
        <a href="https://www.linkedin.com/in/drdamionbennett/"><img src="/img/linked.png" class="h-[16vh] "/> </a>
        <a href="https://twitter.com/bishopbennett0"><img src="/img/twit.png" class="h-[16vh] "/> </a>
        <a href="https://www.instagram.com/bishop.damion.bennett/"><img src="/img/insta.jpg" class="h-[16vh] "/> </a>
        <a href="https://www.youtube.com/channel/UCIp3GfUpGxXITyyIsA3wYbw"><img src="/img/youtube.png" class="h-[14vh] "/> </a>

    </div>
</section>

<section class="">
    <div class="flex flex-wrap justify-center mx-1  lg:my-12 ">
    <img src="/img/e1.jpg" class="m-4 lg:w-[28vw] small-width"/>
    <img src="/img/e2.png" class="m-4 lg:w-[28vw] small-width"/>
    <img src="/img/e3.png" class="m-4 lg:w-[28vw] small-width"/>
    </div>
</section>


<section class="container-fluid px-4">
    <center><h1 class="flex flex-wrap justify-center font-bold font-extrabold text-6xl px-6"><b> UPCOMING EVENTS</b></h1></center>
    <div class="flex flex-wrap justify-center mx-1 lg:-mx-4 lg:my-12 ">
        <iframe class="small-width" width="947" height="533" src="https://www.youtube.com/embed/P1Yue-SBSio"
         title="Men and Women Relationship Conference" frameborder="0" 
         allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture;
          web-share" ></iframe>

        <p class="p-4 font-bold justify-center lg:w-[71vw] small-width">Are you looking for answers to relationship issues? Ever wondered what a man really wants or what a woman really desires? You might just be curious about how to be a better companion, or want to learn how to strengthen your friendships! Join us for the Men and Women Relationship Conference and worship experience in the month of October, every Sunday at 3:00 PM Sharp. (This is the exact starting time!)</p>
        <p class="p-4 font-bold justify-center lg:w-[71vw] small-width">Location: INTERNATIONAL TRAINING CENTER YAMOH PLAZA 60 LAGOS AVENUE EAST LAGON ACCRA, GHANA</p>
        <center><p class="p-0.5 font-bold item-center justify-center lg:w-[71vw] ">Directly beside East Lagon KFC</p></center>
        <p class="p-4 font-bold justify-center lg:w-[71vw] small-width">Come and learn proven biblical strategies like you have never heard before on how to build and strengthen your relationships from Bishop Dr. Damion S C Bennett, the Senior Pastor of The International Kingdom Church and Global Bishop of Kingdom Global Fellowship and the Most Sacred Order of the Melchizedek Priesthood. Come, worship, and learn as you become empowered to activate the knowledge of God thats brings success in our lives!</p>
        <center><p class="p-0.5 font-bold item-center justify-center lg:w-[71vw]">So don’t miss this event!</p></center>
    </div>
</section>



<section class="py-10 bg-gray-200">
<div class="relative flex flex-col-reverse lg:py-16 lg:pt-0 lg:flex-col lg:pb-0 px-12 bg-white ">
  <div class="object-cover inset-y-0 top-0 right-0 z-0 w-full mx-auto md:px-0 lg:pr-0 lg:mb-5 lg:mx-0 lg:w-6/12 lg:max-w-full lg:absolute xl:px-0">
<h1 class="lg:text-3xl font-bold uppercase my-10"><span class="text-first"><i>Relevant.</i></span><span class="text-second"><i>Powerful.</i></span><span class="text-third"><i>Exciting.</i></span></h1>
    <p class="px-8 mb-5 text-base  text-gray-700 md:text-lg">
        The International Kingdom Church is charismatic in worship, strong in discipleship, with a culture that is built on love and service.  We are a church were you can come to discover God, discover love, and discover life.  By doing so, you can begin to build a life that is patterned after Jesus Christ and manifesting the fullness of your dominion authority on earth.        
    </p>
    <p class="px-8 mb-5 text-base  text-gray-700 md:text-lg">
        Kingdom Global Fellowship and the Most Sacred Order of the Melchizedek Priesthood is a ministerial teaching association for ministers, leaders, and pastors who serve or desire to serve under the Melchizedek Priesthood.  Through the fellowship, members assembly to learn more about the priesthood and build connectivity with each other.  It is a membership organization with representatives all across Africa.    </p>
    <div class="flex items-center">

       </div>
       <div class="lg:my-4 px-2">
         
         <Link class="mr-2 ml-8 py-3 px-6 bg-red-700 hover:bg-white hover:text-black hover:border border hover:border-black  text-sm text-white  transition duration-200">
        Learn More</Link>
     <div class="flex px-16 float-right ">
        <img src="/img/r1.png"  class="w-20 h-20 p-0.5"/>
        <img src="/img/r2.jpg"  class="w-20 h-20 p-0.5"/>
        <img src="/img/r3.gif"  class="w-20 h-20 p-0.5"/>
     </div>
     </div>
  </div>
  <div class="relative flex flex-col left-0 z-0 w-full max-w-xl px-4 mx-auto md:px-0 lg:pr-0 lg:mb-0 lg:mx-0 lg:w-7/12 ">

        <div class="absolute invisible lg:visible z-50 ml-[25vw] mt-[20vh] firstcenter-img transform translate-x-12 flex items-center justify-center w-52 h-52 rounded-full bg-white group-hover:bg-green-200 text-white font-bold text-4xl ">
            ministry
        </div>
        <img
      class="object-cover w-full lg:h-full  rounded shadow-lg lg:rounded-none lg:shadow-none  lg:h-screen "
      src="/img/s1.png"
      alt=""
    /> 
    <svg class="absolute right-0 hidden h-full text-white transform translate-x-1/2 lg:block w-1/3 " viewBox="0 0 100 100" fill="currentColor" preserveAspectRatio="none slice">
      <path d="M50 0H0L50 100H100L50 0Z"></path>
    </svg>
    

  </div>
</div>
</section>


<section class="py-10 bg-gray-200">
<div class="relative flex flex-col-reverse lg:py-16 lg:pt-0 lg:flex-col lg:pb-0 bg-white">
  <div class="inset-y-0 top-0 right-0 z-0 w-full max-w-xl px-4 mx-auto md:px-0 lg:pr-0 lg:mb-0 lg:mx-0 lg:w-7/12 lg:max-w-full lg:absolute xl:px-0">
    <svg class="absolute left-0 hidden h-full text-white transform -translate-x-1/2 lg:block" viewBox="0 0 100 100" fill="currentColor" preserveAspectRatio="none slice">
      <path d="M50 0H0L50 100H100L50 0Z"></path>
    </svg>
    <img
      class="object-cover w-full lg:h-full rounded shadow-lg lg:rounded-none lg:shadow-none md:h-full lg:h-full"
      src="/img/s2.jpg"
      alt=""
    />
  </div>
  <div class=" object-cover relative flex flex-col items-start w-full max-w-xl px-4 mx-auto md:px-0 lg:px-8 lg:max-w-screen-xl">
    <div class="mb-4 lg:mt-24 lg:max-w-lg lg:pr-5">
 
      <p class="pr-5 mb-5 text-base text-gray-700 md:text-lg">
        
With a passion for helping people, The Office of the Bishop is always on the ground doing the work of Jesus in a tangible way.  Through the Boots on the Ground Mission Support Team in the United States, the ministry is actively engaged in monthly feeding programs to the less privileged, working to decrease neonatal deaths across Africa, and providing educational scholarships to university students in West Africa.  
      </p>
      <div class="flex items-center">
       
      <div class="absolute invisible lg:visible z-0 ml-[36vw] mb-[20vh] center-img transform translate-x-12 flex items-center justify-center w-52 h-52 rounded-full bg-white group-hover:bg-green-200 text-white font-bold text-4xl group-hover:text-white font-semibold cursor-pointer group-hover:scale-110 duration-300 select-none">
        service</div>
      </div>
      <div class="lg:my-16">
        
        <h1 class=" flex flex-wrap text-gray-700 justify-center m-2 font-bold font-italic"><i>Our Mission Partners</i></h1>
      <div class="flex flex-wrap justify-center " >
        <img src="/img/p1.jpg" class="w-16 h-16 p-0.5"/>
        <img src="/img/p2.png" class="w-16 h-16 p-0.5"/>
        <img src="/img/p3.gif" class="w-16 h-16 p-0.5"/>
        <img src="/img/p4.png" class="w-16 h-16 p-0.5"/>
      </div>
    </div>
    </div>
  </div>
</div>
</section>




<section class="py-10 bg-gray-200" >
<div class="relative flex flex-col-reverse lg:py-16 lg:pt-0 lg:flex-col lg:pb-0 px-12 bg-white " >
  <div class="object-cover inset-y-0 top-0 right-0 z-0 w-full mx-auto md:px-0 lg:pr-0 lg:mb-5 lg:mx-0 lg:w-6/12 lg:max-w-full lg:absolute xl:px-0">
    <p class="px-5 pt-16  mb-5 text-base  text-gray-700 md:text-lg">
        As a marketplace apostle, Bishop Dr. Damion S.C. Bennett believes that God agenda is not limited to the spiritual agency, but also affects the economical, governmental, and educational space.  The Office of the Bishop is also intensively engaged in contributing to these areas through various business enterprises such as BOX BREAKERS CONSULTANTS, LTD., WINNERS CLUB INTERNATIONAL, BENNETT GLOBAL, KALLME.NET, and DIAMOND VIP USA    </p>
    <p class="px-5 mb-5 text-base  text-gray-700 md:text-lg">
        Each of these companies are massively contributing in creating jobs, coaching existing business leaders, providing leading consultation for growth and expansion of existing companies, educating the masses in financial mapping and planning and so much more!  
    </p>
     <div class="flex  ">
        <img src="/img/t1.png" class="lg:w-86" />
        <!-- <img src="/img/t2.png" class="sm:w-20"   /> -->
     </div>
  </div>
  <div class="relative flex flex-col left-0 z-0 w-full third-img md:max-w-xl px-4 mx-auto md:px-0 lg:pr-0 lg:mb-0 lg:mx-0 lg:w-7/12 ">

        <div class="absolute invisible lg:visible z-50 ml-[25vw] mt-[20vh] thirdcenter-img transform translate-x-12 flex items-center justify-center w-52 h-52 rounded-full bg-white group-hover:bg-green-200 text-white font-bold text-4xl ">
            business</div>
        <img
      class="object-cover w-full lg:h-full first-img md:w-[80vw] rounded shadow-lg lg:rounded-none lg:shadow-none  lg:h-screen "
      src="/img/s3.png"
      alt=""
    /> 
    <svg class="absolute right-0 hidden h-full text-white transform translate-x-1/2 lg:block w-1/6 " viewBox="0 0 100 100" fill="currentColor" preserveAspectRatio="none slice">
      <path d="M50 0H0L50 100H100L50 0Z"></path>
    </svg>
    

  </div>
</div>
</section>
<Contact/>


<Footer/>
</div>
</div>

</template>

<style >
.qborder{
    border-right: 1px solid black;
}
.nbg{
    background: #F7F5E1;
}
.redish{
    color: rgb(207,144,135);
}
.jredish{
    color: rgb(165,37,39);
}
.social-img{
    width: 20%;
    object-fit: contain;
    aspect-ratio: 3/2;
}
.social-bg{
    background: #FAFAFA;
}
.center-img{
    background: #CF9F15;
}
.firstcenter-img{
    background: #841393;
}
.thirdcenter-img{
    background: rgb(62,141,65);
}
.hidden-small {
      display: block;
    }
    .text-first {
        color: rgb(175,61,63);
  text-shadow: 0px 2px 4px rgba(0, 0, 0, 0.3);
}
.text-second {
        color: rgb(37,101,120);
  text-shadow: 0px 2px 4px rgba(0, 0, 0, 0.3);
}
.text-third {
        color: rgb(219, 170, 36);
  text-shadow: 0px 2px 4px rgba(0, 0, 0, 0.3);
}

    @media (max-width: 768px) {
      .small-width  {
        width: 410px;
      }
      .hidden-small {
      display: block;
    }
    }
    @media (min-width: 768px) {
    .center-img{
    background: #CF9F15;
    margin-left: 35%;
    margin-bottom: 15%;

    }
    .firstcenter-img{
    background: #841393;
    margin-left: 60%;
}
.thirdcenter-img{
    background: rgb(62,141,65);
    margin-left: 60%;
}


    }




</style>
