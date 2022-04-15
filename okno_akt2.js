// Get the modal
var modal2 = document.getElementById('modal_news2');

// Get the button that opens the modal
var btn = document.getElementById("btn_news2");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-news2")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}