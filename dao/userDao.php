<?php

class UserDao
{

    private $db;
    private $usuarios = [];

    function __construct(){ 
        $this->db = new Database();
    }

    public function save($user){
        $this->usuarios[] = array($user);
        return  sizeof($this->usuarios) > 0 ? true: false;
    }

    public function lista(){
        return json_encode($this->usuarios);
    }


    public function isExisteUser($user){

        
        $this->usuarios[] = array();
    }
}
