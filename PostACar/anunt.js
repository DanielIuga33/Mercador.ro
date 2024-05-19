var euro = document.getElementById("euro");
var ron = document.getElementById("ron");
let price = document.getElementById("price");
var nou = document.getElementById("new");
var used = document.getElementById("used");
var automatic = document.getElementById("automatic");
var manual = document.getElementById("manual")
var rightSide = document.getElementById("rightSide");
var leftSide = document.getElementById("leftSide");
let state = "unspecified";
let currency = "unspecified";
let gearBox = "unspecified";
let steeringWheel ="unspecified";
price.readOnly = true;

euro.addEventListener("change", setPrice);
ron.addEventListener("change", setPrice);
price.addEventListener("change", addCurrency)

function hasOnlyDigits(inputString) {
    // Define a regular expression pattern that matches only digits
    const digitPattern = /^\d+$/;
    
    // Use test() method to check if the input string matches the pattern
    return digitPattern.test(inputString);
}

function setPrice(){
    price.readOnly = false;
}
function addCurrency(){
    var input = document.getElementById("price");
    let number = input.value.replace("€","");
    let nr = number.replace("RON", "");
    let numb = nr.replace(" ", "");
    if (!hasOnlyDigits(numb)){
        input.value = "";
    }
    if (input.value.includes("RON") || input.value.includes("€") || input.value == ""){
        return;
    }
    if (currency == "Ron"){
        input.value += " RON"
    } else{
        input.value += " €"
    }
}
document.getElementById('submit').addEventListener('click', function(event){
    let title = document.getElementById("cartitle").value;
    let brand = document.getElementById("brand").value;
    let carbody = document.getElementById("body").value;
    let model = document.getElementById("model").value;
    let price = document.getElementById("price").value;
    let fuel = document.getElementById("fuel").value;
    let year = document.getElementById("year").value;
    let city = document.getElementById("city").value;
    let description = document.getElementById("description").value;
    if (title == "" || brand == "" || carbody == "" || model == "" || price == "" || fuel == "" || year == ""){
        event.preventDefault();
        alert('you must complete all the fields marked with * !');
        if (title == ""){
            document.getElementById("cartitle").style.borderColor = "rgb(194, 34, 34)";
        }
        if (brand == ""){
            document.getElementById("brand").style.borderColor = "rgb(194, 34, 34)";
            document.getElementById("brand1").style.color = "rgb(194, 34, 34)";
        }
        if (model == ""){
            document.getElementById("model").style.borderColor = "rgb(194, 34, 34)";
            document.getElementById("model1").style.color = "rgb(194, 34, 34)";
        }
        if (price == ""){
            document.getElementById("price").style.borderColor = "rgb(194, 34, 34)";
            document.getElementById("price1").style.color = "rgb(194, 34, 34)";
        }
        if (city == ""){
            document.getElementById("city").style.borderColor = "rgb(194, 34, 34)";
            document.getElementById("city1").style.color = "rgb(194, 34, 34)";
        }
        if (carbody == ""){
            document.getElementById("body1").style.color = "rgb(194, 34, 34)";
        }
        if (fuel == ""){
            document.getElementById("fuel1").style.color = "rgb(194, 34, 34)";
        }
        if (year == ""){
            document.getElementById("year").style.borderColor = "rgb(194, 34, 34)";
            document.getElementById("year1").style.color = "rgb(194, 34, 34)";
        }
        if (description.length > 1 && description.length < 40){
            document.getElementById("desc").style.color = "rgb(194, 34, 34)";
            alert('Description must be at least 40 words !');
        }
    } else{
        window.alert("Your car was succesfully Published !");
    }
});

document.addEventListener("DOMContentLoaded", function() {
    // Selectăm inputul de fișier
    var fileInput1 = document.getElementById('fileToUpload');
    
    // Adăugăm un eveniment pentru a gestiona schimbările în inputul de fișier
    fileInput1.addEventListener('change', function(event) {
        var files = event.target.files; // Obținem lista de fișiere selectate

        // Verificăm dacă numărul de fișiere selectate depășește limita
        if (files.length > 8) {
            alert("The maximum number of images you can upload is 8.");
            // Resetează inputul de fișier pentru a elimina fișierele suplimentare
            this.value = "";
        }
    });
});
document.addEventListener('DOMContentLoaded', function() {
    var fileInput = document.getElementById('profilePic');
    var selectedFileNameLabel = document.getElementById('selectedFileNameLabel');


    fileInput.addEventListener('change', function() {
        // Verificăm dacă utilizatorul a selectat un fișier
        if (fileInput.files.length > 0) {
            // Afisăm numele primului fișier selectat în label
            selectedFileNameLabel.textContent = fileInput.files[0].name;
        } else {
            // Dacă nu s-a selectat niciun fișier, golim conținutul label-ului
            selectedFileNameLabel.textContent = "";
        }
    });
});
document.getElementById("homeButton").onclick = function(){

    window.location.href = "../Home/index.html";
}