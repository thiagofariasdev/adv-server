import React, { Component } from 'react';
import { BrowserRouter as Router, Route } from 'react-router-dom';
import { Home } from './screens';

export default class Nav extends Component {
    render() {
        return (
            <Router>
                <Route exact path="/cli" component={Home}/>
            </Router>
        )
    }
}
