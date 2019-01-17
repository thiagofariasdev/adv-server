import React, { Component } from 'react';
import { Link } from 'react-router-dom';
import { User } from '../lib/User';
import { Api } from './../lib/Api';

export class Header extends Component {
    constructor(props){
        super(props);
        this.state ={
            loading: true
        }
    }
    async getUser(id){
        let user = await Api.get('/api/user_info/'+id);
        return user.data;
    }
    async componentDidMount(){
        const user = User.local();
        if(window.location.pathname.search(/curriculo/g)){
            if(this.props.uid != user.id) this.user = this.getUser(this.props.uid);
            else this.user = user;
            if(this.user != null){
                this.setState({loading:false});
            }
        }
    }
    render() {
        if(!this.state.loading){
            return (
                <header className="head">
                    <div className="head-footer" style={{display:'flex', flexDirection:'row', justifyContent:'space-between'}}>
                        <div>
                            <div className="head-img" style={{marginLeft:15}}>
                                <img 
                                    src={this.user.avatar}
                                    className="rounded-circle"
                                    style={{maxHeight:74}}
                                />
                            </div>
                            <Link to="/home" className="lnk-center">
                                <span>{this.user.name}</span>
                            </Link>
                        </div>
                    </div>
                </header>
            )
        }else{
            return(
                <header className="head">
                    <div className="head-footer" style={{display:'flex', flexDirection:'row', justifyContent:'space-between'}}>
                        <div>
                            <div className="head-img" style={{marginLeft:15}}>
                                <img 
                                    src={'https://via.placeholder.com/80x80?text=+'}
                                    className="rounded-circle"
                                    style={{maxHeight:74}}
                                />
                            </div>
                            <Link to="/home" className="lnk-center">
                                <span><img src="https://via.placeholder.com/80x10?text=+"/></span>
                            </Link>
                        </div>
                    </div>
                </header>
            )
        }
    }
}