import React, { Component } from 'react';
import { Link } from 'react-router-dom';
import { User } from '../lib/User';

export class Header extends Component {
    constructor(props){
        super(props);
        this.user = User.local();
        if(window.location.pathname.search(/curr/g)){
            console.log(true)
            // if(this.props.match.params.id != this.user.id) console.log('outter user');
        }
    }
    render() {
        return (
            <header className="head">
                <div className="head-footer" style={{display:'flex', flexDirection:'row', justifyContent:'space-between'}}>
                    <div>
                        <div className="head-img" style={{marginLeft:15}}>
                            <img 
                                src={this.user.avatar}
                                className="rounded-circle"
                                style={{maxHeight:74}}
                            />
                        </div>
                        <Link to="/cli" className="lnk-center">
                            <span>{this.user.name}</span>
                        </Link>
                    </div>
                    <div style={{display:'flex',justifyContent:'center', alignItems:'center'}}>
                        <a href="/logout" className="lnk-center">
                            <span><i className="fas fa-sign-out-alt"></i></span>
                        </a>
                    </div>
                </div>
            </header>
        )
    }
}