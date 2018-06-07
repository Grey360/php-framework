<?php

class UserController extends Root\System\Controller {

    // function __construct(){
    //     $this->render();
    // }

    public function getAll(){
        $userModel = new UserModel();
        $res = $userModel->getUsers();
        $userView = include_once join(DS, array("view", "userView.php"));
        $this->render($userView);
    }    
}