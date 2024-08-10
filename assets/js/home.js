let openLogin = document.getElementById("openLogin");
let openSignIn = document.getElementById("openSignIn");
let boxLogin = document.getElementById("boxLogin");
let boxSignIn = document.getElementById("boxSignIn");
let showHere = document.getElementById("showHere");
let body = document.querySelector("body");
openLogin.addEventListener("click", () => {
  showHere.scrollIntoView();
  body.classList.add("overflow-hidden");
  boxLogin.classList.remove("hidden");
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
openSignIn.addEventListener("click", () => {
  body.classList.remove("overflow-hidden");
  boxLogin.classList.add("hidden");
  showHere.scrollIntoView();
  body.classList.add("overflow-hidden");
  boxSignIn.classList.remove("hidden");
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
// slider;
let sliderTitles = document.querySelector(".slider-title");
let sliderTitle = document.querySelectorAll(".slider-title-item");
let sliderContainer = document.getElementById("slider-container-img");
let sliderImg = sliderContainer.querySelectorAll("img");
let counter = 0;
let autoSlider = () => {
  sliderImg[counter].style.animation = "nextBf 0.5s ease-in forwards";
  sliderTitle[counter].classList.toggle("active");
  if (counter >= sliderImg.length - 1) {
    counter = 0;
  } else {
    counter++;
  }
  sliderImg[counter].style.animation = "nextAft 0.5s ease-in forwards";
  sliderTitle[counter].classList.toggle("active");
};
setInterval(autoSlider, 3000);
