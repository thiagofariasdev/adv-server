import React, { Component } from 'react';
import { Container } from "../../theme/container";
import { Map, InfoWindow, Marker, GoogleApiWrapper } from 'google-maps-react';


export class MapContaienr extends Component {
    render() {
        return(
            <Map 
                google={this.props.google}
                zoom={14}
                centerAroundCurrentLocation={true}
                className={'maps'}
                initialCenter={{lat:-21, lng:-52}}
            >
                <Marker
                    position={{lat:-21, lng:-51}}
                />
            </Map>
        )
    }
}

let I = GoogleApiWrapper({
    apiKey: ('AIzaSyACwqx20ffIhqEjKYYxKBWHSEqP999_d1Y')
})(MapContaienr);

export class Maps extends Component {
    render() {
        return (
            <Container>
                <I/>
            </Container>
        )
    }
}