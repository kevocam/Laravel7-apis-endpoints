import React from 'react';
import ReactDOM from 'react-dom';
import 'antd/dist/antd.css';
import { Table } from 'antd';
import axios from 'axios';

const columns = [
  {
    title: 'División',
    dataIndex: 'nombre',
  },
  {
    title: 'Colaboradores',
    dataIndex: 'integrantes',
    /* sorter: {
      compare: (a, b) => a.chinese - b.chinese,
      multiple: 3,
    }, */
  },
  {
    title: 'Nivel',
    dataIndex: 'nivel',
    /* sorter: {
      compare: (a, b) => a.math - b.math,
      multiple: 2,
    }, */
  },
  {
    title: 'Embajadores',
    dataIndex: 'embajador',
    
  },
];

function getData(){
  axios.get('http://127.0.0.1:8000/api/divisions')
  .then((response)=> {
  this.setState({
    info: response.data
  })
  return response.data
  })

}
  

let data = getData();


const dataOld = [
  {
    key: '1',
    nombre: 'John Brown',
    nivel: 98,
    integrantes: 60,
    embajador: 70,
  },
  {
    key: '2',
    name: 'Jim Green',
    chinese: 98,
    math: 66,
    english: 89,
  },
  {
    key: '3',
    name: 'Joe Black',
    chinese: 98,
    math: 90,
    english: 70,
  },
  {
    key: '4',
    name: 'Jim Red',
    chinese: 88,
    math: 99,
    english: 89,
  }, 
];

function onChange(pagination, filters, sorter, extra) {
  console.log('params', pagination, filters, sorter, extra);
}

ReactDOM.render(<Table columns={columns} dataSource={data} onChange={onChange} />, document.getElementById('containerData'));
export default Data;