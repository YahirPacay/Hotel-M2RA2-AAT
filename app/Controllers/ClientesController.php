<?php

namespace App\Controllers;

use App\Models\ClientesModel;


class ClientesController extends BaseController
{
    public function index(): string
    {
        $clientes = new ClientesModel();
        $datos['datos']= $clientes->findAll();
      //  print_r($datos);
        return view('clientes',$datos);
    }
    public function nuevoCliente()
    {
      return view('nuevo_cliente');
    }
    public function agregarCliente()
    {
      $datos = [
        'cliente_id'=>$this->request->getVar('txtId'),
        'nombre'=>$this->request->getVar('txtNombre'),
        'apellido'=>$this->request->getVar('txtApellido'),
        'nit'=>$this->request->getVar('txtNit'),
        'telefono'=>$this->request->getVar('txtTelefono'),
        'correo_electronico'=>$this->request->getVar('txtEmail'),
        'direccion'=>$this->request->getVar('txtDireccion'),
        'contrasenia'=>$this->request->getVar('txtContraseña')
      ];
      //print_r($datos);
      $clientes = new ClientesModel();
      $clientes->insert($datos);
      return redirect()->route('clientes');
    }

    public function eliminarCliente($id = null)
    {
     // print_r($id);
      $clientes = new ClientesModel();
      $clientes->delete($id);
      return redirect()->route('clientes');
    }
    
    public function buscarCliente($id = null)
    {
      $clientes = new ClientesModel();
      $datos['datos'] = $clientes->where('cliente_id',$id)->first();
      //print_r($datos);
      return view('frm_modificar_cliente',$datos);
    }

    public function modificarCliente()
    {
      $clientes = new ClientesModel();
      $datos = [
        'cliente_id'=>$this->request->getVar('txtId'),
        'nombre'=>$this->request->getVar('txtNombre'),
        'apellido'=>$this->request->getVar('txtApellido'),
        'nit'=>$this->request->getVar('txtNit'),
        'telefono'=>$this->request->getVar('txtTelefono'),
        'correo_electronico'=>$this->request->getVar('txtEmail'),
        'direccion'=>$this->request->getVar('txtDireccion'),
        'contrasenia'=>$this->request->getVar('txtContraseña')
      ];

      $clientes->update($datos['cliente_id'],$datos);

      return redirect()->route('clientes');

    }

  }
