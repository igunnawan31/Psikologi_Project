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
    <section class="pt-10 pb-10 w-full h-full">
      <div>
        <h1 class="font-bold text-2xl mx-auto flex justify-center text-pink-500">My Design</h1>
      </div>
      <div class="pt-10 flex items-center justify-center">
        <div class="max-w-full border-2 border-pink-500 h-[30rem] mx-auto flex justify-center items-center">
          <!-- Your card content goes here -->
        </div>
      </div>
    </section>
  </body>
</html>