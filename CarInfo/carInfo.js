document.getElementById("back").onclick = function (){
    window.location.href = "../Search/search.php";
};

document.addEventListener("DOMContentLoaded", function() {
    var images = document.querySelectorAll('.car img');
    images.forEach(function(image) {
        image.addEventListener('click', function() {
            // Crează un element de imagine mărită
            var enlargedImage = document.createElement('img');
            enlargedImage.src = this.src;
            enlargedImage.classList.add('enlarged');

            // Crează butonul de închidere
            var closeButton = document.createElement('span');
            closeButton.innerHTML = '&times;'; // "x"
            closeButton.classList.add('close-btn');

            // Adaugă imaginea mărită și butonul de închidere la body
            document.body.appendChild(closeButton);
            document.body.appendChild(enlargedImage);

            // Închide imaginea mărită atunci când utilizatorul dă clic pe ea sau pe butonul de închidere
            function closeEnlargedImage() {
                document.body.removeChild(enlargedImage);
                document.body.removeChild(closeButton);
            }

            //enlargedImage.addEventListener('click', closeEnlargedImage);
            closeButton.addEventListener('click', closeEnlargedImage);
        });
    });
});

