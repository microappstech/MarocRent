let verifiedTab = document.getElementById("verified");
let forgetTab = document.getElementById("forget");
let sendButton = document.getElementById("send");
let backButton = document.getElementById("back");
verifiedTab.style.display = "none";
sendButton.onclick=()=>{
    let email = document.querySelector("input[type='text']");

    if(email.value != "")
    {
        forgetTab.style.display ="none";
        verifiedTab.style.display = "block";
    }
}