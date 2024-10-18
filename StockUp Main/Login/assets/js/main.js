// Variable Declaration
const loginBtn = document.querySelector("#login");// login btn
const registerBtn = document.querySelector("#register");// btn register
const loginForm = document.querySelector(".login-form"); //login 
const registerForm = document.querySelector(".register-form"); // register 
const signUpLink = document.querySelector(".Sign_link a"); // Selecting the "Sign Up Here" link

// Login button function
loginBtn.addEventListener('click', () => {
    loginBtn.style.backgroundColor = "#212640";
    registerBtn.style.backgroundColor = "rgba(225,225,225,0.2)";
    
    loginForm.style.left = "50%";
    registerForm.style.left = "-50%";

    loginForm.style.opacity = 1;
    registerForm.style.opacity = 0;

    document.querySelector(".col-1").style.borderRadius = "0% 30% 20% 0";
});

// Register button function
registerBtn.addEventListener('click', () => {
    loginBtn.style.backgroundColor = "rgba(225,225,225,0.2)";
    registerBtn.style.backgroundColor = "#212640";

    loginForm.style.left = "150%";
    registerForm.style.left = "50%";

    loginForm.style.opacity = 0;
    registerForm.style.opacity = 1;

    document.querySelector(".col-1").style.borderRadius = "0 20% 30% 0";
});

// Sign Up link function (same as clicking the register button)
signUpLink.addEventListener('click', (e) => {
    e.preventDefault(); // Prevents the default anchor behavior

    loginBtn.style.backgroundColor = "rgba(225,225,225,0.2)";
    registerBtn.style.backgroundColor = "#212640";

    loginForm.style.left = "150%";
    registerForm.style.left = "50%";

    loginForm.style.opacity = 0;
    registerForm.style.opacity = 1;
    document.querySelector(".col-1").style.borderRadius = "0 20% 30% 0";
});