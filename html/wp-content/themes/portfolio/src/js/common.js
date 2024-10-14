"use strict";

//ローディングJs
export const addLoadedClass = () => {
    const spinner = document.getElementById("loading");
    spinner.classList.add("loaded");
};

window.addEventListener("load", addLoadedClass);

// ハンバーガーメニューのトグル関数
const toggleHamburger = () => {
    const html = document.documentElement;
    const hamburger = document.querySelector(".l-hamburger");
    const menu = document.querySelector(".l-sp__menu");

    // メニューとボタンのactiveクラスをトグル
    hamburger.classList.toggle("active");
    menu.classList.toggle("active");

    // メニューがアクティブかどうかでoverflowYを設定
    if (menu.classList.contains("active")) {
        html.style.height = "100%";
        html.style.overflowY = "hidden";
    } else {
        html.style.height = "";
        html.style.overflowY = "auto";
    }
};

// ウィンドウリサイズ時の処理
const onWindowResize = () => {
    const html = document.documentElement;
    const menu = document.querySelector(".l-sp__menu");

    if (window.innerWidth >= 961) {
        // 幅が961px以上になったらスクロールを有効にする
        html.style.height = "";
        html.style.overflowY = "auto";

        // メニューが開いている場合は閉じる
        if (menu.classList.contains("active")) {
            menu.classList.remove("active");
            document.querySelector(".l-hamburger").classList.remove("active");
        }
    }
};

// DOMが読み込まれたときの初期化処理
document.addEventListener("DOMContentLoaded", function () {
    // ハンバーガーメニューボタンのクリックイベントを設定
    document
        .querySelector(".l-hamburger")
        .addEventListener("click", toggleHamburger);

    // ウィンドウのリサイズイベントを設定
    window.addEventListener("resize", onWindowResize);
});
