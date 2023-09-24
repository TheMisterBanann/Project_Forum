let CreateUser = document.querySelector(".CreateUser");
let CU_Button = document.querySelector(".CU_Button");
let Close_Button = document.querySelector(".close");

let logindiv = document.querySelector(".logindiv");
let loginButton = document.querySelector(".loginButton");
let lClose_Button = document.querySelector(".lclose");

const textarea = document.querySelector('.tytul');
const textarea2 = document.querySelector('.content');

let showdiv = () => {
   CreateUser.style.display = "block";
   logindiv.style.display = "none"
}

let closediv = () => {
   CreateUser.style.display = "none";
}



let showlogin = () => {
   logindiv.style.display = "block"
   CreateUser.style.display = "none";
}

let closelogin = () => {
   logindiv.style.display = "none"
}



textarea.addEventListener('input', () => {
  textarea.style.height = 'auto';  // Resetowanie wysokości do automatycznego dopasowania
  textarea.style.height = textarea.scrollHeight + 'px';  // Ustawienie wysokości na podstawie zawartości
});

textarea2.addEventListener('input', () => {
   textarea2.style.height = 'auto';  // Resetowanie wysokości do automatycznego dopasowania
   textarea2.style.height = textarea.scrollHeight + 'px';  // Ustawienie wysokości na podstawie zawartości
 });




CU_Button.addEventListener("click", showdiv);
Close_Button.addEventListener("click", closediv);

loginButton.addEventListener("click", showlogin);
lClose_Button.addEventListener("click", closelogin);
