import React, { Component } from 'react';
import { Container } from "../../theme/container";
import { Map, InfoWindow, Marker, GoogleApiWrapper } from 'google-maps-react';
import {Api} from './../../lib/Api';

export class MapContaienr extends Component {
    constructor(props){
        super(props);
        this.state = {
            location:{lat:0, lng:0}
        }
    }
    async componentWillMount(){
        let req = await Api.get('/api/position');
        this.setState({location:{...req.data}});
        Map.panTo({lat:req.data.lat , lng:req.data.lng});
    }
    render() {
        return(
            <Map 
                google={this.props.google}
                zoom={14}
                centerAroundCurrentLocation={true}
                className={'maps'}
                initialCenter={{lat:-21,lng:-51}}
                center={this.state.location}
            >
                <Marker
                    position={this.state.location}
                    title='Seu local'
                    label="Você"
                />
            </Map>
        )
    }
}

let Mapa = GoogleApiWrapper({
    apiKey: ('AIzaSyACwqx20ffIhqEjKYYxKBWHSEqP999_d1Y')
})(MapContaienr);

export class Maps extends Component {
    render() {
        return (
            <Container>
                <Mapa/>
            </Container>
        )
    }
}