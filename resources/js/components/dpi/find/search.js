import React, { Component } from 'react';
import { Container } from './../../theme/container';

export class SearchAll extends Component {
    render() {
        return (
            <Container>
                <div>
                    <div className="p-2 bg-white">
                        <label className="sr-only" for="search">Buscar</label>
                        <div className="input-group">
                            <div style={{borderRight:'none'}} className="input-group-prepend">
                                <div style={{backgroundColor:'#fff',borderRight:'none'}} className="input-group-text">
                                    <i className="ti-search"></i>
                                </div>
                            </div>
                            <input 
                                style={{borderLeft:'none',boxShadow:'none',outline:'none'}} 
                                type="text" 
                                className="form-control" 
                                id="search" 
                                placeholder="Buscar"
                            />
                        </div>
                    </div>
                    <div className="h-100 w-100">

                    </div>
                </div>
            </Container>
        )
    }
}