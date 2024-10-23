<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Pengisian data</title>
</head>
<body>
    <x-header></x-header>
    <h1 class="text-center font-bold text-2xl text-pink-500">Review Your Information</h1>
    <section class="flex justify-center items-center">
        <div>
            <h3>{{ session('title') }}</h3>
            <p>{{ session('message') }}</p>
            <img src="{{ asset('storage/' . session('image1')) }}" alt="Image 1" />
            <img src="{{ asset('storage/' . session('image2')) }}" alt="Image 2" />
            <img src="{{ asset('storage/' . session('image3')) }}" alt="Image 3" />
            <img src="{{ asset('storage/' . session('image4')) }}" alt="Image 4" />
        </div>
    </section>

    <section id="Home" class="pt-10 pb-10">
        <div class="container mx-auto">
            <div class="flex justify-center items-center text-center">
                <h2 class="text-2xl mx-auto font-bold my-10 bg-gradient-to-b from-[#A47EFD] to-[#FF88E6] text-transparent bg-clip-text">
                    Fill the form
                </h2>
            </div>
        </div>
    </section>

    <!-- Add method="POST" and action to the form -->
    <form class="max-w-2xl mx-auto" method="POST" action="{{ route('pesanans.store') }}">
        {{-- @csrf <!-- This is necessary for security in Laravel --> --}}

        <!-- Nama Pemesan -->
        <div class="mb-5">
            <label for="namaPemesan" class="block mb-2 text-md font-medium text-pink-500 dark:text-white">Nama</label>
            <input type="text" id="namaPemesan" name="namaPemesan" class="block w-full p-4 text-pink-500 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-pink-700 focus:border-pink-700 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-700 dark:focus:border-pink-700" required>
        </div>

        <!-- Email Penerima -->
        <div class="mb-5">
            <label for="targetEmail" class="block mb-2 text-md font-medium text-pink-500 dark:text-white">Email Penerima</label>
            <input type="email" id="targetEmail" name="targetEmail" class="block w-full p-4 text-pink-500 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-pink-700 focus:border-pink-700 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-700 dark:focus:border-pink-700" required>
        </div>

        <!-- Tanggal Kirim -->
        <div class="mb-5">
            <label for="tanggalKirim" class="block mb-2 text-md font-medium text-pink-500 dark:text-white">Tanggal Kirim</label>
            <input type="date" id="tanggalKirim" name="tanggalKirim" class="block w-full p-4 text-pink-500 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-pink-700 focus:border-pink-700 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-700 dark:focus:border-pink-700" required>
        </div>

        <!-- Waktu Kirim -->
        <div class="mb-5">
            <label for="waktuKirim" class="block mb-2 text-md font-medium text-pink-500 dark:text-white">Waktu Kirim</label>
            <input type="time" id="waktuKirim" name="waktuKirim" class="block w-full p-4 text-pink-500 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-pink-700 focus:border-pink-700 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-700 dark:focus:border-pink-700" required>
        </div>

        <!-- Subject -->
        <div class="mb-5">
            <label for="subject" class="block mb-2 text-md font-medium text-pink-500 dark:text-white">Subject Email</label>
            <input type="text" id="subject" name="subject" class="block w-full p-4 text-pink-500 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-pink-700 focus:border-pink-700 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-700 dark:focus:border-pink-700" required>
        </div>

        <!-- Body Email -->
        <div class="mb-5">
            <label for="bodyEmail" class="block mb-2 text-md font-medium text-pink-500 dark:text-white">Body Email</label>
            <textarea id="bodyEmail" name="bodyEmail" class="block w-full h-60 p-4 text-pink-500 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-pink-700 focus:border-pink-700 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-700 dark:focus:border-pink-700" required></textarea>
        </div>

        <!-- Submit Button -->
        <section id="button" class="pb-10">
            <div class="flex justify-center items-center">
                <div class="w-48 h-14 bg-gradient-to-r from-[#A47EFD] to-[#FF88E6] border-white border-2 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    <a href="{{ url()->previous() }}" onclick="event.preventDefault(); this.closest('form').submit();">
                        <h2 class="text-center font-bold text-xl flex items-center justify-center h-full text-white cursor-pointer">
                            Back
                        </h2>
                    </a>
                </div>
                <button type="submit" class="w-48 h-14 bg-gradient-to-r from-[#A47EFD] to-[#FF88E6] border-white border-2 rounded-lg ">
                    <h2 class="text-center font-bold text-xl flex items-center justify-center h-full text-white cursor-pointer">
                        Selanjutnya
                    </h2>
                </button>
            </div>
        </section>
    </form>

    <script>
        // You can access the template path here
        const templatePath = '{{ session('template_path') }}';
        console.log(templatePath); // Check if it's properly set

        // You can also use it in a fetch call or any other logic if needed
        document.getElementById('templatePath').addEventListener('click', function(event) {
            // Logic for using the templatePath if necessary
            console.log('Selected template path:', templatePath);
        });
    </script>
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>