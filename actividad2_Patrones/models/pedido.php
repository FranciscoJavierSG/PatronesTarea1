<?php
namespace models;

/**
 * Pedido
 */
class Pedido{
    public $fecha;
    public $estado; //falta definir el dominio

    /**
     * __construct
     *
     * @param  mixed $fecha
     * @param  mixed $estado
     * 
     * @return void
     */

     public function __construct($fecha, $estado){
         $this->fecha=$fecha;
         $this->estado=$estado;
     }

     public function getFecha(){
         return $this->fecha;
     }
     public function getEstado(){
         return $this->estado;
     }

     public function calcularTotal(){
         //desarrollar logica de funcion
     }
     public function mostrar(){
         return json_encode(array(
             'fecha' => $this->fecha,
             'estado' => $this->estado,
             'total' => $this->calcularTotal()
         ), JSON_PRETTY_PRINT);
     }
}