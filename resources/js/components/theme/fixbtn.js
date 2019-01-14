import React, { Component } from 'react'

export class Btn extends Component {
    render() {
        return (
            <nav className="navbar navbar-expand-sm fixed-top navbar-light bg-adv">
                <div>
                    <a><img src="https://via.placeholder.com/150x30"/></a>
                    <button className="btn bg-transparent text-white" onClick={this.props.openMenu}>
                        <i className="fas fa-bars"></i>
                    </button>
                </div>
            </nav>
        )
    }
}
