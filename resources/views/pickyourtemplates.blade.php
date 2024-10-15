<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pick Your Templates</title>
</head>
<body>
    <x-header></x-header>
    <section id="Home" class="pt-10 pb-10">
      <div class="container mx-auto">
          <div class="flex justify-center items-center text-center">
              <h2 class="text-2xl mx-auto font-bold my-10 bg-gradient-to-b from-[#A47EFD] to-[#FF88E6] text-transparent bg-clip-text  ">
                  Pick Your Templates
              </h2>
          </div>
      </div>
    </section>

    <section id="Templates" class="">
        <div class="flex items-center justify-center">
            <div class="flex items-center justify-center space-x-5">
                <!-- Image 1 -->
                <div class="px-2 py-2 bg-transparent hover:bg-slate-50 hover:bg-opacity-40 border-2 border-pink-500 transition duration-300 ease-in-out">
                    <img class="template-image object-cover h-40 w-40 hover:scale-110 transition duration-300 ease-in-out cursor-pointer" data-image-src="/assets/Devity.png" src="/assets/Devity.png" alt="contoh 1">
                </div>
                <!-- Image 2 -->
                <div class="px-2 py-2 bg-transparent hover:bg-slate-50 hover:bg-opacity-40 border-2 border-pink-500 transition duration-300 ease-in-out">
                    <img class="template-image object-cover h-40 w-40 hover:scale-110 transition duration-300 ease-in-out cursor-pointer" data-image-src="/assets/amara.png" src="/assets/amara.png" alt="contoh 2">
                </div>
                <!-- Image 3 -->
                <div class="px-2 py-2 bg-transparent hover:bg-slate-50 hover:bg-opacity-40 border-2 border-pink-500 transition duration-300 ease-in-out">
                    <img class="template-image object-cover h-40 w-40 hover:scale-110 transition duration-300 ease-in-out cursor-pointer" data-image-src="/assets/Arim.png" src="/assets/Arim.png" alt="contoh 3">
                </div>
                <!-- Image 4 -->
                <div class="px-2 py-2 bg-transparent hover:bg-slate-50 hover:bg-opacity-40 border-2 border-pink-500 transition duration-300 ease-in-out">
                    <img class="template-image object-cover h-40 w-40 hover:scale-110 transition duration-300 ease-in-out cursor-pointer" data-image-src="/assets/Fai.png" src="/assets/Fai.png" alt="contoh 4">
                </div>
            </div>
        </div>
    </section>
    
    <section id="PreviewTemplates" class="pt-10 pb-10">
        <div class="flex items-center justify-center">
            <div id="imagepreview" class="max-w-2xl h-full border-pink-500 border-2">
                <img id="previewImage" src="/assets/amara.png" alt="Contoh 3" class="p-5">
            </div>
        </div>
    </section>
    
    

    <section id="button" class="pt-10 pb-10">
        <div class="flex justify-center items-center">
            <div class="w-48 h-14 bg-gradient-to-r from-[#A47EFD] to-[#FF88E6] border-white border-2 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                <a href="/createyourown">
                    <h2 class="text-center font-bold text-xl flex items-center justify-center h-full text-white cursor-pointer">
                        Back
                    </h2>
                </a>
            </div>
            <div class="w-48 h-14 bg-gradient-to-r from-[#A47EFD] to-[#FF88E6] border-white border-2 rounded-lg ">
                <a href="/createyourown/pickyourtemplates/form">
                    <h2 class="text-center font-bold text-xl flex items-center justify-center h-full text-white cursor-pointer">
                        Selanjutnya
                    </h2>
                </a>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/app.js') }}"></script>
      
</body>
</html>