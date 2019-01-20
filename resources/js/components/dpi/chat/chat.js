import React, { Component } from 'react';
import { Container } from './../../theme/container';
import './../../theme/css/chat.css';

class ChatView extends Component {
    render() {
        return (
            <div className="chat-view" style={{display:this.props.show == true ? 'flex':'none'}}>
                <div style={{height:'100%', width:'100%'}}>
                    <div className="c-head">
                        <img height="40" src="https://via.placeholder.com/300x300" className="rounded-circle"/>
                        <h5 style={{paddingLeft:10}}>Nome do destinatário</h5>
                    </div>
                    <div className="c-body">
                        
                    </div>
                    <div className="c-foot">
                        <textarea 
                            placeholder="Escreva sua mensagem" 
                            className="w-message"
                        ></textarea>
                    </div>
                </div>
            </div>
        )
    }
}
class ChatContainer extends Component {
    render(){
        return (
            <div 
                onClick={()=>this.props.openChat(this.props.id)} 
                className={"h-px-50 p-1 c-point flex-row "+(this.props.active==true?'active':'')}
            >
                <div className="user-chat-photo">
                    <img className="rounded-circle img-fluid" src={this.props.img}/>
                </div>
                <div>
                    <span className="user-chat-name">{this.props.name}</span><br/>
                    <p className="last-message">{this.props.msg}</p>
                </div>
            </div>
        )
    }
}
export class Chat extends Component {
    constructor(props){
        super(props);
        this.state = {
            chats:[{id:1},{id:2},{id:3},{id:4},{id:5},{id:5},{id:5},{id:5},{id:5},{id:5}],
            chat_id:0,
            open:false
        }
    }
    openChat(e){
        this.setState({open:true, chat_id:e});
    }
    render() {
        return (
            <Container>
                <div className="row" style={{padding:0,margin:0}}>
                    <div className="col-md-3 h-max bg-white h-100 pr-0 pl-0">
                        <div className="max-h no-x-overflow">
                            {
                                this.state.chats.map((i, id)=>{
                                    return (
                                        <ChatContainer
                                            id={i.id}
                                            key={id}
                                            active={this.state.chat_id  == i.id}
                                            openChat={this.openChat.bind(this)}
                                            name={'User name'}
                                            msg={'Last message'}
                                            img={'https://via.placeholder.com/300x300'}
                                        />
                                    )
                                })
                            }
                        </div>
                    </div>
                    <div className="col-md-9 pl-0 h-max relative pr-0">
                        <div className="h-100 w-100 flex-center">
                            <img className="img-fluid" style={{maxWidth:300}} src="/svg/libra_chat.svg"/>
                        </div>
                        <ChatView
                            show={this.state.open ? true : false}
                            id={this.state.chat_id}
                        />
                    </div>
                </div>
            </Container>
        )
    }
}