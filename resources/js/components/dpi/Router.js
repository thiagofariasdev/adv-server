import React, { Component } from 'react';
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom';
import * as Components from './screens';

export default class Nav extends Component {
    render() {
        return (
            <Router>
                <Switch>
                    <Route exact path="/cli" component={Components.Home}/>
                    <Route path="/cli/curriculo/:id" component={Components.ViewProfile}/>
                    <Route path="/cli/me" component={Components.ViewProfile}/>
                    <Route path="/cli/chat" component={Components.Chat}/>
                    <Route path="/cli/historico" component={Components.History}/>
                    <Route path="/cli/busca" component={Components.SearchAll}/>
                    <Route path="/cli/jobs" component={Components.Jobs}/>
                    <Route path="/cli/diligencia" component={Components.CreateDemand}/>
                </Switch>
            </Router>
        )
    }
}
