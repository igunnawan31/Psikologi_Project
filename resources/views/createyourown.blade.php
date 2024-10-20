<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <x-header></x-header>
    <section id="Home" class="pt-36 pb-10">
      <div class="container mx-auto">
          <div class="flex justify-center items-center text-center">
              <h2 class="text-5xl mx-auto font-bold my-10 h-20 bg-gradient-to-b from-[#A47EFD] to-[#FF88E6] text-transparent bg-clip-text  ">
                  Create Your Own Greeting Cards!
              </h2>
          </div>
      </div>
    </section>
    <section>
      <div class="container-mx-auto">
        <a href="/createyourown/pickyourtemplates" class="group block max-w-sm mx-auto rounded-lg p-6 bg-white ring-1 ring-slate-900/5 shadow-lg space-y-3 border-dashed border-2 border-pink-300 hover: bg-gradient-to-b from-[#C0E9ED80] to-[#FBB6C880] hover:ring-pink-400 hover:border-none">
          <div class="flex items-center space-x-3">
            <svg class="h-6 w-6 group-hover:stroke-pink-300" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4z"></path>
              <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path></svg>
            </svg>
            <h3 class="text-slate-700 group-hover:text-pink-300 text-sm font-semibold">New Design</h3>
          </div>
          <p class="text-slate-700 group-hover:text-pink-300 text-sm">Create a new design from a variety of starting templates.</p>
        </a>
      </div>
    </section>
    <section id="SearchBar" class="pt-36 pb-36 px-4 lg:px-8">
      <div class="container mx-auto">
          <div class="flex justify-between items-center">
              <h1 class="py-5 text-3xl font-bold bg-gradient-to-r from-[#A47EFD] to-[#FF88E6] text-transparent bg-clip-text">My Design</h1>
              <form class="flex items-center max-w-sm flex-shrink-0">   
                  <label for="simple-search" class="sr-only">Search</label>
                  <div class="relative w-full">
                      <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                          <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2"/>
                          </svg>
                      </div>
                      <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search template name..." required />
                  </div>
                  <button type="submit" class="p-2.5 ms-2 text-sm font-medium text-white bg-gradient-to-r from-[#A47EFD] to-[#FF88E6] rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                      </svg>
                      <span class="sr-only">Search</span>
                  </button>
              </form>
          </div>
      </div>
      <div class="py-20 px-40 flex items-center justify-center">
        <div class="w-full border-2 border-pink-500 h-full mx-auto flex justify-start rounded-lg ">
          <div class="my-5 mx-5 max-w-sm h-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="assets/HappyBirthday.jpg" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-justify">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>