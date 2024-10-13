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

    <section id="Templates" class="pt-10 pb-10">
        <div class="flex items-center justify-center h-screen"> <!-- Center the content vertically and horizontally -->
            <div class="border-blue-700 border-2 h-40 w-40 flex items-center justify-center overflow-hidden">
                <div class="px-2">
                    <img src="/assets/HappyBirthday.jpg" alt="contoh 1" class="object-cover h-40 w-40">
                </div>
                <div class="px-2">
                    <img src="/assets/HappyBirthday.jpg" alt="contoh 1" class="object-cover h-40 w-40">
                </div>
                <div class="px-2">
                    <img src="/assets/HappyBirthday.jpg" alt="contoh 1" class="object-cover h-40 w-40">
                </div>
            </div>
        </div>
    </section>

    <section id="PreviewTemplates" class="pt-10 pb-10">
        <div class="flex items-center justify-center">
            <div class="max-w-2xl h-full border-blue-700 border-2">
                <img src="/assets/HappyBirthday.jpg" alt="Contoh 3" class="p-5">
            </div>
        </div>
    </section>

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
      
</body>
</html>