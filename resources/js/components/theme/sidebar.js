import React, { Component } from 'react';
import {Link} from 'react-router-dom';


export class SideBar extends Component {
    render() {
        return (
            <div id="sidebar-wrapper">
                <ul className="sidebar-nav">
                    <li><div style={{height:60}}></div></li>
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
