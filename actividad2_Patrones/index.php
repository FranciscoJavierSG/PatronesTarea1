<?php

require_once 'models/cheque.php';
require_once 'models/cliente.php';
require_once 'models/detalle_orden.php';
require_once 'models/efectivo.php';
require_once 'models/pedido.php';
require_once 'models/producto.php';
require_once 'models/tarjeta.php';

use models\cheque;
use models\cliente;
use models\detalle_orden;
use models\DetalleOrden;
use models\efectivo;
use models\pedido;
use models\producto;
use models\tarjeta;

//Nuevo cliente
$nuevoCliente = new cliente('Felipe', 'Chillán');
echo "Cliente: <br>";
echo $nuevoCliente->mostrar();
echo "<br>";

//Nuevo cheque
$nuevoCheque = new cheque('Cristofer', 'Banco Estado', 28);
echo "Cheque: <br>";
echo $nuevoCheque->mostrar();
echo "<br>";

//Nuevo efectivo
$nuevoEfectivo = new efectivo('CLP', 28);
echo "Efectivo: <br>";
echo $nuevoCliente->mostrar();
echo "<br>";

//Nueva tarjeta
$nuevoTarjeta = new tarjeta('6543217654784425', '08-2025', 'Visa', 28);
echo "Tarjeta: <br>";
echo $nuevoTarjeta->mostrar();
echo "<br>";

//Nuevo producto
$nuevoProducto = new producto('Jabón', 0.5, 50, 450);
echo "Producto: <br>";
echo $nuevoProducto->mostrar();
echo "<br>";

//Nuevo detalle orden
$nuevoDetalleOrden = new DetalleOrden(3, 1350, 150.0);
echo "Detalle Orden: <br>";
echo $nuevoDetalleOrden->mostrar();
echo "<br>";

echo "El subtotal de la orden es: <br>";
$nuevoDetalleOrden->calcularSubTotal();

//Nuevo pedido
$nuevoPedido = new Pedido("24-12-2021", "Pagado");
echo "Pedido: <br>";
echo $nuevoPedido->mostrar();
echo "<br>";