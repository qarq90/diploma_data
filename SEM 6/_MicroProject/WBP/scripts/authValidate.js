const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zAZ]{2,4}$/;
const phonePattern = /^\d{10}$/;

function validateLogin() {
    let email = document.getElementById("email");
    let password = document.getElementById("password");

    let error = document.getElementById("error");

    let typeContainer = document.getElementById("auth-type");

    if (email.value == "" || password.value == "") {
        error.textContent = "Input Fields cannot be Empty";
        error.style.opacity = "1";
        typeContainer.style.marginBottom = "-1rem";
        return false;
    } else if (!emailPattern.test(email.value)) {
        error.textContent = "Invalid Email Format";
        error.style.opacity = "1";
        typeContainer.style.marginBottom = "-1rem";
        return false;
    } else {
        return true;
    }
}

function validateSignup() {
    let email = document.getElementById("email");
    let phone = document.getElementById("phone");
    let password = document.getElementById("password");
    let username = document.getElementById("username");

    let error = document.getElementById("error");

    let typeContainer = document.getElementById("auth-type");

    if (
        email.value == "" ||
        password.value == "" ||
        username.value == "" ||
        phone.value == ""
    ) {
        error.textContent = "Input Fields cannot be Empty";
        error.style.opacity = "1";
        typeContainer.style.marginBottom = "-1rem";
        return false;
    } else if (!phonePattern.test(phone.value)) {
        error.textContent = "Invalid Phone Number";
        error.style.opacity = "1";
        typeContainer.style.marginBottom = "-1rem";
        return false;
    } else if (!emailPattern.test(email.value)) {
        error.textContent = "Invalid Email Format";
        error.style.opacity = "1";
        typeContainer.style.marginBottom = "-1rem";
        return false;
    } else {
        return true;
    }
}
