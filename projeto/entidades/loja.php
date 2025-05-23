<?php

class Loja {

    private $idLoja;
    private $nome;
    private $email;
    private $senha;
    private $cnpj;
    private $endereco;
    private $telefone;  
    private $complemento;
    private $numero;
    private $cep;
    private $cidade;
    private $estado;

    public function __construct($idLoja, $nome, $email, $senha, $cnpj, $endereco, $telefone) {
        $this->idLoja = $idLoja;
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->cnpj = $cnpj;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
    }

    public function getIdLoja() {
        return $this->idLoja;
    }

    public function setIdLoja($idLoja): void {
        $this->idLoja = $idLoja;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha): void {
        $this->senha = $senha;
    }

    public function getCnpj() {
        return $this->cnpj;
    }

    public function setCnpj($cnpj): void {
        $this->cnpj = $cnpj;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco): void {
        $this->endereco = $endereco;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone): void {
        $this->telefone = $telefone;
    }
    public function getComplemento() {
        return $this->complemento;
    }   

    public function setComplemento($complemento): void {
        $this->complemento = $complemento;
    }

    public function getNumero() {
        return $this->numero;
    }
    public function setNumero($numero): void {
        $this->numero = $numero;
    }

    public function getCep() {
        return $this->cep;
    }
    public function setCep($cep): void {
        $this->cep = $cep;
    }
    public function getCidade() {
        return $this->cidade;
    }   
    public function setCidade($cidade): void {
        $this->cidade = $cidade;
    }
    public function getEstado() {
        return $this->estado;
    }
    public function setEstado($estado): void {
        $this->estado = $estado;
    }
    



}
