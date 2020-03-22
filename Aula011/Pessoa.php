<?php
abstract class Pessoa {
    //Atributos
    protected $nome;
    protected $idade;
    protected $sexo;
    public final function fazerAniversario(){
        $this->idade ++;
    }
    function getNome() {
        return $this->nome;
    }

    function getIdade() {
        return $this->idade;
    }

    function getSexo() {
        return $this->sexo;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }
    
}
