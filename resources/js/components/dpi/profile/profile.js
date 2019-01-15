import React, { Component } from 'react'
import { Header } from "./../../theme/header";
import { Container } from '../../theme/container';

export class ViewProfile extends Component {
    render() {
        return (
            <Container>
                <Header uid={this.props.match.params.id}/>
            </Container>
        )
    }
}
