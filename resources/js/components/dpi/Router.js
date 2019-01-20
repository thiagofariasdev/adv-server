import React, { Component } from 'react';
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom';
import * as Screens from './screens';

export default class Nav extends Component {
    render() {
        return (
            <Router>
                <Switch>
                    <Route exact path="/home" component={Screens.Home}/>
                    <Route path="/curriculo/:id" component={Screens.ViewProfile}/>
                    <Route path="/me" component={Screens.ViewProfile}/>
                    <Route path="/chat" component={Screens.Chat}/>
                    <Route path="/historico" component={Screens.History}/>
                    <Route path="/busca" component={Screens.SearchAll}/>
                    <Route path="/jobs" component={Screens.Jobs}/>
                    <Route path="/diligencia" component={Screens.CreateDemand}/>
                    <Route path="/mapa" component={Screens.Maps}/>
                </Switch>
            </Router>
        )
    }
}
