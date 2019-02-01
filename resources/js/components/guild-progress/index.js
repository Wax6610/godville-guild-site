import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import {ProgressTable} from './ProgressTable'


if (document.getElementById('guild-progress-table')) {
    ReactDOM.render(<ProgressTable />, document.getElementById('guild-progress-table'));
}
