// Get the modal
var modal9 = document.getElementById('modal_news9');

// Get the button that opens the modal
var btn = document.getElementById("btn_news9");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-news9")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal9.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal9.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal9) {
        modal9.style.display = "none";
    }
}