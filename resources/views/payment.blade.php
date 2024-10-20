<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <x-header></x-header>

    <section id="Home" class="pt-10">
        <div class="container mx-auto">
            <div class="flex justify-center items-center text-center">
                <h2 class="text-2xl mx-auto font-bold my-10 bg-gradient-to-b from-[#A47EFD] to-[#FF88E6] text-transparent bg-clip-text  ">
                    Payment
                </h2>
            </div>
        </div>
      </section>

    <section id="Payment" class="pt-10">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="w-full space-y-4 px-6 md:px-8">
                <!-- Payment buttons -->
                <div class="flex justify-between">
                    <button id="ShoppePayBtn" class="payment-option border border-gray-300  mr-4 py-2 rounded w-full ">Shoppee Pay</button>
                    <button id="GoPayBtn" class="payment-option border border-gray-300 py-2 mx-4 rounded w-full">Go Pay</button>
                    <button id="BRIBtn" class="payment-option border border-gray-300 py-2 mx-4 rounded w-full">BRI</button>
                    <button id="BNIBtn" class="payment-option border border-gray-300 py-2 ml-4 rounded w-full">BNI</button>
                    <button id="MandiriBtn" class="payment-option border border-gray-300 py-2 ml-4 rounded w-full">Mandiri</button>
                    <button id="DanaBtn" class="payment-option border border-gray-300 py-2 ml-4 rounded w-full">Dana</button>
                </div>
    
                <!-- Payment Info -->
                <div id="paymentInfo" class="mt-4 p-4 border border-gray-300 rounded">
                    Select a payment method to see details.
                </div>
    
                <!-- File Upload for Bukti Pembayaran -->
                <div class="mt-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="buktipembayaran">
                        Upload Bukti Pembayaran (JPG, JPEG, PNG)
                    </label>
                    <input type="file" id="buktipembayaran" accept=".jpg, .jpeg, .png"
                           class="bg-white border border-gray-300 rounded-lg shadow-sm p-2 w-full focus:ring-blue-500 focus:border-blue-500">
                </div>
    
                <div class="mt-4">
                    <button class="bg-gradient-to-r from-[#A47EFD] to-[#FF88E6] text-white px-6 py-2 rounded-lg">
                        <a href="{{ url()->previous() }}">
                            Back
                        </a>
                    </button>
                    <button id="submitPaymentBtn" class="bg-gradient-to-r from-[#A47EFD] to-[#FF88E6] text-white px-6 py-2 rounded-lg">
                        Submit Payment
                    </button>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
