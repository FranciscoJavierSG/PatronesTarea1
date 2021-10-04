<?php

namespace models;

/**
 * Producto
 */
class Producto {
    public $producto;
    public $peso;
    public $stock;
    public $precio;

    /**
     * __construct
     *
     * @param  mixed $producto
     * @param  mixed $peso
     * @param  mixed $stock
     * @param  mixed $precio
     * 
     * @return void
     */

    public function __construct($producto, $peso, $stock, $precio) {
        $this->producto = $producto;
        $this->peso = $peso;
        $this->stock = $stock;
        $this->precio = $precio;
    }

    public function getProducto() {
        return $this->producto;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getStock() {
        return $this->stock;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function precioCantidad() {
        $precioCantidad = $this->precio * $this->stock;
        return $precioCantidad;
    }

    public function obtenerPeso() {
        return $this->peso;
    }

    public function mostrar() {
        return json_encode(array(
            'producto' => $this->producto,
            'peso' => $this->peso,
            'stock' => $this->stock,
            'precio' => $this->precio,
            'precioCantidad' => $this->precioCantidad(),
            'obtenerPeso' => $this->obtenerPeso()
        ), JSON_PRETTY_PRINT);
    }
}
