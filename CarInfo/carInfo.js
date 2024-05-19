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

function ajusteazaText() {
    var text = document.getElementById('textArea').innerText;
    var maxLength = 100;
    var lines = text.split("\n");
    var result = "";

    lines.forEach(function(line) {
        if (line.length > maxLength) {
            var lastSpaceIndex = line.lastIndexOf(" ");
            if (lastSpaceIndex !== -1 && lastSpaceIndex >= maxLength - 10) {
                // Face slice după ultimul spațiu dacă este aproape de maxLength
                result += line.slice(0, lastSpaceIndex) + "\n";
                line = line.slice(lastSpaceIndex + 1);
            } else {
                // Altfel, face slice la fiecare 100 de caractere
                while (line.length > maxLength) {
                    result += line.slice(0, maxLength) + "\n";
                    line = line.slice(maxLength);
                }
            }
        }
        result += line + "\n";
    });
    document.getElementById('textArea').innerHTML = result;
}

// Apelarea funcției pentru ajustarea textului la încărcarea paginii
document.addEventListener("DOMContentLoaded", ajusteazaText);