import './bootstrap';
import 'flowbite';

document.addEventListener('DOMContentLoaded', (event) => {
    console.log("DOM fully loaded and parsed");
    
    // Add event listeners to the image elements
    document.querySelectorAll('.template-image').forEach(image => {
        image.addEventListener('click', function() {
            let imageSrc = this.getAttribute('data-image-src');
            let templateSrc = this.getAttribute('data-template-src')
            changePreview(imageSrc, templateSrc);
        });
    });
});

function changePreview(imageSrc, templateSrc) {
    let previewImage = document.getElementById('previewImage');
    let templatePath = document.getElementById('templatePath');
    if (previewImage) {
        previewImage.src = imageSrc;
        templatePath.href = templateSrc;
    } else {
        console.error("Preview image element not found");
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const buktipembayaranInput = document.getElementById('buktipembayaran');
    const paymentInfo = document.getElementById('paymentInfo');
    const buttons = document.querySelectorAll('.payment-option');
    const submitPaymentBtn = document.getElementById('submitPaymentBtn');

    const paymentDetails = {
        ShoppePay: 'You can use Transfer to Shopee Pay Account Number : 081226684193 Atas Nama Amara Armania',
        GoPay: 'You can use Transfer to Go Pay Account Number : 081226684193 Atas Nama Amara Armania',
        BRI: 'Transfer to this BRI : 604301032757536 Atas Nama Amara Armania',
        BNI: 'Transfer to this BNI : 6161220032 Atas Devita Rizqya R.P',
        Mandiri: 'Transfer to this Mandiri : 1070016973341 Atas Arimbi Khoirinisa',
        Dana: 'You can use Transfer to Dana Account Number : 081282827657 Atas Nama Andi FAIRUZKHA'
    };

    // Validate file input
    buktipembayaranInput.addEventListener('change', function() {
        const file = this.files[0];

        if (file) {
            const fileType = file.type;
            const validImageTypes = ['image/jpeg', 'image/png', 'image/jpg'];

            if (!validImageTypes.includes(fileType)) {
                alert('Invalid file type. Please upload a JPG, JPEG, or PNG image.');
                this.value = ''; // Clear the input
            }
        }
    });

    // Handle payment selection
    function handlePaymentSelection(paymentType, selectedButton) {
        paymentInfo.innerHTML = paymentDetails[paymentType];

        buttons.forEach(button => {
            button.classList.remove('bg-blue-100', 'border-blue-500');
            button.classList.add('border-gray-300');
        });

        selectedButton.classList.add('bg-blue-100', 'border-blue-500');
    }

    // Add event listeners for payment buttons
    buttons.forEach(button => {
        button.addEventListener('click', function() {
            const paymentType = this.id.replace('Btn', '');
            handlePaymentSelection(paymentType, this);
        });
    });

    // Submit payment function
    function submitPayment() {
        alert("Payment submitted!");
        // You can add more functionality here, like form submission
    }

    // Add event listener for the submit button
    submitPaymentBtn.addEventListener('click', submitPayment);
});

