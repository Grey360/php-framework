<?php
return array("routes" => array(
    "/" => array(
        "action" => "AppController",
        "call" => "OSS".DS."controller".DS."AppController.php",
        "view" => "OSS".DS."view".DS."templates".DS."index.php"
    ),
    "/user/list" => array(
        "action" => "UserController",
        "call" => "User".DS."controller".DS."UserController.php",
        "view" => "User".DS."view".DS."listUser.php"
    ),
    "/user/add" => array(
        "add" => "UserController",
        "call" => "User".DS."controller".DS."UserController.php",
        "view" => "User".DS."view".DS."addUser.php"
    ))
);