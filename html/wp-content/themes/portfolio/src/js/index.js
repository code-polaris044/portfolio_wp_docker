import { App } from "./reactApp.jsx";

import { LoadHandler } from "./common.js";
//ロード画面
window.onload = function () {
  LoadHandler();
};

import parts from "./parts.js";
parts("こんにちは、parts.js");
