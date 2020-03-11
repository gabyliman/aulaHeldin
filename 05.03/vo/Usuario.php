<?php


class Usuario {
    private $id=0;
    private $nome;
    private $email;
    private $tipo;
    private $senha;
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getSenha() {
        return $this->senha;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setNome($nome): void {
        $this->nome = $nome;
    }

    function setEmail($email): void {
        $this->email = $email;
    }

    function setTipo($tipo): void {
        $this->tipo = $tipo;
    }

    function setSenha($senha): void {
        $this->senha = $senha;
    }


}
