import { addLoadedClass } from "./common.js";

import React from "react";
import { createRoot } from "react-dom/client";

const App = () => {
  return (
    <div>
      <h1>HELLO</h1>
    </div>
  );
};

createRoot(document.getElementById("app")).render(<App />);
