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

    /**
     * Gets only one user according to surname and firstname.
     * @param surname Surname.
     * @param firstname Firstname.
     */
    public function getUser($surname, $firstname)
    {
        return self::getModel("users WHERE firstname = '$firstname' AND surname = '$surname'", "*");
    }
}