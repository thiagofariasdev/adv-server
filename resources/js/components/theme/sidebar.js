import React, { Component } from 'react';
import {Link} from 'react-router-dom';


export class SideBar extends Component {
    render() {
        return (
            <div id="sidebar-wrapper">
                <ul className="sidebar-nav">
                    <li className="sidebar-brand">
                        <Link to="/cli">
                            <img src="/svg/logo.svg" alt="LOGO - Home"/>
                        </Link>
                    </li>
                    <li className="active">
                        <Link to="/cli">
                            <i className="fas fa-rss-square"></i> Feed
                        </Link>
                    </li>
                </ul>
            </div>
        )
    }
}
