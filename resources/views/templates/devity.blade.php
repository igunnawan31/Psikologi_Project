<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://fonts.googleapis.com/css?family=Bree Serif' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
    <style>

        .wrapper {
            background-image: url("assets/Devity.svg");
            height: 602px;
            width: 338px;
            z-index: 1;
            display: flex;
            justify-content: center;
            position: relative;
        }

        .title {
            position: absolute;
            top: -30px; /* Adjust this based on where you want the text to appear */
            left: 105px;
            width: 250px;
            height: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
            pointer-events: none; /* Ensure it doesn't block interaction */
            z-index: 2;
        }

        .title-display {
            position: relative;
            font-family: 'Bree Serif', sans-serif;
            font-size: 25px;
            text-transform:none; /* Match the style in the image */
            letter-spacing: 2px;
            color: #800329;
            font-weight: 800;
        }

        .text-wrapper .text-display{
            height: 80px;
            width: 220px;
            position: absolute;
            text-align: center;
            font-size: large;
            left: 115px;
            top: 83px;
            border-radius: 2%;
            color: #af753e;
            background-color: transparent;  
            resize: none;
            border: 2px solid white;
            line-height: 1.5;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
            overflow-wrap: break-word; 
            word-wrap: break-word;     
            word-break: break-word;    
            overflow: hidden;
        }

        .foto{
            position: absolute;
            z-index: 2;
            object-fit: fill;
            background-color: white ;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #foto1 {
            left: 205px;
            top: 185px;
            width: 130px;
            height: 140px;
            border: 6px solid #d4c4e9;
        }

        #foto2 {
            left: 205px;
            top: 332px;
            width: 130px;
            height: 140px;
            border: 6px solid #d4c4e9;
        }

        #foto3 {
            left: 50px;
            top: 215px;
            width: 140px;
            height: 208px;
            border: 3px solid #d4c4e9;
            border-radius: 50%;
            overflow: hidden;
        }

        #foto4 {
            left: 55px;
            top: 480px;
            width: 170px;
            height: 115px;
            border: 3px solid #d4c4e9;
            border-radius: 7px;
            overflow: hidden;
        }

        .foto img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <x-header></x-header>
    <h1 class="pt-10 text-center font-bold text-2xl text-pink-500">Pick Your Template</h1>
    <section class="flex justify-center items-center py-20 m-0">
        <div class="wrapper" style="background: url(/assets/Devity.svg)" id="template">
            <div class="title">
                <div class="title-display" id="displayTitle"></div>
            </div>
            <div class="text-wrapper">
                <div class="text-display" id="displayText">Place Your Message here</div>
            </div>
            <div class="foto" id="foto1">
                <img src="/assets/gambar.png" alt="foto1">
            </div>
            <div class="foto" id="foto2">
                <img src="/assets/gambar.png" alt="foto2">
            </div>
            <div class="foto" id="foto3" >
                <img src="/assets/gambar.png" alt="foto3">
            </div>
            <div class="foto" id="foto4">
                <img src="/assets/gambar.png" alt="foto4">
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
        <div class="text-center" style="padding:20px;">
            <input type="button" id="rep" value="Print" class="btn btn-info btn_print" onclick="generatePDF()">
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

        function generatePDF() {
            var element = document.getElementById('template');
            var opt = {
                margin:       0,
                filename:     'generated_template.pdf',
                image:        { type: 'jpeg', quality: 1 },
                html2canvas:  { scale: 4 },
                jsPDF:        { unit: 'mm', format: 'a4', orientation: 'portrait' }
            };
            
            html2pdf().set(opt).from(element).save();
        }
    </script>
</body>
</html>
