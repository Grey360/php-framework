<?php

/**
 * This class is the User model, designed to 
 * represent the data in our **frameworkphp** database.
 */
class UserModel extends Root\System\Model {

    /**
     * Gets the users' table data from our **frameworkphp** database.
     */
    public function getUsers(){
        return self::getModel("users", "*");
    }
}