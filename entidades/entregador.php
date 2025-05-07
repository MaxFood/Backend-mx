<?php

class Entregador extends User {
    private $veiculo;
    private $status;

    private $placa;

    public function entregador($id, $nome, $email, $senha, $telefone, $veiculo, $status) {
        parent:: __construct($id, $nome, $email, $senha, null, null, $telefone, null, null, null, null); // ajusta conforme a classe User
        $this->veiculo = $veiculo;
        $this->status = $status;
    }

    public function getVeiculo() {
        return $this->veiculo;
    }

    public function setVeiculo($veiculo) {
        $this->veiculo = $veiculo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }
    public function getPlaca() {
        return $this->placa;
    }

    public function setPlaca($placa) {
        $this->status = $placa;
    }



}
?>
