<?php
abstract class Animal {
    protected  $peso;
    protected $idade;
    protected $menbros;
    abstract function locomover();
    abstract function alimentar();
    abstract function emitirSom();
    
    function getPeso() {
        return $this->peso;
    }

    function getIdade() {
        return $this->idade;
    }

    function getMenbros() {
        return $this->menbros;
    }

    function setPeso($peso) {
        $this->peso = $peso;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setMenbros($menbros) {
        $this->menbros = $menbros;
    }


}
