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
    <form class="max-w-2xl mx-auto" method="POST" action="{{ route('pesanan.store') }}">
        {{-- @csrf <!-- This is necessary for security in Laravel --> --}}

        <!-- Nama Pemesan -->
        <div class="mb-5">
            <label for="namapemesan" class="block mb-2 text-md font-medium text-pink-500 dark:text-white">Nama</label>
            <input type="text" id="namapemesan" name="namapemesan" class="block w-full p-4 text-pink-500 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-pink-700 focus:border-pink-700 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-700 dark:focus:border-pink-700">
        </div>

        <!-- Email Penerima -->
        <div class="mb-5">
            <label for="emailpenerima" class="block mb-2 text-md font-medium text-pink-500 dark:text-white">Email Penerima</label>
            <input type="email" id="emailpenerima" name="emailpenerima" class="block w-full p-4 text-pink-500 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-pink-700 focus:border-pink-700 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-700 dark:focus:border-pink-700">
        </div>

        <!-- Tanggal Kirim -->
        <div class="mb-5">
            <label for="tanggalkirim" class="block mb-2 text-md font-medium text-pink-500 dark:text-white">Tanggal Kirim</label>
            <input type="date" id="tanggalkirim" name="tanggalkirim" class="block w-full p-4 text-pink-500 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-pink-700 focus:border-pink-700 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-700 dark:focus:border-pink-700">
        </div>

        <!-- Waktu Kirim -->
        <div class="mb-5">
            <label for="waktukirim" class="block mb-2 text-md font-medium text-pink-500 dark:text-white">Waktu Kirim</label>
            <input type="time" id="waktukirim" name="waktukirim" class="block w-full p-4 text-pink-500 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-pink-700 focus:border-pink-700 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-700 dark:focus:border-pink-700">
        </div>

        <!-- Judul -->
        <div class="mb-5">
            <label for="judul" class="block mb-2 text-md font-medium text-pink-500 dark:text-white">Judul</label>
            <input type="text" id="judul" name="judul" class="block w-full p-4 text-pink-500 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-pink-700 focus:border-pink-700 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-700 dark:focus:border-pink-700">
        </div>

        <!-- Pesan -->
        <div class="mb-5">
            <label for="pesan" class="block mb-2 text-md font-medium text-pink-500 dark:text-white">Pesan</label>
            <textarea id="pesan" name="pesan" class="block w-full h-60 p-4 text-pink-500 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-pink-700 focus:border-pink-700 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-pink-700 dark:focus:border-pink-700"></textarea>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-center items-center">
            <button type="submit" class="w-48 h-14 bg-gradient-to-r from-[#A47EFD] to-[#FF88E6] border-white border-2 rounded-lg text-white font-bold text-xl">
                Submit
            </button>
        </div>
    </form>

    {{-- <div class="flex justify-center items-center">
        <div class="w-48 h-14 bg-gradient-to-r from-[#A47EFD] to-[#FF88E6] border-white border-2 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
            <a href="/createyourown/pickyourtemplates">
                <h2 class="text-center font-bold text-xl flex items-center justify-center h-full text-white cursor-pointer">
                    Back
                </h2>
            </a>
        </div>
        <div class="w-48 h-14 bg-gradient-to-r from-[#A47EFD] to-[#FF88E6] border-white border-2 rounded-lg ">
            <a href="/createyourown/pickyourtemplates/form/preview">
                <h2 class="text-center font-bold text-xl flex items-center justify-center h-full text-white cursor-pointer">
                    Selanjutnya
                </h2>
            </a>
        </div>
    </div> --}}
</body>
</html>