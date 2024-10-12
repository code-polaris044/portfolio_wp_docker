"use strict";

//ローディングJs
export const addLoadedClass = () => {
    const spinner = document.getElementById("loading");
    spinner.classList.add("loaded");
};

window.addEventListener("load", addLoadedClass);

export const toggleBodyOverflow = () => {
    // htmlタグを取得
    let html = document.documentElement;

    // 現在のhtmlのスタイルを取得
    let htmlStyle = window.getComputedStyle(html);

    // htmlのoverflowスタイルがhiddenかどうかを確認
    if (htmlStyle.overflowY === "hidden") {
        // もしoverflowがhiddenなら、htmlのスタイルを元に戻す
        html.style.height = "";
        html.style.overflowY = "auto"; // autoに戻す
    } else {
        // そうでなければ、htmlにheight: 100%とoverflow: hiddenを設定し、スクロールを無効にする
        html.style.height = "100%";
        html.style.overflowY = "hidden";
    }
};

document.addEventListener("DOMContentLoaded", function () {
    // ハンバーガーメニューボタンがクリックされたときのイベントハンドラを設定
    document
        .querySelector(".l-hamburger")
        .addEventListener("click", toggleBodyOverflow);
});

//ハンバーガー
export function toggleHamburger() {
    document.querySelector(".l-hamburger").classList.toggle("active");
    document.querySelector(".l-sp__menu").classList.toggle("active");
}
