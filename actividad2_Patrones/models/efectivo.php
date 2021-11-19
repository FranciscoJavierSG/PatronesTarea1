<?php

namespace models;

require_once 'pago.php';

use models\pago;

/**
 * Efectivo
 */

class efectivo extends pago {
    public $tipoMoneda;

    /**
     * __construct
     *
     * @param  mixed $tipoMoneda
     * @param  mixed $importe
     * @return void
     */
    public function __construct($tipoMoneda, $importe) {
        parent::__construct($importe);
        $this->tipoMoneda = $tipoMoneda;
    }

    public function getTipoMoneda() {
        return $this->tipoMoneda;
    }

    public function setTipoMoneda($tipoMoneda) {
        $this->tipoMoneda = $tipoMoneda;
    }

    /**
     * mostrar
     *
     * @return void
     */
    public function mostrar() {
        return json_encode(array(
            'importe' => parent::getImporte(),
            'tipoMoneda' => $this->getTipoMoneda(),

        ), JSON_PRETTY_PRINT);
    }
}
