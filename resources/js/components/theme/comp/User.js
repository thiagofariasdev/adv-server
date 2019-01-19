import React, { Component } from 'react';
import { Link } from "react-router-dom";

export class UserDemandHead extends Component {
    render() {
        return (
            <div className="user-line">
                <Link to="/curriculo/user">
                    <img 
                        height="40" 
                        className="rounded-circle"
                        src={'https://via.placeholder.com/300x300'}
                    />
                </Link>
                <div className="pl-1">
                    <Link className="no-dec-white" to="/curriculo/user">NOME DO USUÁRIO</Link>
                </div>
            </div>
        )
    }
}
