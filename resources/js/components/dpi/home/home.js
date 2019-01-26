import React, { Component } from 'react'
import { Container } from './../../theme/container';
import { Demand, ErrorScreen } from './../../theme/comp/exp.js';
import { Api } from "./../../lib/Api";

export class Home extends Component {
    constructor(props){
        super(props);
        this.state = {
            demands:[]
        }
    }
    async componentDidMount(){
        const req = await Api.get('/api/get_demands');
        console.log(req.data);
        this.setState({demands:req.data})
    }
    render() {
        return (
            <Container>
                <div id="contentPage" className="row">
                    <div className="col-md-2"></div>
                        <div className="col-md-7">
                        {
                            this.state.demands.length < 0 ?
                            this.state.demands.map((i, id)=>(
                                <Demand
                                    {...i} 
                                    key={id}
                                />
                            )) : (
                                <ErrorScreen 
                                    code='none'
                                    msg="Nenhuma demanda encontrada"
                                    modal
                                />)
                        }
                        </div>
                    <div className="col-md-3"></div>
                </div>
            </Container>
        )
    }
}
