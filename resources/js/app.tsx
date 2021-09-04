
import React from "react";
import { render } from "react-dom";
import Trend from "./components/Trend";


if (document.getElementById('trend')) {
    render(<Trend />, document.getElementById("trend"));
}