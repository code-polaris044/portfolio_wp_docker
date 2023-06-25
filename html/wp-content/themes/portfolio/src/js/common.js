"use strict";
// ロード画面
export const addLoadedClass = () => {
  const spinner = document.getElementById("loading");
  spinner.classList.add("loaded");
};

window.addEventListener("load", addLoadedClass);

// ハンバーガー
export function toggleHamburger() {
  document.querySelector(".l-hamburger").classList.toggle("active");
  document.querySelector(".l-sp__menu").classList.toggle("active");
}
