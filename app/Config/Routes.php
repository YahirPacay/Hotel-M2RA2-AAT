<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//cliente
$routes->get('/clientes','ClientesController::index');
$routes->get('/nuevo_cliente','ClientesController::nuevoCliente');
$routes->post('/agregar_cliente','ClientesController::agregarCliente');
$routes->get('/eliminar_cliente/(:num)','ClientesController::eliminarCliente/$1');
$routes->get('/buscar_cliente/(:num)','ClientesController::buscarCliente/$1');
$routes->post('/modificar_cliente','ClientesController::modificarCliente');

//reservaciones
$routes->get('/reservaciones','ReservacionesController::index');
$routes->get('/nueva_reservacion','ReservacionesController::nuevaReservacion');
$routes->post('/agregar_reservacion','ReservacionesController::agregarReservacion');
$routes->get('/eliminar_reservacion/(:num)','ReservacionesController::eliminarReservacion/$1');
$routes->get('buscar_reservacion/(:num)','ReservacionesController::buscarReservacion/$1');
$routes->post('/modificar_reservacion','ReservacionesController::modificarReservacion');

//hoteles
$routes->get('/hoteles','HotelesController::index');
$routes->get('/nuevo_hotel','HotelesController::nuevoHotel');
$routes->post('/agregar_hotel','HotelesController::agregarHotel');
$routes->get('/eliminar_hotel/(:num)','HotelesController::eliminarHotel/$1');
$routes->get('/buscar_hotel/(:num)','HotelesController::buscarHotel/$1');
$routes->post('/modificar_hotel','HotelesController::modificarHotel');