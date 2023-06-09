<?php
class Conta {
    private $titulo;
    private $banco;
    private $saldo;

    public function depositar($valor) {
        $this->saldo += $valor;
    }

    public function sacar($valor) {
        if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
        } else {
            echo "Saldo insuficiente.";
        }
    }

    public function getSaldo() {
        return $this->saldo;
    }
}
