<?php

class UserController extends Root\System\Controller {

    private $users;

    function __construct(){
        $this->getAll();
    }

    public function getAll(){
        $userModel = new UserModel();
        $res = $userModel->getUsers();
        foreach ($res as $key => $value) { ?> 
            <div id="users">
                <div id="firstname"> <?php $res["firstname"] ?> </div>
                <div id="surname"> <?php $res["surname"] ?> </div>
            </div>
        <?php }
    }
}