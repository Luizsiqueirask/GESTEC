import React, { Component } from 'react'
//import api from '../LoadingAPI';

class ViewPatient extends Component{

    state = {
        id: null,
        patient: [],
        //selected: this.props.patient
    }

    /*async componentDidMount() {
        const response = await api.get('/patient/{id}');
    
        this.setState({ patientid: response.data });
    }*/
    
    render(props){
        
        //const { patientid } = this.state

        return (
          <div className="modal" tabindex="-1" role="dialog">
          <div className="modal-dialog" role="document">
            <div className="modal-content">
              <div className="modal-header">
                <h5 className="modal-title">Detalhe dos Pacientes</h5>
                <button type="button">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div className="modal-body">
                <p><span><strong>ID: </strong></span>{this.prop.selected.id}</p>
                <p><span><strong>Nome: </strong></span>{this.prop.selected.nome}</p>
                <p><span><strong>Telefone: </strong></span>{this.prop.selected.tefefone}</p>
                <p><span><strong>Comorbidades: </strong></span>{this.prop.selected.tem_comorbidades}</p>
                <p><span><strong>Vacinado: </strong></span>{this.prop.selected.vacinado_covid19}</p>
              </div>
              <div className="modal-footer">
                <button type="button" className="btn btn-primary">Save changes</button>
                <button type="button" className="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        )
    };
}
    
export default ViewPatient;