
import React from 'react';
import ReactDOM from 'react-dom';
import 'antd/dist/antd.css';
import { Form, Input, InputNumber, Button } from 'antd';
import axios from 'axios';

const layout = {
  labelCol: {
    span: 8,
  },
  wrapperCol: {
    span: 16,
  },
};
const validateMessages = {
  required: '${label} is required!',
  types: {
    email: '${label} No es valido',
    number: '${label} no es un numero entero positivo.',

  },
  number: {
    range: '${label} must be between ${min} and ${max}',
  },
};



const Formulario = () => {
    const onFinish = (values) => {
      axios.post('/api/divisions', {
          nombre: values.nombre,
        enbajador: values.embajador,
        integrantes: values.integrantes,
        nivel: values.nivel,
    }).then(response => {
        console.log(response)
    }).catch(e => {
        console.log(e);
    });
    };
  
    return (
      <Form {...layout} name="nest-messages" onFinish={onFinish} validateMessages={validateMessages}>
        <Form.Item
          name={['user', 'nombre']}
          label="Nombre"
          rules={[
            {
              required: true,
              max: 99,
            },
          ]}
        >
          <Input />
        </Form.Item>
        
        <Form.Item
          name={['user', 'age']}
          label="Integrantes"
          rules={[
            {
              type: 'number',
              min: 0,
              max: 99,
            },
          ]}
        >
          <InputNumber />
          </Form.Item>

          <Form.Item
          name={['user', 'nivel']}
          label="Nivel superior"
          rules={[
            {
              type: 'number',
              min: 0,
              max: 99,
            },
          ]}
        >
            <InputNumber />

        </Form.Item>
        <Form.Item name={['user', 'embajador']} label="Embajador">
          <Input />
        </Form.Item>
        
        <Form.Item wrapperCol={{ ...layout.wrapperCol, offset: 8 }}>
          <Button type="primary" htmlType="submit">
            Guardar
          </Button>
        </Form.Item>
      </Form>
    );
  };




export default Formulario;

if (document.getElementById('formulario')) {
    ReactDOM.render(<Formulario />, document.getElementById('formulario'));
}
