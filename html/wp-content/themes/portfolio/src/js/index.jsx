//ScrollReveal
ScrollReveal({
  reset: true,
  distance: "80px",
  duration: 2000, //2s
  delay: 200, // 0.2s後に発動
});

ScrollReveal().reveal(".main-title, .section-title", {
  delay: 200,
  origin: "left",
});
ScrollReveal().reveal(".sec-01 .image, .info", {
  delay: 600,
  origin: "bottom",
});
ScrollReveal().reveal(".text-box", {
  delay: 700,
  origin: "right",
});
ScrollReveal().reveal(".media-icons i", {
  delay: 500,
  origin: "bottom",
  interval: 200,
});
ScrollReveal().reveal(".sec-02 .image, .sec-03 .image", {
  delay: 500,
  origin: "top",
});
ScrollReveal().reveal(".media-info li", {
  delay: 500,
  origin: "left",
  interval: 200,
});
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
    <div id="app">
      <div className="App">
        <ScrollToTop smooth color="#000" />
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

// コンタクト　ツールチップ
tippy(".note", {
  content: "必須",
});

const options = {
  perPage: 3,
  perMove: 1,
  gap: 30,
  cover: true,
  updateOnMove: true,
  type: "loop",
  focus: "left",
  pagination: false,
  azyLoad: false,
  breakpoints: {
    960: {
      perPage: 1,
      gap: 16,
      type: "splide",
      autoplay: false,
      heightRatio: 1,
      rewind: true,
      perMove: 1,
      gap: 16,
      cover: true,
      updateOnMove: true,
      padding: "10rem",
      type: "loop",
      focus: "center",
    },
  },
};

const splide = new Splide(".splide", options);
splide.mount();
