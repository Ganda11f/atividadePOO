<?php
 class Retangulo {
    private $ladoMaior;
    private $ladoMenor;
    public function setLadoMaior($maior){
        $this->ladoMaior = $maior;
    }
    public function setLadoMenor($menor){
        $this->ladoMenor = $menor;
    }
    public function calcularArea(){
        $resultado = $this->ladoMaior * $this->ladoMenor;
        return $resultado;
    }
 }