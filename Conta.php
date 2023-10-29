<?php 

class Conta{
    
    private $valor;
    private $gorjeta;



    function setValor($valor){
        $this->valor = $valor;
    }

    function getValor(){
        return $this->valor;
    }

    function setGorjeta($gorjeta){
        $this->gorjeta = $gorjeta;
    }

    function getGorjeta(){
        return $this->gorjeta;
    }
   
}




?>