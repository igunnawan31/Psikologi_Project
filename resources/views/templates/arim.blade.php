<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://fonts.googleapis.com/css?family=Baloo' rel='stylesheet'>
    <link href="https://fonts.cdnfonts.com/css/mistrully" rel="stylesheet">
</head>
<body>
    <x-header></x-header>
    <section class="flex justify-center items-center py-20 m-0">
    <div class="h-[602px] w-[338px] overflow-hidden">
        <div class="relative h-[602px] w-[338px] bg-cover bg-no-repeat z-1" style="background-image: url('/assets/Arim.svg');">
            <div class="absolute flex justify-center items-center top-[160px] left-[120px] w-[240px] h-[200px] pointer-events-none z-2">
                <div id="displayTitle" class="relative font-[Baloo] font-bold text-[#af753e] text-[35px] leading-none tracking-[1px] text-left uppercase drop-shadow-xl break-words z-20"></div>
            </div>
            <div class="absolute font-[Mistrully] left-[93px] top-[270px] w-[220px] h-[180px] bg-transparent text-[#af753e] text-lg border-2 border-white rounded-md flex justify-center items-center text-center font-mistrully break-words">
                <div id="displayText">Place Your Message here</div>
            </div>
    
            <div id="foto1" class="absolute left-[200px] top-[15px] w-[120px] h-[120px] border-4 border-[#d3a274] bg-white z-2 flex justify-center items-center">
                <img src="/assets/gambar.png" alt="foto1" class="object-cover w-full h-full">
            </div>
    
            <div id="foto2" class="absolute left-[105px] top-[82px] w-[120px] h-[120px] border-2 border-[#d3a274] bg-white z-3 flex justify-center items-center">
                <img src="/assets/gambar.png" alt="foto2" class="object-cover w-full h-full">
            </div>
    
            <div id="foto3" class="absolute left-[0px] top-[248px] w-[110px] h-[110px] border-2 border-[#d3a274] bg-white z-2 flex justify-center items-center rotate-[-3deg]">
                <img src="/assets/gambar.png" alt="foto3" class="object-cover w-full h-full">
            </div>
    
            <div id="foto4" class="absolute left-[5px] top-[355px] w-[110px] h-[110px] border-2 border-[#d3a274] bg-white z-2 flex justify-center items-center rotate-[-3deg]">
                <img src="/assets/gambar.png" alt="foto4" class="object-cover w-full h-full">
            </div>
        </div>
    </div>

        <div class="upload bg-white p-3 rounded-lg shadow-lg w-96 h-[602px] border-2 border-pink-500 ml-10">
            <h2 class="text-xl font-bold mb-4 text-pink-500">Upload Your Text for Arim</h2>

            <div class="mb-4">
                <label for="upload1" class="block text-sm font-medium text-pink-500 mb-2">Upload new image</label>
                <input type="file" id="upload1" accept="image/*" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" onchange="validateFile(this)">
                <span id="upload1Error" class="text-red-500 text-sm hidden">Please upload a valid image file.</span>
            </div>
            
            <div class="mb-4">
                <label for="upload2" class="block text-sm font-medium text-pink-500 mb-2">Upload new image</label>
                <input type="file" id="upload2" accept="image/*" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" onchange="validateFile(this)">
                <span id="upload2Error" class="text-red-500 text-sm hidden">Please upload a valid image file.</span>
            </div>
            
            <div class="mb-4">
                <label for="upload3" class="block text-sm font-medium text-pink-500 mb-2">Upload new image</label>
                <input type="file" id="upload3" accept="image/*" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" onchange="validateFile(this)">
                <span id="upload3Error" class="text-red-500 text-sm hidden">Please upload a valid image file.</span>
            </div>
            
            <div class="mb-4">
                <label for="upload4" class="block text-sm font-medium text-pink-500 mb-2">Upload new image</label>
                <input type="file" id="upload4" accept="image/*" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" onchange="validateFile(this)">
                <span id="upload4Error" class="text-red-500 text-sm hidden">Please upload a valid image file.</span>
            </div>
            
            <div class="mb-4">
                <label for="upload5" class="block text-sm font-medium text-pink-500 mb-2">Message:</label>
                <input type="text" id="upload5" placeholder="Place your message here" maxlength="100" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg p-2.5 focus:ring-blue-500 focus:border-blue-500" oninput="updateText(); validateInputs();">
                <span id="messageError" class="text-red-500 text-sm hidden">Please enter a message (max 100 characters).</span>
                <span id="charCount" class="text-gray-500 text-sm">0/100</span>
            </div>
            
            <div class="mb-4">
                <label for="upload6" class="block text-sm font-medium text-pink-500 mb-2">Title:</label>
                <input type="text" id="upload6" placeholder="Place your title here" class="py-2 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg p-2.5 focus:ring-blue-500 focus:border-blue-500" oninput="updateTitle(); validateInputs();">
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

    <script>
        function updateText() {
            const inputText = document.getElementById("upload5").value;
            document.getElementById("displayText").innerText = inputText;
        }

        function updateTitle() {
            const inputText = document.getElementById("upload6").value;
            document.getElementById("displayTitle").innerText = inputText;
        }

        function uploadImage(input, imgElement) {
            const file = input.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                imgElement.src = e.target.result;
            };

            if (file) {
                reader.readAsDataURL(file);
            }
        }

        document.getElementById('upload1').addEventListener('change', function() {
            uploadImage(this, document.querySelector('#foto1 img'));
        });

        document.getElementById('upload2').addEventListener('change', function() {
            uploadImage(this, document.querySelector('#foto2 img'));
        });

        document.getElementById('upload3').addEventListener('change', function() {
            uploadImage(this, document.querySelector('#foto3 img'));
        });

        document.getElementById('upload4').addEventListener('change', function() {
            uploadImage(this, document.querySelector('#foto4 img'));
        });

        function validateFile(input) {
            const file = input.files[0];
            const errorSpan = document.getElementById(input.id + "Error");
            if (!file || !file.type.startsWith("image/")) {
                errorSpan.classList.remove("hidden");
            } else {
                errorSpan.classList.add("hidden");
            }
        }

        function validateInputs() {
            const messageInput = document.getElementById("upload5");
            const titleInput = document.getElementById("upload6");
            const messageError = document.getElementById("messageError");
            const titleError = document.getElementById("titleError");

            const isMessageValid = messageInput.value.length > 0 && messageInput.value.length <= 100;
            const isTitleValid = titleInput.value.length > 0;

            messageError.classList.toggle("hidden", isMessageValid);
            titleError.classList.toggle("hidden", isTitleValid);

            return isMessageValid && isTitleValid;
        }

        function handleNext() {
            const allFilesValid = [...document.querySelectorAll('input[type="file"]')].every(input => {
                const file = input.files[0];
                return file && file.type.startsWith("image/");
            });

            const inputsValid = validateInputs();

            if (allFilesValid && inputsValid) {
                window.location.href = '/createyourown/pickyourtemplates/form'; // Replace with your actual next page URL
            } else {
                alert("Please correct the errors before proceeding.");
            }
        }
    </script>
</body>
</html>
