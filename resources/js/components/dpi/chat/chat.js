import React, { Component } from 'react';
import { Container } from './../../theme/container';

export class Chat extends Component {
    constructor(props){
        super(props);
        this.state = {
            chats:[1,2,3,4,5,6,7,8,9]
        }
    }
    render() {
        return (
            <Container>
                <div className="row h-100">
                    <div className="col-md-3 bg-white h-100 pr-0">
                        <div>
                            {
                                this.state.chats.map((i, id)=>{
                                    return (
                                        <div className="h-px-50 p-1 c-point">
                                            <div>
                                                <img src="https://via.placeholder.com/200x200" height="40"/>
                                            </div>
                                        </div>
                                    )
                                })
                            }
                        </div>
                    </div>
                    <div className="col-md-9 pl-0 h-max">
                        <div className="h-100 w-100 flex-center">
                            <img className="img-fluid" style={{maxWidth:300}} src="/svg/libra_chat.svg"/>
                        </div>
                    </div>
                </div>
            </Container>
        )
    }
}