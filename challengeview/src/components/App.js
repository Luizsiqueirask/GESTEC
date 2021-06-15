import React, { Component } from 'react';
import logo from '../logo.svg';
import '../style/App.css';
import ListPatient from './crud/ListPatients';
import Jumbotron from './Jumbotron';

class App extends Component{

render(){

  

  return (
    <div className="App">
      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />
        <h1 className="App-title">Welcome to React + Redux + API</h1>
        <h1 className="App-title">Challenge View</h1>
      </header>
        <Jumbotron/>
        <ListPatient patients={this.listPatients}/>
    </div>
  )
}

}

export default App;
