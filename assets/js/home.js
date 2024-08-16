let openLogin = document.getElementById("openLogin");
let openSignIn = document.getElementById("openSignIn");
let openForgotPass = document.getElementById("openForgotPass");
let boxLogin = document.getElementById("boxLogin");
let boxSignIn = document.getElementById("boxSignIn");
let boxForgotPass = document.getElementById("boxForgotPass");
let showHere = document.getElementById("showHere");
let body = document.querySelector("body");
openLogin.addEventListener("click", () => {
  showHere.scrollIntoView();
  body.classList.add("overflow-hidden");
  boxLogin.classList.remove("hidden");
});
openSignIn.addEventListener("click", () => {
  body.classList.remove("overflow-hidden");
  boxLogin.classList.add("hidden");
  showHere.scrollIntoView();
  body.classList.add("overflow-hidden");
  boxSignIn.classList.remove("hidden");
});
openForgotPass.addEventListener("click", () => {
  body.classList.remove("overflow-hidden");
  boxLogin.classList.add("hidden");
  showHere.scrollIntoView();
  body.classList.add("overflow-hidden");
  boxForgotPass.classList.remove("hidden");
});
let closeLogin = document.getElementById("closeLogin");
closeLogin.addEventListener("click", () => {
  body.classList.remove("overflow-hidden");
  boxLogin.classList.add("hidden");
});
let closeSignIn = document.getElementById("closeSignIn");
closeSignIn.addEventListener("click", () => {
  body.classList.remove("overflow-hidden");
  boxSignIn.classList.add("hidden");
});
let closeForgotPass = document.getElementById("closeForgotPass");
closeForgotPass.addEventListener("click", () => {
  body.classList.remove("overflow-hidden");
  boxForgotPass.classList.add("hidden");
});
// check Errors
if (typeof errorsLogin !== "undefined" && errorsLogin) {
  showHere.scrollIntoView();
  body.classList.add("overflow-hidden");
  boxLogin.classList.remove("hidden");
}
if (typeof errorsSignIn !== "undefined" && errorsSignIn) {
  showHere.scrollIntoView();
  body.classList.add("overflow-hidden");
  boxSignIn.classList.remove("hidden");
}
if (typeof errorForgot !== "undefined" && errorForgot) {
  showHere.scrollIntoView();
  body.classList.add("overflow-hidden");
  boxForgotPass.classList.remove("hidden");
}
// slider;
