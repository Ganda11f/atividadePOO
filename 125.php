<?php 
class Aeroporto{
    private $nome;
    private $cidade;
    public function getNome(){
        return $this ->nome;
    }
    public function setNome(){
        $this->nome = $nome;
    }
    public function getCidade(){
        return $this ->cidade;
    }
    public function setCidade(){
        $this->nome = $cidade;
    }
}
?>