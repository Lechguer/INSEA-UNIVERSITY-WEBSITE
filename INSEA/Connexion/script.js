function togglePassword() {
    const input = document.getElementById("password");
    input.type = input.type === "password" ? "text" : "password";
}

const email = document.getElementById("email");
const password = document.getElementById("password");
const btn = document.getElementById("loginBtn");

function checkInputs(){
    if(email.value.trim() !== "" && password.value.trim() !== ""){
        btn.disabled = false;
    } else {
        btn.disabled = true;
    }
}

email.addEventListener("input", checkInputs);
password.addEventListener("input", checkInputs);
