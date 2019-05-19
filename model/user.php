<?php

class User
{

    private $id;
    private $login;
    private $senha;

    function __construct(){ }

    function setID($id){$this->id = $id;}
    function setLogin($login){$this->login = $login;}
    function setSenha($senha){$this->senha = $senha;}

    function getID(){return $this->id;}
    function getLogin(){return $this->login;}
    function getSenha(){return $this->senha;}
    

}
