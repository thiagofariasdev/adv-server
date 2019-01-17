import React, { Component } from 'react';
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom';
import * as Components from './screens';

export default class Nav extends Component {
    render() {
        return (
            <Router>
                <Switch>
                    <Route exact path="/home" component={Components.Home}/>
                    <Route path="/curriculo/:id" component={Components.ViewProfile}/>
                    <Route path="/me" component={Components.ViewProfile}/>
                    <Route path="/chat" component={Components.Chat}/>
                    <Route path="/historico" component={Components.History}/>
                    <Route path="/busca" component={Components.SearchAll}/>
                    <Route path="/jobs" component={Components.Jobs}/>
                    <Route path="/diligencia" component={Components.CreateDemand}/>
                </Switch>
            </Router>
        )
    }
}
