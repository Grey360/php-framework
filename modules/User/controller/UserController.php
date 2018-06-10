<?php

/**
 * The User controller to manage incoming requests.
 */
class UserController extends Root\System\Controller {

    private $model;

    /**
     * Default behaviour.
     */
    public function doGet() {
        Root\System\Controller::consoleLog("GET in UserController.");
    }

    /**
     * Creates a new user.
     */
    public function doPost() {
        $this->model = new UserModel();

        if(sizeof($_POST) === 6){
            // Insertion in the users table.
            $usersColumns = array("surname", "firstname");
            $usersValues = array($_POST["surname"], $_POST["firstname"]);
            $this->model->insertInto("users", $usersColumns, $usersValues);

            // We get the user we just created to get their id.
            $user = $this->model->getUser($_POST["surname"], $_POST["firstname"])[0];

            // Insertion in the addresses table.
            $addressesColumns = array("user", "street", "number", "country", "city");
            $addressesValues = array($user["id"], $_POST["street"], $_POST["number"], $_POST["country"], $_POST["city"]);
            $this->model->insertInto("addresses", $addressesColumns, $addressesValues);
        }
    }
}