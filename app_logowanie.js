
function check(input) {
    if (input.value != document.getElementById('haslo').value) {
        input.setCustomValidity('Hasła muszą być takie same');
    } else {
        // input is valid -- reset the error message
        input.setCustomValidity('');
    }
}


