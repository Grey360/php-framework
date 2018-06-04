<?php

class UserModel extends Model {

    public $db;

    function __construct() {
        parent();
        $this->db = Model::$db;
    }

    public function getUsers(){
        $prepare = $this->db->prepare("SELECT * FROM users");
        $result = $prepare->execute();
        return $result;
    }
}