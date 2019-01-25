import React, { Component } from 'react';
import './../css/modal.css';

export class ErrorScreen extends Component {
    constructor(props){
        super(props);
        this.state = {
            code:this.props.code,
            msg:this.props.message?this.props.message:'Ooops, Algo deu errado aqui, mas nossos desenvolvedores já estão trabalhando nisso!',
            modal:this.props.modal
        }
    }
    render() {
        if(this.state.modal) return (
            <div className="modal-container">
                <div className="modal-cont">
                    <div className="head">
                        <button className="close">&times;</button>
                    </div>
                    <div className="body">
                    </div>
                </div>
            </div>
        ); else return(
            <div>
            
            </div>
        );
    }
}
