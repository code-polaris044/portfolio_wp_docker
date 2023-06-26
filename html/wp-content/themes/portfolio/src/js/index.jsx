gsap.fromTo(
  ".image",
  {
    x: 50,
    opacity: 0,
  },
  {
    scrollTrigger: {
      trigger: ".box",
      start: "top center",
    },
    x: 0,
    opacity: 1,
  }
);

gsap.fromTo(
  ".text",
  {
    y: 50,
    opacity: 0,
  },
  {
    scrollTrigger: {
      trigger: ".box",
      start: "top center",
    },
    y: 0,
    opacity: 1,
  }
);

// ニュースティッカー

const slider = function () {
  // Next(Prev)ボタンの取得
  const next = document.querySelector(".next");
  const prev = document.querySelector(".prev");

  // liタグのheightを取得
  const sliderheight = document.querySelector(".sliderlist__item");
  let height = sliderheight.clientHeight;

  // slider(ul要素、li要素一覧)の取得
  const sliderlist = document.querySelector(".sliderlist");
  const sliderlist_item = document.querySelectorAll(".sliderlist__item");

  // カウンターの設定
  let counter = 0;

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
