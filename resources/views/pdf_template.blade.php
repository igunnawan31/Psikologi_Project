<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Document</title>
    <style>
        body {
            font-family: 'Baloo', sans-serif;
        }
        h1 {
            color: #e91e63;
            text-align: center;
            font-weight: bold;
            font-size: 24px;
        }
        .container {
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $title }}</h1>
        <p>{{ $message }}</p>

        <!-- Display uploaded images -->
        @foreach($imagePaths as $image)
            <img src="{{ $image }}" alt="Uploaded Image" style="width: 200px; height: auto;">
        @endforeach
    </div>
</body>
</html>