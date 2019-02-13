import React  from 'react';
import ReactDOM from 'react-dom';
import App from "./App";


if (document.getElementById('guild-progress-table')) {
    ReactDOM.render(<App />, document.getElementById('guild-progress-table'));
}
