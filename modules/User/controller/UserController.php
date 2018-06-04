<?php

class UserController extends Root\System\Controller {

    public function getAll(){
        $userModel = new UserModel();
        $res = $userModel->getUsers();
    }    
}