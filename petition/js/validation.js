
var validation = document.getElementById("submit");

var password =  document.getElementById("password");
var confirpassword = document.getElementById("confirpassword")
var confirmP = document.getElementById("confirmP");
validation.addEventListener("click",fontionValid);
function fontionValid(e){
  if(confirpassword == password){
    e.preventDefault();
    confirmP.textContent = "Le mot de passe  correspond";
    confirmP.style.color="red";
  }
  else{
    event.preventDefault();
    confirmP.textContent = "Le mot de passe ne correspond pas";
    confirmP.style.color="red";
  }
}
