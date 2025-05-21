<?php

class User {

    private $idUsuario;
    private $nome;
    private $email;
    private $senha;
    private $dataNascimento;
    private $cpf;
    private $telefone;  
    private $endereco;
    private $complemento;
    private $numero;
    private $cep;
    private $cidade;
    private $estado;

    // Getters
    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getDataNascimento() {
        return $this->dataNascimento;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getCep() {
        return $this->cep;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function getEstado() {
        return $this->estado;
    }

    // Setters
    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

    public function getEndereco() {
        return $this->endereco;
    }
    public function getComplemento() {
        return $this->complemento;
    }
    public function getNumero() {
        return $this->numero;
    }
    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function setCep($cep) {
        $this->cep = $cep;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function __construct($idUsuario, $nome, $email, $senha, $dataNascimento, $cpf, $telefone, $endereco, $cep, $cidade, $estado, $complemento, $numero) {
        $this->idUsuario = $idUsuario;
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->dataNascimento = $dataNascimento;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
        $this->cep = $cep;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->complemento = $complemento;
        $this->numero = $numero;
    }
}


