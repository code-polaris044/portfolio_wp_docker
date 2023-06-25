"use strict";

export const addLoadedClass = () => {
  const spinner = document.getElementById("loading");
  spinner.classList.add("loaded");
};

window.addEventListener("load", addLoadedClass);

document.querySelector(".hamburger").addEventListener("click", function () {
  this.classList.toggle("active");
  document.querySelector(".l-pc__menu").classList.toggle("active");
});
