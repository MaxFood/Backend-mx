<?php

class Entregador {
    // Atributos privados
    private $id;
    private $nome;
    private $telefone;
    private $veiculo;
    private $status;

    public function __construct($id, $nome, $telefone, $veiculo, $status) {
        $this->id = $id;
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->veiculo = $veiculo;
        $this->status = $status;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
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

    public function exibirInformacoes() {
        echo "ID: " . $this->getId() . "\n";
        echo "Nome: " . $this->getNome() . "\n";
        echo "Telefone: " . $this->getTelefone() . "\n";
        echo "Veículo: " . $this->getVeiculo() . "\n";
        echo "Status: " . $this->getStatus() . "\n";
    }
}
?>