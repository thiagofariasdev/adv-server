import React, { Component } from 'react';
import { Alert } from "./Alert";
import './../css/errors.css';

export class ErrorScreen extends Component {
    constructor(props){
        super(props);
        this.state = {
            code:this.props.code,
            msg:this.props.message?this.props.message:'Ooops, Algo deu errado aqui, mas nossos desenvolvedores já estão trabalhando nisso!',
            modal:this.props.modal,
            show:'modal-display'
        }
        this.erros = {
            '404':'/svg/error_404.svg',
            '505':'',
            '500':''
        };
    }
    render() {
        if(this.state.modal) return (
            <Alert
            
            />
        ); else return(
            <div>
                <div style={{height:600, maxWidth:600}}>
                    <div 
                        style={{backgroundImage:'url('+this.erros[this.props.code]+')'}} 
                        className="img-error-container"
                    >
                    </div>

                </div>
            </div>
        );
    }
}
