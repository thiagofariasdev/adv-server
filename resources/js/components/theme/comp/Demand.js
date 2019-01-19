import React, { Component } from 'react';
import './../css/demand.css';
import {Link} from 'react-router-dom';
import { UserDemandHead } from "./User";

export class Demand extends Component {
    constructor(props){
        super(props);
        this.state={
            tags:[1,2,3,4]
        }
    }
    render() {
        return (
            <div className="demand">
                <div className="head">
                    <UserDemandHead/>
                </div>
                <div className="tags">
                    {
                        this.state.tags.slice(0, 3).map((i, id)=>
                            (
                                <span key={id} >
                                    <Link className="badge badge-secondary badge-pill" to="#">
                                        #atuation
                                    </Link>
                                    {
                                        id == 2 && this.state.tags.length > 3 ? ('...'):(<span>&nbsp;</span>)
                                    }
                                </span>
                            )
                        )
                    }
                </div>
                <div className="body">
                    <h4>Titulo da demanda</h4>
                    <p>
                        Descrição da demanda vai aqui, deve conter um texto simples e resumido.
                    </p>
                </div>
            </div>
        )
    }
}
