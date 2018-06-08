<?php

class UserModel extends Root\System\Model {

    public function getUsers(){
        return self::getModel("users", "*");
    }
}