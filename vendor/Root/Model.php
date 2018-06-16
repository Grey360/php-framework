<?php

namespace Root\System;

/**
 * This class is the model.
 */
class Model {

    public static $db;
    
    /**
     * This constructor initialises the database variable
     */
    public function __contruct() {
        self::$db = Database::getDB();
    }

    public static function getModel($table, $column) {
        // In case the $db hasn't been initialised
        self::$db = Database::getDB();
        
        // We get the variables to make the statement
        $prepare = self::$db->prepare("SELECT $column FROM $table");

        // We query the database
        $prepare->execute();

        // We put the results in an array that we return
        return $prepare->fetchAll();
    }

    /**
     * Inserts data into tables by columns.
     * @param columns An array of column names
     * @param values An array of values matching the columns
     */
    public static function insertInto($table, $columns, $values)
    {
        self::$db = Database::getDB();

        $array = array();
        for($i=0; $i<sizeof($columns); $i++){
            array_push($array, "?");
        }

        $statement = "INSERT INTO $table ("
        . join(',', $columns) 
        . ") VALUES(" 
        . join(',', $array) 
        . ")";

        $prepare = self::$db->prepare($statement);

        $prepare->execute($values);
    }

    public static function testGetModel() {
        $prepare = self::$db->prepare("SELECT * FROM users");
        $prepare->execute();
        //while($res = $this->fetch(\PDO::FETCH_ASSOC)){
        foreach ($prepare->fetchAll() as $key => $value) {
            Root\System\Controller::consoleLog($value);
        }
    }
}