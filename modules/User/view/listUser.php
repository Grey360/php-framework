
<?php
require_once MODPATH . DS . "User" . DS . "model" . DS . "userModel.php";

$userModel = new UserModel();
$users = $userModel->getUsers();
foreach ($users as $key => $value) { ?> 
    <div id="users">
        <div id="firstname"> <?php $res["firstname"] ?> </div>
        <div id="surname"> <?php $res["surname"] ?> </div>
    </div>
<?php }
