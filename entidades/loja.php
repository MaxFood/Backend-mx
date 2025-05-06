<?php

Class loja {

    private $idLoja;
    private $nome;
    private $email;
    private $senha;
    private $Cnpj;
    private $endereco;
    private $telefone;  

    function getIdLoja()
    {
        return $this->idLoja;
    }   
        function setidLoja($idLoja): void
    {
        $this->idLoja = $idLoja;
    }   
    function getnome($nome)
    {
        return $this->$nome;
    }
    function setnome($nome): void
    {
        $this->$nome = $nome;
    }
    function getemail($email)
    {
        return $this->$email;
    }       
    function setemail($email): void
    {
        $this->$email = $email;
    }
    function getsenha($senha)
    {
        return $this->$senha;
    }
    function setsenha($senha): void
    {
        $this->$senha = $senha;
    }
    function getCnpj($Cnpj)
    {
        return $this->$Cnpj;
    }
    function setCnpj($Cnpj): void
    {
        $this->$Cnpj = $Cnpj;
    }
    function getendereco($endereco)
    {
        return $this->$endereco;
    }
    function setendereco($endereco): void
    {
        $this->$endereco = $endereco;
    }
    function gettelefone($telefone)
    {
        return $this->$telefone;
    }
    function settelefone($telefone): void
    {
        $this->$telefone = $telefone;
    }
    function loja ($idLoja, $nome, $email, $senha, $Cnpj, $endereco, $telefone) {
        $this->idLoja = $idLoja;
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->Cnpj = $Cnpj;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
    }













}