import React, { Component, button } from 'react'
import api from '../LoadingAPI';
import ViewPatient from './ViewPatient';

class ListPatients extends Component{
    state = {
        patients: [],
        patientsSelect: [],
        isSelected: false, 
    }

    async componentDidMount() {
        const response = await api.get('/patient/');
    
        this.setState({ patients: response.data });
    }
    
    onDetails = (id) => {
        const response = api.get('/patient/${id}');
    
        this.setState({ patient: response.data });
    }

    render(){
        const { patients } = this.state
        return (
            <div>
                <div className="Row">
                  <table className="table">
                      <thead className="bg-primary">
                          <tr>
                              <th scope="col">#</th>
                              <th scope="col">Nome</th>
                              <th scope="col">Idade</th>
                              <th scope="col">Telefone</th>
                              <th scope="col">Ação</th>
                          </tr>
                      </thead>
                      <tbody>
                          {patients.map((patient) => (
                              <tr>                 
                                  <th scope="row">{patient.id}</th>
                                  <td>{patient.nome}</td>
                                  <td>{patient.data_nascimento.slice(7,9)}</td>
                                  <td>{patient.telefone}</td>
                                  <td>
                                  <button className="btn btn-success"  onClick={
                                      () => {this.setState({isSelected: !this.state.isSelected}) }}>
                                          Detalhes
                                        
                                  </button>
                                       { this.state.isSelected &&                                        
                                            patients.map(patient => {
                                            return (
                                              <ViewPatient
                                                key={patient.id}
                                                patient={patient}
                                              />
                                            );
                                        })}
                                  </td>                        
                              </tr>
                          ))}
                      </tbody>
                  </table>    
                </div>  
            </div>
        )
    };
}
    

export default ListPatients;