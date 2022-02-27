const header = document.querySelector("header");
header.classList.add("header");
const hamburger = document.querySelector(".hamburger");
const nav = document.querySelector("nav");

hamburger.addEventListener("click", function (event) {
    header.classList.toggle("hamburger-opened");
  });