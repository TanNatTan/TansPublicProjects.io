function setFormMessage(formElement, type, message) {
    const messageElement = formElement.querySelector(".form__message");

    messageElement.textContent = message;
    messageElement.classList.remove("form__message--success", "form__message--error");
    messageElement.classList.add(`form__message--${type}`);
}

function setInputError(inputElement, message) {
    inputElement.classList.add("form__input--error");
    inputElement.parentElement.querySelector(".form__input-error-message").textContent = message;
}

function clearInputError(inputElement) {
    inputElement.classList.remove("form__input--error");
    inputElement.parentElement.querySelector(".form__input-error-message").textContent = "";
}

function getInfo() {
    var username = document.querySelector("#login input[name='username']").value;
    var password = document.querySelector("#login input[name='password']").value;

    if (username === "admin" && password === "admin") {
        // Redirect to Labtask9_ALFORQUE when username and password are "admin"
        window.location.href = "file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/Labtasks/LT9/SA1  _ALFORQUE.html";
    } else if (username === "student1" && password === "1234") {
        // Redirect to SA1_Alforque when username and password are "student1" and "1234"
        window.location.href = "file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/HTMLS/SA1_Alforque.html";
    } else {
        // Show an error message for invalid credentials
        const loginForm = document.querySelector("#login");
        setFormMessage(loginForm, "error", "Invalid username or password");
    }
}


document.addEventListener("DOMContentLoaded", () => {
    const loginForm = document.querySelector("#login");
    const createAccountForm = document.querySelector("#createAccount");
    const loginButton = document.querySelector("#loginButton");

    document.querySelector("#linkCreateAccount").addEventListener("click", e => {
        e.preventDefault();
        loginForm.classList.add("form--hidden");
        createAccountForm.classList.remove("form--hidden");
    });

    document.querySelector("#linkLogin").addEventListener("click", e => {
        e.preventDefault();
        loginForm.classList.remove("form--hidden");
        createAccountForm.classList.add("form--hidden");
    }); 

    loginButton.addEventListener("click", getInfo); // Attach the getInfo function to the button click event
});
