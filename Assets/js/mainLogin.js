let navToLogin = document.getElementById("tologin");
let navToRegsiter = document.getElementById("toregister");
let formRegister = document.getElementById("register");
let formLogin = document.getElementById("login")
formRegister.style.display = "none";
navToRegsiter.onclick= ()=>{
    formLogin.style.display = "none";
    formRegister.style.transition = "1s";
    formRegister.style.display = "block";

}
navToLogin.onclick = ()=> {
    formRegister.style.display = "none";
    formLogin.style.transition = "1s";
    formLogin.style.display = 'block';
}