<?php
require_once 'Animal.php';
class Peixe extends Animal{
    private $corEscama;
    public function alimentar() {
        echo '<p>Comendo Substancias</p>';
    }

    public function emitirSom() {
        echo '<p>Som de peixe</p>';
    }

    public function locomover() {
        echo '<p>Nadando</p>';
    }
    function getCorEscama() {
        return $this->corEscama;
    }
    function soltarBolha(){
        echo '<p>Soltou uma bolha</p>';
    }
    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }


}
