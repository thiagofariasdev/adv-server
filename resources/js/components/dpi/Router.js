import React, { Component } from 'react';
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom';
import { Home } from './screens';
import { ViewProfile } from './profile/profile';

export default class Nav extends Component {
    render() {
        return (
            <Router>
                <Switch>
                    <Route exact path="/cli" component={Home}/>
                    <Route path="/cli/curriculo/:id" component={ViewProfile}/>
                </Switch>
            </Router>
        )
    }
}
