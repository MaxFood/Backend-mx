<?php

Class user {

    private $idUsuario;
    private $nome;
    private $email;
    private $senha;
    private $dataNascimento;
    private $cpf;
    private $telefone;  
    private $endereco;
    private $cep;
    private $cidade;
    private $estado;

    function getsenha($senha)
    {
        return $this->$senha;
    }
    function setsenha($senha)
    {
        $this->$senha = $senha;
    }
    function getdatNascimento($dataNascimento)
    {
        return $this->$dataNascimento;
    }
    function setdataNascimento($dataNascimento)
    {
        $this->$dataNascimento = $dataNascimento;
    }

    function getcpf($cpf)
    {
        return $this->$cpf;
    }
    function setcpf($cpf): void
    {
        $this->$cpf = $cpf;
    }       

    function gettelefone($telefone)
    {
        return $this->$telefone;
    }           
    function settelefone($telefone): void
    {
        $this->$telefone = $telefone;
    }
    function getendereco($endereco)
    {
        return $this->$endereco;
    }
    function setendereco($endereco)
    {
        $this->$endereco = $endereco;
    }   
    function getcep($cep)
    {
        return $this->$cep;
    }
    function setcep($cep)
    {
        $this->$cep = $$cep;
    }
    function getcidade($cidade)
    {
        return $this->$cidade;
    }
    function setcidade($cidade)
    {
        $this->$cidade =$cidade;
    }
    function getestado($estado)
    {
        return $this->$estado;
    }
    function setestado($estado)
    {
         $this->$estado = $estado;
    }

    function getIdUsuario()
    {
        return $this->idUsuario;
    }

    function getNome()
    {
        return $this->nome;
    }

    function getEmail()
    {
        return $this->email;
    }


    function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }

}