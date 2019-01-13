import React, { Component } from 'react'

export class Btn extends Component {
    render() {
        return (
            <nav className="navbar navbar-expand-sm navbar-light bg-transparent">
                <button className="btn left-m" onClick={this.props.openMenu}>
                    <i className="fas fa-bars"></i>
                </button>
            </nav>
        )
    }
}
