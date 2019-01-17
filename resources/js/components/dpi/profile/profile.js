import React, { Component } from 'react'
import { Header } from "./../../theme/header";
import { Container } from '../../theme/container';
import { User } from './../../lib/User';

export class ViewProfile extends Component {
    constructor(props){
        super(props);
        this.user = User.local();
    }
    render() {
        return (
            <Container>
                <Header uid={this.props.match.params.id ? this.props.match.params.id:this.user.id}/>
            </Container>
        )
    }
}
