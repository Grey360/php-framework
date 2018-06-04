<?php

class UserModel extends Root\System\Model {

    function __construct() {
        __construct::parent();
    }

    public function getUsers(){
        $prepare = Model::$db->prepare("SELECT * FROM users");
        $result = $prepare->execute();
        return $result;
    }
}