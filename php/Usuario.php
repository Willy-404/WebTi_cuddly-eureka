<?php
class Usuario{
    public $id;
    public $nome;
    public $email;
    public $senha;

    public function __construct(){

    }

    public function setNome($lnome){
        $this->nome=$lnome;
    }
}