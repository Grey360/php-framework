<?php

class UserModel extends Root\System\Model {

    public function __construct() {
        parent::__construct();
    }

    public function getUsers(){
        $prepare = Root\System\Model::$db->prepare("SELECT * FROM users");
        $result = $prepare->execute();
        return $result;
    }
}