let txt2 = "span.two",
  txt3 = "span.three",
  txt4 = "span.four",
  img2 = "img.two",
  img3 = "img.three",
  img4 = "img.four";

gsap
  .timeline({
    defaults: {
      duration: 300,
    },
    scrollTrigger: {
      trigger: ".wrap",
      scrub: !0,
      start: "+=1",
      end: "+=3000",
      pin: !0,
    },
  })
  .to(".wrap span.one", { opacity: 0, delay: 600 })
  .to(".wrap img.one", { opacity: 0, y: -20 }, "<")
  .from(txt2, { opacity: 0 })
  .from(img2, { opacity: 0, y: 20 }, "<")
  .to(txt2, { opacity: 0, delay: 600 })
  .to(img2, { opacity: 0, y: -20 }, "<")
  .from(txt3, { opacity: 0 })
  .from(img3, { opacity: 0, y: 20 }, "<")
  .to(txt3, { opacity: 0, delay: 600 })
  .to(img3, { opacity: 0, y: -20 }, "<")
  .from(txt4, { opacity: 0 })
  .from(img4, { opacity: 0, y: 20 }, "<")
  .to(txt4, { opacity: 1, duration: 600 })
  .to(img4, { opacity: 1, y: -20 }, "<");

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
