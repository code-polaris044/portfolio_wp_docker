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