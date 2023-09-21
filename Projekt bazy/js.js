let CreateUser = document.querySelector(".CreateUser");
let CU_Button = document.querySelector(".CU_Button");

let showdiv = () => {
   CreateUser.style.display = "block"
}

CU_Button.addEventListener("click", showdiv);