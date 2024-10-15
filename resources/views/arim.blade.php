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
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .wrapper {
            background-image: url("assets/Arim.svg");
            height: 602px;
            width: 338px;
            z-index: 1;
            display: flex;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .title {
            position: absolute;
            top: 160px; /* Adjust this based on where you want the text to appear */
            left: 115px;
            width: 240px;
            height: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
            pointer-events: none; /* Ensure it doesn't block interaction */
            z-index: 2;
        }

        .title-display {
            position: relative;
            font-family: 'Baloo', sans-serif;
            font-size: 35px;
            text-transform: none; /* Match the style in the image */
            letter-spacing: 1px;
            color: #af753e;
            text-align: center;
            line-height: 1;
            font-weight: bold;
            overflow-wrap: break-word; 
            word-wrap: break-word;     
            word-break: break-word;    
            overflow: hidden;
            text-shadow: 2px 2px #ffffff ;
        }

        .text-wrapper .text-display{
            height: 180px;
            width: 220px;
            font-family: 'Mistrully', sans-serif;
            position: absolute;
            text-align: center;
            font-size: large;
            left: 93px;
            top: 270px;
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
            left: 200px;
            top: 15px;
            width: 120px;
            height: 120px;
            border: 6px solid #d3a274;
        }

        #foto2 {
            left: 105px;
            top: 82px;
            width: 120px;
            height: 120px;
            border: 3px solid #d3a274;
            z-index: 3;
        }

        #foto3 {
            left: 320px;
            top: 338px;
            width: 110px;
            height: 110px;
            border: 3px solid #d3a274;
            transform: rotate(-5deg);
        }

        #foto4 {
            left: 329px;
            top: 445px;
            width: 110px;
            height: 110px;
            border: 3px solid #d3a274;
            transform: rotate(-5deg);
        }

        .foto img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>

    <div class="wrapper">
        <div class="title">
            <div class="title-display" id="displayTitle"></div>
        </div>
        <div class="text-wrapper">
            <div class="text-display" id="displayText">Place Your Message here</div>
        </div>
        <div class="foto" id="foto1">
            <img src="crot.png" alt="foto1">
        </div>
        <div class="foto" id="foto2">
            <img src="crot.png" alt="foto2">
        </div>
        <div class="foto" id="foto3" >
            <img src="crot.png" alt="foto3">
        </div>
        <div class="foto" id="foto4">
            <img src="crot.png" alt="foto4">
        </div>
    </div>

    <div class="upload m-3">
        <div>
            <label for="upload1">Upload new image </label>
            <input type="file" id="upload1" accept="image/*">
        </div>
        <div>
            <label for="upload2">Upload new image </label>
            <input type="file" id="upload2" accept="image/*">
        </div>
        <div>
            <label for="upload3">Upload new image </label>
            <input type="file" id="upload3" accept="image/*">
        </div>
        <div>
            <label for="upload4">Upload new image </label>
            <input type="file" id="upload4" accept="image/*">
        </div>
        <div>
            <label for="upload5">Message: </label>
            <input type="text" id="upload5" placeholder="Place your message here" oninput="updateText()">
        </div>
        <div>
            <label for="upload6">Title: </label>
            <input type="text" id="upload6" placeholder="Place your title here" oninput="updateTitle()">
        </div>
    </div>

    <script>
        function updateText() {
            // Get the input value
            const inputText = document.getElementById("upload5").value;

            // Set the display div's content to the input value
            document.getElementById("displayText").innerText = inputText;
        }

        function updateTitle() {
            // Get the input value
            const inputText = document.getElementById("upload6").value;

            // Set the display div's content to the input value
            document.getElementById("displayTitle").innerText = inputText;
        }


        // Function to handle image upload and replace the landscape
        function uploadImage(input, imgElement) {
            const file = input.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                imgElement.src = e.target.result;  // Set the new image source
            };

            if (file) {
                reader.readAsDataURL(file);  // Convert file to a Data URL
            }
        }

        // Event listeners for each upload input
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
    </script>
</body>
</html>
