import './bootstrap';
import 'flowbite';

document.addEventListener('DOMContentLoaded', (event) => {
    console.log("DOM fully loaded and parsed");
    
    // Add event listeners to the image elements
    document.querySelectorAll('.template-image').forEach(image => {
        image.addEventListener('click', function() {
            let imageSrc = this.getAttribute('data-image-src');
            changePreview(imageSrc);
        });
    });
});

function changePreview(imageSrc) {
    let previewImage = document.getElementById('previewImage');
    if (previewImage) {
        previewImage.src = imageSrc;
    } else {
        console.error("Preview image element not found");
    }
}
