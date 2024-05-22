function validateSignupForm() {
    var name = document.forms["signupForm"]["name"].value;
    var email = document.forms["signupForm"]["email"].value;
    var phoneNumber = document.forms["signupForm"]["phoneNumber"].value;
    var password = document.forms["signupForm"]["password"].value;

    if (name === "" || email === "" || phoneNumber === "" || password === "") {
        alert("All fields must be filled out");
        return false;
    }

    if (!isValidEmail(email)) {
        alert("Invalid email format");
        return false;
    }
}

function isValidEmail(email) {
    // Basic email format validation
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    return emailPattern.test(email);
}