<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ReservacionesModel;
use CodeIgniter\HTTP\ResponseInterface;

class ReservacionesController extends BaseController
{
    public function index()
    {
        $reservaciones = new ReservacionesModel();
        $datos['datos'] = $reservaciones->findAll();
        //print_r($datos);
        return view('reservaciones', $datos);
    }

    public function nuevaReservacion()
    {
        return view('nueva_reservacion');
    }
    public function agregarReservacion()
    {
        $reservaciones = new ReservacionesModel();
        $datos = [
            'reservacion_id' => $this->request->getVar('txtId'),
            'fecha' => $this->request->getVar('txtFecha'),
            'cliente_id' => $this->request->getVar('txtClienteId'),
            'hotel_id' => $this->request->getVar('txtHotelId'),
            'descripcion' => $this->request->getVar('txtDescripcion'),
            'usuario_id' => $this->request->getVar('txtUsuarioId')
        ];
        //  print_r($datos);
        $reservaciones->insert($datos);
        return redirect()->route('reservaciones');
    }
    
    public function eliminarReservacion($id = null)
    {
        //print_r($id);
        $reservaciones = new ReservacionesModel();
        $reservaciones->delete($id);
        return redirect()->route('reservaciones');
    }
    public function buscarReservacion($id=null)
    {
        $reservaciones = new ReservacionesModel();
        $datos['datos'] = $reservaciones->where('reservacion_id',$id)->first();
      //print_r($datos);
      return view('frm_modificar_reservacion',$datos);
    }
    public function modificarReservacion()
    {
        $reservaciones = new ReservacionesModel();
        $datos = [
            'reservacion_id' => $this->request->getVar('txtId'),
            'fecha' => $this->request->getVar('txtFecha'),
            'cliente_id' => $this->request->getVar('txtClienteId'),
            'hotel_id' => $this->request->getVar('txtHotelId'),
            'descripcion' => $this->request->getVar('txtDescripcion'),
            'usuario_id' => $this->request->getVar('txtUsuarioId')
        ];
        $reservaciones->update($datos['reservacion_id'],$datos);
        return redirect()->route('reservaciones');
    }

}
