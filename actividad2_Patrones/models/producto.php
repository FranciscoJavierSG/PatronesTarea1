<?php
namespace models;

/**
 * Producto
 */
class Producto{
    public $producto;
    public $peso; 
    public $stock;

    /**
     * __construct
     *
     * @param  mixed $producto
     * @param  mixed $peso
     * @param  mixed $stock
     * 
     * 
     * @return void
     */

     public function __construct($producto, $peso, $stock){
         $this->producto=$producto;
         $this->peso=$peso;
         $this->stock=$stock;
     }

     public function getProducto(){
         return $this->producto;
     }
     public function getPeso(){
         return $this->peso;
     }
     public function getStock(){
        return $this->stock;
    }

     public function precioCantidad(){
         //desarrollar logica de funcion
     }
     public function obtenerPeso(){
        //desarrollar logica de funcion
    }
     public function mostrar(){
         return json_encode(array(
             'producto' => $this->producto,
             'peso' => $this->peso,
             'stock' => $this->stock,
             'precioCantidad' => $this->precioCantidad(),
             'obtenerPeso' => $this->obtenerPeso()
         ), JSON_PRETTY_PRINT);
     }
}