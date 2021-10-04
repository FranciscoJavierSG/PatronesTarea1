<?php

namespace models;

/**
 * Detalle Orden
 */

class DetalleOrden {
    public $cantidad;
    public $precio;
    public $impuesto;

    /**
     * __construct
     *
     * @param  mixed $cantidad
     * @param  mixed $precio
     * @param  mixed $impuesto
     * 
     * 
     * @return void
     */

    public function __construct($cantidad, $precio, $impuesto) {
        $this->cantidad = $cantidad;
        $this->precio = $precio;
        $this->impuesto = $impuesto;
    }

    public function getCantidad() {
        return $this->cantidad;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getImpuesto() {
        return $this->impuesto;
    }

    public function calcularSubTotal() {
        $subTotal = ($this->cantidad * $this->precio) + $this->impuesto;
        return $subTotal;
    }

    public function mostrar() {
        return json_encode(array(
            'cantidad' => $this->cantidad,
            'precio' => $this->precio,
            'impuesto' => $this->impuesto,
            'total' => $this->calcularSubTotal()
        ), JSON_PRETTY_PRINT);
    }
}
