<?php
require_once 'Animal.php';
class Ave extends Animal{
    private $corPena;
    public function alimentar() {
        echo '<p>Comendo Frutas</p>';
    }

    public function emitirSom() {
        echo '<p>Som de Ave</p>';
    }

    public function locomover() {
        echo '<p>Voando</p>';
    }
    function getCorPena() {
        return $this->corPena;
    }
    function fazerNinho(){
        echo '<p>Construíndo um Ninho</p>';
    }
    function setCorPena($corPena) {
        $this->corPena = $corPena;
    }


}
