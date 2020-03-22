<?php

class Caneta {
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;
    
    function rabisca(){
        if($this->tampada == true){
            echo "<p>ERRO! NÂO posso rabiscar</p>";
        }else{
        echo "<p>Estou rabiscando!</p>";
        }
    }
    function tampar(){
        $this->tampada = true;
    }
    function destampar(){
        $this->tampada = false;
    }
}
