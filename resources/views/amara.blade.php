<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://fonts.googleapis.com/css?family=Baloo' rel='stylesheet'>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .wrapper {
            background-image: url("amara.svg");
            height: 602px;
            width: 338px;
            z-index: 1;
            display: flex;
            justify-content: center;
            position: relative;
        }

        .title {
            position: absolute;
            top: 90px; /* Adjust this based on where you want the text to appear */
            left: 40px;
            width: 200px;
            height: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
            pointer-events: none; /* Ensure it doesn't block interaction */
        }

        .title-display {
            position: relative;
            font-family: 'Baloo', sans-serif;
            font-size: 30px;
            text-transform: uppercase; /* Match the style in the image */
            letter-spacing: 3px;
        }

        .title-display span {
            position: absolute;
            transform-origin: 100px 100px; /* Origin at the center of the circle */
        }


        .text-wrapper .text-display{
            height: 200px;
            width: 200px;
            position: absolute;
            text-align: center;
            font-size: large;
            left: 33px;
            top: 93px;
            border-radius: 50%;
            color: aliceblue;
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
            left: 170px;
            top: 225px;
            width: 160px;
            height: 165px;
            border: 8px solid rgb(247, 200, 114);
        }

        #foto2 {
            left: 170px;
            top: 382px;
            width: 160px;
            height: 165px;
            border: 8px solid rgb(247, 200, 114);
        }

        #foto3 {
            left: 365px;
            top: 390px;
            width: 140px;
            height: 98px;
            border: 3px solid rgb(247, 200, 114);
        }

        #foto4 {
            left: 365px;
            top: 490px;
            width: 140px;
            height: 98px;
            border: 3px solid rgb(247, 200, 114);
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
        </div>
        <div class="foto" id="foto3" >
            <img src="crot.png" alt="foto3">
        </div>
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
            const titleText = document.getElementById("upload6").value;
            const titleDisplay = document.getElementById("displayTitle");

            // Clear the existing content
            titleDisplay.innerHTML = '';

            const radius = 100;  // The radius of the circle
            const angleStep = 140 / (titleText.length - 1);  // Only curve across the top half (180 degrees)

            titleText.split('').forEach((char, index) => {
                const span = document.createElement('span');
                span.innerText = char;

                // Start at -90 degrees (top of the circle) and curve to the right
                const angle = -90 + (index * angleStep);
                
                // First rotate the letter by the calculated angle, then move it outward, then un-rotate to make the text readable
                span.style.transform = `rotate(${angle}deg) translate(${radius}px) rotate(${-angle}deg)`;
                titleDisplay.appendChild(span);
            });
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
