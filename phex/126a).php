<?php 
class Quadrado
{
    private $lado;
    public function setLado ($lado){
        $this->lado=$lado;
    }
    public function calculaArea(){
        $resultado = $this->lado * 4;
        return $resultado;
    }
}

?>