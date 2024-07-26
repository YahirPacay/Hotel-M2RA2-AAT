<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\HotelesModel;
use CodeIgniter\HTTP\ResponseInterface;

class HotelesController extends BaseController
{
    public function index()
    {
        $hoteles = new HotelesModel();
        $datos['datos'] = $hoteles->findAll();
        // print_r($datos);
        return view('hoteles', $datos);
    }

    public function nuevoHotel()
    {
        return view('nuevo_hotel');
    }


    public function agregarHotel()
    {
        $hoteles = new HotelesModel();
        $datos = [
            'hotel_id' => $this->request->getVar('txtHotelId'),
            'nombre' => $this->request->getVar('txtNombre'),
            'correoelectronico' => $this->request->getVar('txtEmail'),
            'telefono' => $this->request->getVar('txtTelefono'),
            'direccion' => $this->request->getVar('txtDireccion'),
            'ciudad_id' => $this->request->getVar('txtCiudadId'),
            'categoria_id' => $this->request->getVar('txtCategoriaId'),
            'usuario_id' => $this->request->getVar('txtUsuarioId')
        ];

        $hoteles->insert($datos);
        // print_r($datos);
        return redirect()->route('hoteles');
    }
    public function eliminarHotel($id = null)
    {
        $hoteles = new HotelesModel();
      //  print_r($id);
        $hoteles->delete($id);
        return redirect()->route('hoteles');
    }

    public function buscarHotel($id = null)
    {
        $hoteles = new HotelesModel();
        $datos['datos']=$hoteles->where('hotel_id',$id)->first();
       // print_r($datos);
       return view('frm_modificar_hotel',$datos);
    }


    public function modificarHotel()
    {
        $hoteles = new HotelesModel();
        $datos = [
            'hotel_id' => $this->request->getVar('txtHotelId'),
            'nombre' => $this->request->getVar('txtNombre'),
            'correoelectronico' => $this->request->getVar('txtEmail'),
            'telefono' => $this->request->getVar('txtTelefono'),
            'direccion' => $this->request->getVar('txtDireccion'),
            'ciudad_id' => $this->request->getVar('txtCiudadId'),
            'categoria_id' => $this->request->getVar('txtCategoriaId'),
            'usuario_id' => $this->request->getVar('txtUsuarioId')
        ];
        $hoteles->update($datos['hotel_id'],$datos);
        return redirect()->route('hoteles');
       

        

    }

}
