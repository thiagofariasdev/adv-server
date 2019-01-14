import React, { Component } from 'react';
import {Link} from 'react-router-dom';

class Item extends Component {
    render(){
        return(
            <li className={" " + this.props.active()}>
                <Link to={this.props.to}>
                    <i className={"fas fa-" +this.props.icon}></i> <span style={{fontSize:12}}> {this.props.title}</span>
                </Link>
            </li>
        )
    }
}
export class SideBar extends Component {
    constructor(props){
        super(props)
        this.state = {
            side:[
                {to:'/cli',icon:'rss-square',title:'Feed'},
                {to:'/cli/chat', icon:'comments', title:'Chat'},
                {to:'/cli/demand', icon:'book', title:'Histórico'},
                {to:'/cli/historico', icon:'archive', title:'Histórico'},
                {to:'/cli/jobs', icon:'briefcase', title:'Serviços'}
            ]
        }
    }
    render() {
        return (
            <div id="sidebar-wrapper">
                <ul className="sidebar-nav">
                    {
                        this.state.side.map((i, id)=>{
                            return (<Item
                                key={id}
                                {...i}
                                active={()=>{
                                    if(window.location.pathname == i.to) return('active');
                                    else return('');
                                }}
                            />)
                        })
                    }
                </ul>
            </div>
        )
    }
}
