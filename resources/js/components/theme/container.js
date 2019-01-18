import React, { Component } from 'react';
import './css/sidebar.css';
import './css/theme.css';
import {SideBar} from './sidebar';
import {Btn} from './fixbtn';

export class Container extends Component {
    constructor(props){
        super(props);
        this.state = {
            wrap:'toggled'
        };
    }
    render() {
        return (
            <div id="wrapper" className={this.state.wrap}>
                <SideBar />
                <div id="page-content-wrapper">
                    <Btn openMenu={()=>{this.setState({wrap:this.state.wrap == 'toggled' ? '':'toggled'})}}/>
                    <div style={{height:42}}></div>
                    {
                        this.props.children
                    }
                </div>
            </div>
        )
    }
}

