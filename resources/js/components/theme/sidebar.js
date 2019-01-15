import React, { Component } from 'react';
import {Link} from 'react-router-dom';
import { User } from '../lib/User';

class Item extends Component {
    render(){
        return(
            <li className={" " + this.props.active()}>
                <Link to={this.props.to}>
                    <i className={this.props.icon}></i> <span style={{fontSize:12}}> {this.props.title}</span>
                </Link>
            </li>
        )
    }
}
export class SideBar extends Component {
    constructor(props){
        super(props)
        this.user = User.local();
        this.state = {
            side:[
                {to:'/cli',icon:'ti-rss-alt',title:'Feed'},
                {to:'/cli/curriculo/'+this.user.id, icon:'ti-user', title:'Perfil'},
                {to:'/cli/chat', icon:'ti-comments', title:'Chat'},
                {to:'/cli/historico', icon:'ti-agenda', title:'Histórico'},
                {to:'/cli/busca', icon:'ti-search', title:'Buscar'},
                {to:'/cli/jobs', icon:'ti-bag', title:'Serviços'},
                {to:'/cli/diligencia', icon:'ti-marker-alt', title:'Lançar Demanda'}
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
