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

document.addEventListener("DOMContentLoaded", () => {
    const createAccountForm = document.querySelector("#createAccount");
    const successfulProductForm = document.querySelector("#successfulProduct");
    const clearFormButton = document.querySelector(".form__button-clear");
    const successMessage = document.querySelector(".form__message--success");

    createAccountForm.addEventListener("submit", function (e) {
        e.preventDefault();

        const word1 = document.querySelector("#word1").value;
        const word2 = document.querySelector("#word2").value;
        const word3 = document.querySelector("#word3").value;
        const word4 = document.querySelector("#word4").value;

        const errorMessages = document.querySelectorAll(".form__input-error-message");
        errorMessages.forEach(message => message.textContent = "");

        let hasErrors = false;

        if (!/^[A-Za-z]{4,7}$/.test(word1)) {
            setInputError(document.querySelector("#word1"), "This field is required.");
            hasErrors = true;
        } else {
            clearInputError(document.querySelector("#word1"));
        }
        if (!/^[A-Za-z]{4,7}$/.test(word2)) {
            setInputError(document.querySelector("#word2"), "This field is required.");
            hasErrors = true;
        } else {
            clearInputError(document.querySelector("#word2"));
        }
        if (!/^[A-Za-z]{4,7}$/.test(word3)) {
            setInputError(document.querySelector("#word3"), "This field is required.");
            hasErrors = true;
        } else {
            clearInputError(document.querySelector("#word3"));
        }
        if (!/^[A-Za-z]{4,7}$/.test(word4)) {
            setInputError(document.querySelector("#word4"), "This field is required.");
            hasErrors = true;
        } else {
            clearInputError(document.querySelector("#word4"));
        }

        if (!hasErrors) {
            createAccountForm.classList.add("form--hidden");
            successfulProductForm.classList.remove("form--hidden");

            const jumbledWords = shuffleWords([word1, word2, word3, word4]);
            populateJumbledWords(jumbledWords);
        } else {
            successMessage.textContent = "";
        }
    });

    clearFormButton.addEventListener("click", function (e) {
        e.preventDefault();
        
        document.querySelector("#word1").value = "";
        document.querySelector("#word2").value = "";
        document.querySelector("#word3").value = "";
        document.querySelector("#word4").value = "";

        const errorMessages = document.querySelectorAll(".form__input-error-message");
        errorMessages.forEach(message => message.textContent = "");

        successMessage.textContent = "";
    });

    function shuffleWords(words) {
        return words.map(word => {
            const characters = word.split('');
            for (let i = characters.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [characters[i], characters[j]] = [characters[j], characters[i]];
            }
            return characters.join('').toUpperCase();
        });
    }

    function populateJumbledWords(jumbledWords) {
        const inputFields = document.querySelectorAll("#successfulProduct .form__input");
        for (let i = 0; i < jumbledWords.length; i++) {
            inputFields[i].value = jumbledWords[i];
        }
    }
});

