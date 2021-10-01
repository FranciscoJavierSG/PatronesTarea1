<?php

require_once 'models/cheque.php';
require_once 'models/cliente.php';
require_once 'models/detalle_orden.php';
require_once 'models/efectivo.php';
require_once 'models/pago.php';
require_once 'models/pedido.php';
require_once 'models/producto.php';
require_once 'models/tarjeta.php';

use models\cheque;
use models\cliente;
use models\detalle_orden;
use models\efectivo;
use models\pago;
use models\pedido;
use models\producto;
use models\tarjeta;

//nuevo cheque
$nuevoCheque = new cheque('Antonio', 'Banco Estado', 28);
echo "Cheque : <br>";
echo $nuevoCheque->mostrar();
echo "<br>";
//nuevo efectivo
$nuevoEfectivo = new efectivo('clp', 28);
echo "<br> Efectivo : <br>";
echo $nuevoCliente->mostrar();
echo "<br>";
//nuevo tarjeta
$nuevoTarjeta = new tarjeta('6543217654', '08-2025', 'credito', 28);
echo "<br> Tarjeta : <br>";
echo $nuevoTarjeta->mostrar();
echo "<br>";

