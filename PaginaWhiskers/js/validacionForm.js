//document.addEventListener("DOMContentLoaded", function() {
//    document.getElementById('form-register').addEventListener('submit', validarForm);
//})

const form = document.getElementById('form-register'),
    emailField = form.querySelector('.email-field'),
    emailInput = emailField.querySelector('.email'),
    passField = form.querySelector('.create-password'),
    passInput = passField.querySelector('.password'),
    cPassField = form.querySelector('.confirm-password'),
    cPassInput = cPassField.querySelector('.confirpassword');

// ---- ---- Email Validation ---- ---- //
function checkEmail() {
    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (!emailInput.value.match(emailPattern)) {
        return emailField.classList.add('invalid');
    }
    emailField.classList.remove('invalid');
}

// ---- ---- Password Validation ---- ---- //
function createPass() {
    const passPattern =
        /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&#]{8,}$/;

    if (!passInput.value.match(passPattern)) {
        return passField.classList.add('invalid');
    }
    passField.classList.remove('invalid');
}
// ---- ---- Confirm Password Validation ---- ---- //
function confirmPass() {
    if (passInput.value !== cPassInput.value || cPassInput.value === '') {
        return cPassField.classList.add('invalid');
    }
    cPassField.classList.remove('invalid');
}



// ---- ---- Calling Function on Form Sumbit ---- ---- //

form.addEventListener('submit',function (event){

    event.preventDefault();
    checkEmail();
    createPass();
    confirmPass();
    emailInput.addEventListener('keyup', checkEmail);
    passInput.addEventListener('keyup', createPass);
    cPassInput.addEventListener('keyup', confirmPass);
    return false
}); 
