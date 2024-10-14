"use strict";

//ローディングJs
export const addLoadedClass = () => {
    const spinner = document.getElementById("loading");
    spinner.classList.add("loaded");
};

window.addEventListener("load", addLoadedClass);

// ハンバーガーメニューのトグル関数
const toggleBodyOverflow = () => {
    const html = document.documentElement;
    const htmlStyle = window.getComputedStyle(html);

    if (htmlStyle.overflowY === "hidden") {
        html.style.height = "";
        html.style.overflowY = "auto";
    } else {
        html.style.height = "100%";
        html.style.overflowY = "hidden";
    }
};

// ウィンドウリサイズ時の処理
const onWindowResize = () => {
    const html = document.documentElement;
    if (window.innerWidth >= 961) {
        // 幅が961px以上になったらスクロールを有効にする
        html.style.height = "";
        html.style.overflowY = "auto";
    }
};

// DOMが読み込まれたときの初期化処理
document.addEventListener("DOMContentLoaded", function () {
    // ハンバーガーメニューボタンのクリックイベントを設定
    document
        .querySelector(".l-hamburger")
        .addEventListener("click", toggleBodyOverflow);

    // ウィンドウのリサイズイベントを設定
    window.addEventListener("resize", onWindowResize);
});

//ハンバーガー
export function toggleHamburger() {
    document.querySelector(".l-hamburger").classList.toggle("active");
    document.querySelector(".l-sp__menu").classList.toggle("active");
}
