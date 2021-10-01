<?php
namespace models;

require_once 'pago.php';
use models\pago;

/**
 * Tarjeta
 */

class tarjeta extends pago
{
    private $numero;
    private $caducidad;
    private $tipo;
    
    /**
     * __construct
     *
     * @param  mixed $numero
     * @param  mixed $caducidad
     * @param  mixed $tipo
     * @param  mixed $importe
     * @return void
     */
    public function __construct($numero, $caducidad, $tipo, $importe)
    {
        parent::__construct($importe);
        $this->numero = $numero;
        $this->caducidad = $caducidad;
        $this->tipo = $tipo;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero=$numero;
    }

    public function getCaducidad()
    {
        return $this->caducidad;
    }

    public function setCaducidad($caducidad)
    {
        $this->caducidad=$caducidad;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo=$tipo;
    }
    
    
    /**
     * mostrar
     *
     * @return void
     */
    public function mostrar()
    {
        return json_encode(array('importe' => parent::getImporte(),
            'numero' => $this->getNumero(),
            'caducidad' => $this->getCaducidad(),
            'tipo' => $this->getTipo(),

        ), JSON_PRETTY_PRINT);
    }

}