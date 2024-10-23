<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
    <style>
        /* Optional: Add any additional styles for the PDF content here */
        #pdfTemplate {
            display: none; /* Hide the template by default */
        }
    </style>
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

    <section id="Home" class="pt-10">
        <div class="container mx-auto">
            <div class="flex justify-center items-center text-center">
                <h2 class="text-2xl mx-auto font-bold my-10 bg-gradient-to-b from-[#A47EFD] to-[#FF88E6] text-transparent bg-clip-text">
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
                    <button id="ShoppePayBtn" class="payment-option border border-gray-300 mr-4 py-2 rounded w-full">Shoppee Pay</button>
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
                    <button id="submitPaymentBtn" class="bg-gradient-to-r from-[#A47EFD] to-[#FF88E6] text-white px-6 py-2 rounded-lg" onclick="generatePDF()">
                        Submit Payment
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Hidden PDF Template -->
    <div id="pdfTemplate">
        <h1>Payment Receipt</h1>
        <p>Payment Method: <span id="paymentMethod"></span></p>
        <p>Upload Bukti Pembayaran: <span id="paymentProof"></span></p>
        <p>Date: <span id="paymentDate"></span></p>
    </div>

    <script>
        // Get the session variable for the template path
        const templatePath = '{{ session('template_path') }}';
        
        document.getElementById('submitPaymentBtn').addEventListener('click', function() {
            // Gather payment method and other relevant data
            const paymentMethod = document.querySelector('.payment-option:focus')?.innerText || 'None Selected';
            const buktiPembayaran = document.getElementById('buktipembayaran').files[0] ? document.getElementById('buktipembayaran').files[0].name : 'No file uploaded';

            // Fill the template
            document.getElementById('paymentMethod').innerText = paymentMethod;
            document.getElementById('paymentProof').innerText = buktiPembayaran;
            document.getElementById('paymentDate').innerText = new Date().toLocaleString();

            // Generate PDF from the hidden template
            var element = document.getElementById('pdfTemplate');
            var opt = {
                margin: 0,
                filename: 'payment_receipt.pdf',
                image: { type: 'jpeg', quality: 1 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'a4', orientation: 'portrait' }
            };

            // You can include logic here to use the templatePath if needed, for now, it just generates the PDF
            html2pdf().set(opt).from(element).save();
        });
    </script>
</body>
</html>
