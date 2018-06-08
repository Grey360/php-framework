<?php

class AddressModel extends Root\System\Model {

    public function getAddresses(){
        return self::getModel("addresses", "*");
    }
}