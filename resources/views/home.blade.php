<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <x-header></x-header>

    {{-- Start --}}
    <section id="Home" class="relative min-h-screen pb-36 pt-36 bg-cover bg-center" style="background-image: url('assets/HappyBirthday.jpg');">
        <!-- Set the opacity directly in the gradient colors using rgba or hex with alpha -->
        <div class="absolute inset-0 bg-gradient-to-b" style="background: linear-gradient(to bottom,rgba(164, 126, 253, 0.7), rgba(255, 136, 230, 0.7));"></div>
        <div class="flex items-center justify-center h-full my-[10rem] relative z-10">
            <div class="container mx-auto lg:px-8">
                <div class="mt-10 w-full flex items-center justify-center lg:pl-8">
                    <div class="text-center lg:text-left">
                        <h1 class="text-4xl text-center font-bold text-white md:text-5xl lg:text-6xl">ABOUT US</h1>
                        <h2 class="mt-10 text-xl text-center font-bold text-white md:text-3xl lg:text-4xl">"Never forget the important dates of your loved ones again. Create meaningful and surprising online greeting cards with just a few clicks!"</h2>
                    </div>
                </div>
                <div class="flex items-center justify-center"> 
                    <div class="flex justify-center mt-10 w-36 h-14 bg-white hover:bg-gradient-to-r from-[#A47EFD] to-[#FF88E6] border-white border-2 rounded-lg ">
                        <h2 class="text-center font-bold text-xl flex items-center bg-gradient-to-r from-[#A47EFD] to-[#FF88E6] hover:text-white text-transparent bg-clip-text cursor-pointer ">
                            See More
                        </h2>
                    </div>
                </div>    
            </div>
        </div>
    </section>
    

    <section id="OurProduct" class="pt-20 pb-10 px-4 lg:px-8">
        <div class="container mx-auto">
            <div class="flex flex-wrap">
                <div class="mb-10">
                    <h1 class="text-4xl font-bold bg-gradient-to-r from-[#A47EFD] to-[#FF88E6] text-transparent bg-clip-text">Our Product</h1>
                </div>
                <div id="indicators-carousel" class="relative w-full " data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-[32rem]">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                            <img src="/assets/HappyBirthday.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="/assets/HappyBirthday.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="/assets/HappyBirthday.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    </div>
                    <!-- Slider controls -->
                    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="flex items-center justify-center">
                <div class="flex justify-center mt-10 w-48 h-14 bg-gradient-to-r from-[#A47EFD] to-[#FF88E6] border-white border-2 rounded-lg">
                    <h2 class="text-center font-bold text-xl flex items-center text-white cursor-pointer">
                        See More
                    </h2>
                </div>
            </div>  
        </div>
    </section>

    <section id="WhatWeProvide" class="pt-20">
        {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,256L48,218.7C96,181,192,107,288,80C384,53,480,75,576,112C672,149,768,203,864,224C960,245,1056,235,1152,192C1248,149,1344,75,1392,37.3L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg> --}}
        <div class="w-full h-full bg-gradient-to-b from-[#A47EFD] to-[#FF88E6]">
            <div class="container mx-auto pt-16 px-4 lg:px-8">
                <div class="w-full space-y-4 px-6 md:px-8 ">
                    <h1 class="relative text-4xl font-bold inline-block underline-orange mb-10 text-white md:text-5xl lg:text-6xl">What We Provide</h1>
                    <div class="flex flex-wrap justify-between items-center text-center md:text-justify">
                        <div>
                            <a href="#" class="block mb-10 max-w-2xl h-60 p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Email Scheduling</h5>
                                <p class="font-normal text-gray-700 dark:text-gray-400">We offer a comprehensive Email Scheduling service that allows you to plan, organize, and automate the sending of emails at specific times. This feature ensures that your messages are delivered exactly when needed, improving communication efficiency, maximizing engagement, and saving time. Whether for marketing campaigns, reminders, or personal communication, our service provides flexibility and reliability to meet your email delivery needs.</p>
                            </a>
                        </div>
                        <div>
                            <a href="#" class="block mb-10 max-w-2xl h-60 p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Scrapbook Template</h5>
                                <p class="font-normal text-gray-700 dark:text-gray-400">We also provide customizable scrapbook templates, allowing you to create beautiful and personalized scrapbooks with ease. Our templates offer a variety of layouts and designs, perfect for capturing and preserving your memories in a creative and unique way.</p>
                            </a>
                        </div>
                        <div>
                            <a href="#" class="block mb-10 max-w-2xl h-60 p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Responsive Admin</h5>
                                <p class="font-normal text-gray-700 dark:text-gray-400">We offer a fully responsive admin dashboard, designed to adapt seamlessly to any device or screen size. Our responsive admin interface ensures optimal usability and accessibility, providing you with an efficient and intuitive experience whether you're managing your tasks on a desktop, tablet, or smartphone.</p>
                            </a>
                        </div>
                        <div>
                            <a href="#" class="block mb-10 max-w-2xl h-60 p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                                <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            </a>
                        </div>
    
                    </div>
            </div>
        </div>
    </section>

    <x-footer></x-footer>
    
</body>
</html>