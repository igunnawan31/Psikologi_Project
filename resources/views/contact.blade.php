<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <h1>Contact Us</h1>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="{{ route('send.email') }}" method="POST">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>

        <label for="targetEmail">Email Receiver:</label><br>
        <input type="email" id="targetEmail" name="targetEmail"><br><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message"></textarea><br><br>

        <button type="submit">Send Email</button>
    </form>
</body>
</html>
