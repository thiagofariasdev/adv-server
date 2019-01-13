import React, { Component } from 'react'

export class User {
    static local(){
        var user = window.localStorage.getItem('user@jushub:data');
        user = user.replace(/&quot;/g, '"'); 
          user = JSON.parse(user);
        if(user)
            return user;
        else 
            return window.location.replace('/logout');
    }
}
export class UserCardHeader extends Component {
  render() {
    return (
      <div>
        
      </div>
    )
  }
}