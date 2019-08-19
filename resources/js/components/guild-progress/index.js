import React from "react";
import ReactDOM from "react-dom";
import MainApp from "./MainApp";

if (document.getElementById("guild-progress-table")) {
    ReactDOM.render(
        <MainApp />,
        document.getElementById("guild-progress-table")
    );
}
