<?php
namespace models;

/**
 * Pago
 */
class Pago{
    public $importe;
    

    /**
     * __construct
     *
     * @param  mixed $producto
     * 
     * 
     * @return void
     */

     public function __construct($importe){
         $this->importe=$importe;
         
     }

     public function getImporte(){
         return $this->importe;
     }
     
}