//ロード画面
// window.addEventListener("load", (event) => {
//   const spinner = document.getElementById("loading");
//   spinner.classList.add("loaded");
//   console.log("ページが完全に読み込まれました");
// });

// index.js

export const addLoadedClass = () => {
  const spinner = document.getElementById("loading");
  spinner.classList.add("loaded");
};

window.addEventListener("load", addLoadedClass);
