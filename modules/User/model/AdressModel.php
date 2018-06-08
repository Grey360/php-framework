<?php

/**
 * This class is the Address model, designed to represent
 * the matching data in our **frameworkphp** database.
 */
class AddressModel extends Root\System\Model {

    /**
     * Gets the addresses from our **frameworkphp** database.
     */
    public function getAddresses() {
        return self::getModel("addresses", "*");
    }

    /**
     * SELECT * FROM addresses, users WHERE users.id = addresses.user
     */
    public function getUsersAddresses() {
        return self::getModel("addresses, users WHERE users.id = addresses.user", "*");
    }
}