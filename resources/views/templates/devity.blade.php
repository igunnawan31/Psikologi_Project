<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://fonts.googleapis.com/css?family=Bree Serif' rel='stylesheet'>
</head>
<body>
    <x-header></x-header>
    <h1 class="pt-10 text-center font-bold text-2xl text-pink-500">Pick Your Template</h1>
    <section class="flex justify-center items-center py-20 m-0">
        <div class="relative h-[602px] w-[338px] bg-cover bg-no-repeat z-1" style="background-image: url('/assets/Devity.svg');">
            <div class="absolute flex justify-center items-center top-[-30px] left-[105px] w-[230px] h-[200px] z-20 pointer-events-none overflow-hidden break-words leading-tight">
                <div class="relative font-serif text-2xl font-extrabold tracking-widest text-[#800329]" id="displayTitle"></div>
            </div>
            <div class="absolute flex justify-center items-center w-[220px] h-[80px] text-center text-lg text-[#af753e] border-2 border-white left-[115px] top-[83px] rounded-md p-2 overflow-hidden break-words bg-transparent" id="displayText">
                Place Your Message here
            </div>

            <div class="absolute flex justify-center items-center z-20 bg-white object-fill border-6 border-[#d4c4e9]" id="foto1" style="left: 205px; top: 185px; width: 130px; height: 140px;">
                <img src="/assets/gambar.png" alt="foto1" class="w-full h-full object-cover">
            </div>
            <div class="absolute flex justify-center items-center z-20 bg-white object-fill border-6 border-[#d4c4e9]" id="foto2" style="left: 205px; top: 332px; width: 130px; height: 140px;">
                <img src="/assets/gambar.png" alt="foto2" class="w-full h-full object-cover">
            </div>
            <div class="absolute flex justify-center items-center z-20 bg-white object-fill border-3 border-[#d4c4e9] rounded-full" id="foto3" style="left: 50px; top: 215px; width: 140px; height: 208px;">
                <img src="/assets/gambar.png" alt="foto3" class="w-full h-full object-cover">
            </div>
            <div class="absolute flex justify-center items-center z-20 bg-white object-fill border-3 border-[#d4c4e9] rounded-lg" id="foto4" style="left: 55px; top: 480px; width: 170px; height: 115px;">
                <img src="/assets/gambar.png"alt="foto4" class="w-full h-full object-cover">
            </div>
        </div>

        <div class="upload bg-white p-2 rounded-lg shadow-lg w-96 h-[602px] border-2 border-pink-500 ml-10">
            <h2 class="text-xl font-bold mb-4 text-pink-500">Upload Your Text for Devity</h2>

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
                <input type="text" id="upload5" placeholder="Place your message here" maxlength="100" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg p-2.5 focus:ring-pink-500 focus:border-pink-500" oninput="updateText(); validateInputs();">
                <span id="messageError" class="text-red-500 text-sm hidden">Please enter a message (max 100 characters).</span>
                <span id="charCount" class="text-gray-500 text-sm">0/100</span>
            </div>
            
            <div class="mb-4">
                <label for="upload6" class="block text-sm font-medium text-pink-500 mb-2">Title:</label>
                <input type="text" id="upload6" placeholder="Place your title here" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg p-2.5 focus:ring-pink-500 focus:border-pink-500" oninput="updateTitle(); validateInputs();">
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
