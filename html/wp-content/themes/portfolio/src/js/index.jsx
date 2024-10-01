//ScrollReveal
ScrollReveal({
    reset: false,
    distance: "80px",
    duration: 2000, //2s
    delay: 200, // 0.2s後に発動
});

ScrollReveal().reveal(".p-front__news__picker", {
    delay: 200,
    origin: "left",
    reset: false,
});
ScrollReveal().reveal(
    ".p-front__selfIntroduction__title, .p-front__jobCareer__title,.p-front__pastProjects__title ",
    {
        delay: 200,
        origin: "left",
    }
);
ScrollReveal().reveal(".selfIntroduction__picWrap, .pastProjects__picWrap", {
    delay: 200,
    origin: "top",
});
ScrollReveal().reveal(".jobCareer__picWrap", {
    delay: 200,
    origin: "bottom",
});
ScrollReveal().reveal(
    ".p-selfIntroduction__glass, .p-selfIntroduction__glass__title, .p-selfIntroduction__glass__text",
    {
        delay: 200,
        origin: "right",
    }
);
ScrollReveal().reveal(".p-jobCareer__glass", {
    delay: 200,
    origin: "left",
});
ScrollReveal().reveal(".p-jobCareer__glass__text", {
    delay: 200,
    origin: "left",
});
ScrollReveal().reveal(".p-pastProjects__glass", {
    delay: 200,
    origin: "right",
});
ScrollReveal().reveal(
    ".p-pastProjects__glass__title, .p-pastProjects__glass__text, .p-pastProjects__glass__btn",
    {
        delay: 200,
        origin: "right",
    }
);

ScrollReveal().reveal(".l-lower__mv__title", {
    delay: 200,
    origin: "left",
    interval: 200,
});
ScrollReveal().reveal(
    ".l-lower__bg__about, .l-lower__bg__contact,  .l-lower__bg__404, .l-lower__bg__archive, .l-lower__bg__single, .l-lower__bg__gallery",
    {
        delay: 100,
        origin: "bottom",
        interval: 200,
    }
);
ScrollReveal().reveal(".p-front__map", {
    delay: 100,
    origin: "left",
    interval: 200,
});
ScrollReveal().reveal(".p-instagram__title", {
    delay: 100,
    origin: "left",
    interval: 800,
});
ScrollReveal().reveal(".instagram__img__wrap", {
    delay: 100,
    origin: "bottom",
    interval: 200,
    reset: false,
});
ScrollReveal().reveal(".p-front__contact__textarea", {
    delay: 100,
    origin: "right",
    interval: 200,
});
ScrollReveal().reveal(".p-post__list__item", {
    distance: "40px",
    delay: 100,
    origin: "bottom",
    interval: 200,
});
ScrollReveal().reveal(".p-about__title", {
    delay: 100,
    origin: "left",
    interval: 200,
});
ScrollReveal().reveal(".p-about__text", {
    delay: 100,
    origin: "left",
    interval: 200,
});
ScrollReveal().reveal(".p-about___img, .p-about__caption", {
    delay: 100,
    origin: "right",
    interval: 200,
});
ScrollReveal().reveal(".p-about__dt, .p-about__dd", {
    delay: 100,
    origin: "right",
    interval: 200,
});
ScrollReveal().reveal(".breadcrumbs", {
    delay: 100,
    origin: "right",
    interval: 200,
});
ScrollReveal().reveal(".splide__track", {
    delay: 500,
    origin: "top",
    interval: 400,
    reset: false,
    distance: "100px",
});
ScrollReveal().reveal(".p-single__gallery__imgSpWrap", {
    delay: 300,
    origin: "bottom",
    interval: 400,
    reset: false,
    distance: "100px",
});
ScrollReveal().reveal(".p-single__gallery__richtextWrap", {
    delay: 300,
    origin: "left",
    interval: 400,
    reset: false,
    distance: "100px",
});

// 文字数制限

window.onresize = function () {
    const windowSize = window.innerWidth;

    const left = document.querySelector(".pager__prev > a");
    const right = document.querySelector(".pager__next > a");

    const strL = left ? left.textContent : "";
    const strR = right ? right.textContent : "";
    let len;

    if (windowSize < 960) {
        len = 5;
    } else {
        len = 16;
    }

    if (strL.length > len) {
        left.textContent = strL.substring(0, len) + "...";
    }

    if (strR.length > len) {
        right.textContent = strR.substring(0, len) + "...";
    }
};

import { toggleHamburger, addLoadedClass } from "./common.js";

document.querySelector(".l-hamburger").addEventListener("click", function () {
    toggleHamburger();
});

import React from "react";
import { createRoot } from "react-dom/client";

function App() {
    return (
        <div id='app'>
            <div className='App'>
                <ScrollToTop smooth color='#000' />
                <h1>Scroll To See Magic</h1>
                <p style={{ marginTop: "200vh" }}>You Have Reached Bottom</p>
            </div>
        </div>
    );
}

//ニュース
const slider = function () {
    // Next(Prev)ボタンの取得
    const next = document.querySelector(".next");
    const prev = document.querySelector(".prev");

    // slider(ul要素、li要素一覧)の取得
    const sliderlist = document.querySelector(".sliderlist");
    const sliderlist_item = document.querySelectorAll(".sliderlist__item");

    // カウンターの設定
    let counter = 0;

    // もし.sliderlist__itemが存在しない場合、関数を終了する
    if (sliderlist_item.length === 0) {
        return;
    }

    // liタグのheightを取得
    const sliderheight = sliderlist_item[0]; // 最初の要素を使用する
    let height = sliderheight.clientHeight;

    // イベントリスナー (prev)
    prev.addEventListener("click", function () {
        if (counter == sliderlist_item.length - 1) return; //ボタン連打対策
        prev.style.display = "block";
        sliderlist.style.transition = ".3s";
        counter++;
        sliderlist.style.transform = "translateY(" + -height * counter + "px)";

        sliderlist.addEventListener("transitionend", function () {
            if (counter == sliderlist_item.length - 1) {
                sliderlist.style.transition = "none";
                // prev.style.display = "none";
            }
        });
    });

    // イベントリスナー (next)
    next.addEventListener("click", function () {
        if (counter == sliderlist_item.length - sliderlist_item.length) return; //ボタン連打対策
        next.style.display = "block";
        sliderlist.style.transition = ".3s";
        counter--;
        sliderlist.style.transform = "translateY(" + -height * counter + "px)";

        sliderlist.addEventListener("transitionend", function () {
            if (counter == sliderlist_item.length - sliderlist_item.length) {
                sliderlist.style.transition = "none";
                // next.style.display = "none";
            }
        });
    });
};

slider();

// ツールチップ
tippy(".note", {
    content: "必須",
});

//sliders
const options = {
    perPage: 1,
    perMove: 1,
    gap: 30,
    cover: true,
    updateOnMove: true,
    type: "loop",
    focus: "left",
    azyLoad: false,
    padding: "10rem",
    heightRatio: 0.6,
    breakpoints: {
        960: {
            heightRatio: 0.64,
            gap: 16,
            rewind: true,
            padding: "0",
        },
    },
};

const splideElement = document.querySelector(".splide");
if (splideElement) {
    const splide = new Splide(splideElement, options);
    splide.mount();
}
