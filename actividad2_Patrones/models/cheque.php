<?php

namespace models;

require_once 'pago.php';

use models\pago;

/**
 * Cheque
 */

class cheque extends pago {
    private $nombre;
    private $banco;

    /**
     * __construct
     *
     * @param  mixed $nombre
     * @param  mixed $banco
     * @param  mixed $importe
     * @return void
     */

    public function __construct($nombre, $banco, $importe) {
        parent::__construct($importe);
        $this->nombre = $nombre;
        $this->banco = $banco;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getBanco() {
        return $this->banco;
    }

    public function setBanco($banco) {
        $this->banco = $banco;
    }

    /**
     * mostrar
     *
     * @return void
     */
    public function mostrar() {
        return json_encode(array(
            'importe' => parent::getImporte(),
            'nombre' => $this->getNombre(),
            'banco' => $this->getBanco(),

        ), JSON_PRETTY_PRINT);
    }
}
