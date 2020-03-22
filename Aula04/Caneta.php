<?php
class Caneta {
    public $modelo;
    private $ponta;
    private $tampada;
    private $cor;
    function __construct($modelo, $ponta, $tampada, $cor) {
        $this->modelo = $modelo;
        $this->ponta = $ponta;
        $this->tampada = $tampada;
        $this->cor = $cor;
    }
    function getModelo() {
        return $this->modelo;
    }

    function getPonta() {
        return $this->ponta;
    }

    function getTampada() {
        return $this->tampada;
    }

    function getCor() {
        return $this->cor;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setPonta($ponta) {
        $this->ponta = $ponta;
    }

    function setTampada($tampada) {
        $this->tampada = $tampada;
    }

    function setCor($cor) {
        $this->cor = $cor;
    }

        /*    public function Caneta(){
        $this->cor = "Azul";
        $this->tampada = true;
    }*/

}
