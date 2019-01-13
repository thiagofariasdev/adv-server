import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Nav from './dpi/Router';

if (document.getElementById('cli')) {
    ReactDOM.render(<Nav />, document.getElementById('cli'));
}