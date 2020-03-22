<?php

class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    var $tampada;
    
    public function rabisca(){
        if($this->tampada == true){
            echo "<p>ERRO! NÂO posso rabiscar</p>";
        }else{
        echo "<p>Estou rabiscando!</p>";
        }
    }
    public function tampar(){
        $this->tampada = true;
    }
    public function destampar(){
        $this->tampada = false;
    }
}
