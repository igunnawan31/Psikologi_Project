<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://fonts.googleapis.com/css?family=Baloo' rel='stylesheet'>
</head>
<body>
    <x-header></x-header>
    <section class="flex justify-center items-center py-20 m-0">
        <div class="relative flex justify-center h-[602px] w-[338px] z-10 bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/amara.svg') }}');">
            <div class="absolute top-[65px] left-[25px] w-[200px] h-[200px] flex justify-center items-center z-20 pointer-events-none">
                <div class="relative text-[30px] font-baloo uppercase tracking-widest text-[rgb(190,105,24)]" id="displayTitle"></div>
            </div>
            <div class="absolute top-[93px] left-[33px] w-[200px] h-[200px] flex justify-center items-center rounded-full border-2 border-white text-center text-lg text-aliceblue bg-transparent overflow-hidden break-words leading-tight p-4" id="displayText">
                Place Your Message here
            </div>

            <div id="foto1" class="absolute left-[170px] top-[225px] w-[160px] h-[165px] flex justify-center items-center border-8 border-[rgb(247,200,114)] bg-white z-20">
                <img src="{{ asset('assets/gambar.png') }}" alt="foto1" class="object-cover w-full h-full">
            </div>

            <div id="foto2" class="absolute left-[170px] top-[382px] w-[160px] h-[165px] flex justify-center items-center border-8 border-[rgb(247,200,114)] bg-white z-20">
                <img src="{{ asset('assets/gambar.png') }}" alt="foto2" class="object-cover w-full h-full">
            </div>

            <div id="foto3" class="absolute left-[20px] top-[290px] w-[140px] h-[98px] flex justify-center items-center border-3 border-[rgb(247,200,114)] bg-white z-20">
                <img src="{{ asset('assets/gambar.png') }}" alt="foto3" class="object-cover w-full h-full">
            </div>

            <div id="foto4" class="absolute left-[20px] top-[390px] w-[140px] h-[98px] flex justify-center items-center border-3 border-[rgb(247,200,114)] bg-white z-20">
                <img src="{{ asset('assets/gambar.png') }}" alt="foto4" class="object-cover w-full h-full">
            </div>
        </div>

        <div class="upload bg-white p-6 rounded-lg shadow-lg w-96 h-[602px] border-2 border-pink-500 ml-10">
            <h2 class="text-xl font-bold mb-4 text-pink-500">Upload Your Text for Amara</h2>

            <div class="mb-4">
                <label for="upload1" class="block text-sm font-medium text-gray-700 mb-2">Upload new image</label>
                <input type="file" id="upload1" accept="image/*" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" onchange="validateFile(this)">
                <span id="upload1Error" class="text-red-500 text-sm hidden">Please upload a valid image file.</span>
            </div>
            
            <div class="mb-4">
                <label for="upload2" class="block text-sm font-medium text-gray-700 mb-2">Upload new image</label>
                <input type="file" id="upload2" accept="image/*" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" onchange="validateFile(this)">
                <span id="upload2Error" class="text-red-500 text-sm hidden">Please upload a valid image file.</span>
            </div>
            
            <div class="mb-4">
                <label for="upload3" class="block text-sm font-medium text-gray-700 mb-2">Upload new image</label>
                <input type="file" id="upload3" accept="image/*" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" onchange="validateFile(this)">
                <span id="upload3Error" class="text-red-500 text-sm hidden">Please upload a valid image file.</span>
            </div>
            
            <div class="mb-4">
                <label for="upload4" class="block text-sm font-medium text-gray-700 mb-2">Upload new image</label>
                <input type="file" id="upload4" accept="image/*" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" onchange="validateFile(this)">
                <span id="upload4Error" class="text-red-500 text-sm hidden">Please upload a valid image file.</span>
            </div>
            
            <div class="mb-4">
                <label for="upload5" class="block text-sm font-medium text-gray-700 mb-2">Message:</label>
                <input type="text" id="upload5" placeholder="Place your message here" maxlength="100" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg p-2.5 focus:ring-blue-500 focus:border-blue-500" oninput="updateText(); validateInputs();">
                <span id="messageError" class="text-red-500 text-sm hidden">Please enter a message (max 100 characters).</span>
                <span id="charCount" class="text-gray-500 text-sm">0/100</span>
            </div>
            
            <div class="mb-4">
                <label for="upload6" class="block text-sm font-medium text-gray-700 mb-2">Title:</label>
                <input type="text" id="upload6" placeholder="Place your title here" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg p-2.5 focus:ring-blue-500 focus:border-blue-500" oninput="updateTitle(); validateInputs();">
                <span id="titleError" class="text-red-500 text-sm hidden">Please enter a title.</span>
            </div>
        </div>
    </section>

    <section id="button" class="pb-10">
        <div class="flex justify-center items-center">
            <div class="w-48 h-14 bg-gradient-to-r from-[#A47EFD] to-[#FF88E6] border-white border-2 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                <a href="/createyourown/pickyourtemplates">
                    <h2 class="text-center font-bold text-xl flex items-center justify-center h-full text-white cursor-pointer">
                        Back
                    </h2>
                </a>
            </div>
            <div class="w-48 h-14 bg-gradient-to-r from-[#A47EFD] to-[#FF88E6] border-white border-2 rounded-lg ">
                <a id="templatePath" href="/createyourown/pickyourtemplates/form">
                    <h2 class="text-center font-bold text-xl flex items-center justify-center h-full text-white cursor-pointer">
                        Selanjutnya
                    </h2>
                </a>
            </div>
        </div>
    </section>
    <script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.bundle.js"></script>

    <script>
        function updateText() {
            const inputText = document.getElementById("upload5").value;
            document.getElementById("displayText").innerText = inputText;
        }

        function updateTitle() {
            const titleText = document.getElementById("upload6").value;
            const titleDisplay = document.getElementById("displayTitle");
            titleDisplay.innerHTML = '';
            const radius = 100;
            const angleStep = 180 / (titleText.length - 1);
            titleText.split('').forEach((char, index) => {
                const span = document.createElement('span');
                span.innerText = char;
                const angle = -180 + (index * angleStep);
                span.style.position = 'absolute';
                span.style.fontWeight = 'bold';
                span.style.textShadow = '2px 2px #000000'
                span.style.transform = `rotate(${angle}deg) translate(${radius}px) rotate(${angle * -1}deg)`;
                titleDisplay.appendChild(span);
            });
        }

        function uploadImage(input, imgElement) {
            const file = input.files[0];
            const reader = new FileReader();
            reader.onload = function (e) {
                imgElement.src = e.target.result;
            };
            if (file) {
                reader.readAsDataURL(file);
            }
        }

        document.getElementById('upload1').addEventListener('change', function () {
            uploadImage(this, document.querySelector('#foto1 img'));
        });

        document.getElementById('upload2').addEventListener('change', function () {
            uploadImage(this, document.querySelector('#foto2 img'));
        });

        document.getElementById('upload3').addEventListener('change', function () {
            uploadImage(this, document.querySelector('#foto3 img'));
        });

        document.getElementById('upload4').addEventListener('change', function () {
            uploadImage(this, document.querySelector('#foto4 img'));
        });
    </script>
</body>
</html>
