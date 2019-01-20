import React, { Component } from 'react';
import './../css/buttons.css';

export class Button extends Component {
    render() {
        return (
            <button className={"btn"}>
                <span>{this.props.title}</span>
            </button>
        )
    }
}
