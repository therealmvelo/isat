function validateForm() {
    var email = document.forms["loginForm"]["email"].value;
    var password = document.forms["loginForm"]["password"].value;

    if (email === "" || password === "") {
        alert("Both fields must be filled out");
        return false;
    }

    if (!isValidEmail(email)) {
        alert("Invalid email format");
        return false;
    }
}

function isValidEmail(email) {
    // email format validation
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    return emailPattern.test(email);
}