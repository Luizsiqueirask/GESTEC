import React, {Component} from 'react';
import 'bootstrap/dist/css/bootstrap.min.css';

class Jumbotron extends Component {
    render() {
        return (
            <div className="jumbotron jumbotron-fluid">
                <div className="">
                    <h1 className="display-5">Patient List from API Laravel</h1>
                    <p className="lead">This is a modified jumbotron that occupies
                        the entire horizontal space of its
                        parent.</p>
                </div>
            </div>
        )
    }
}

export default Jumbotron;


