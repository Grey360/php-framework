<?php
define(DS, DIRECTORY_SEPARATOR);
return array("routes" => 
    array("/" => array(
        "call" => "..".DS."vendor".DS."Root".DS."Controller.php"
        )
    ),
    array("/user/list" => array(
        "action" => "list",
        "call" => "User".DS."controller".DS."UserController.php"
        )
    ),
    array("user/add" => array(
        "add" => "add",
        "call" => "User".DS."controller".DS."userController"
    ))
);