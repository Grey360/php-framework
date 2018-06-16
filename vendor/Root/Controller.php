<?php
/**
 * Created by PhpStorm.
 * User: gpetemoy
 * Date: 14/05/2018
 * Time: 15:16
 */
namespace Root\System;

/**
 * This class is our main controller,
 * all other controller are children of this class.
 */
abstract class Controller {

    private $template;

    /**
     * This constructor initialises our template variable in any case.
     */
    public function __construct($template = "index.php")
    {
        $this->template = $template;
    }

    /**
     * This method allows us to render the HTML.
     */
    public function render()
    {
        if(isset($this->template)){
            require_once join(DS, array(TEMPLATEPATH, "Header.php"));
            include_once join(DS, array(MODPATH, $this->template));
            require_once join(DS, array(TEMPLATEPATH, "Footer.php"));
        } else {
            throw "This template does not exist!";
        }
    }

    /**
     * @param object An object.
     * Logs in the browser console.
     */
    public static function consoleLog($object)
    {
        if(\is_array($object)){
            foreach ($object as $key => $value) {
                $tmpKey = json_encode($key);
                $tmpValue = json_encode($value);
                echo "<script> console.log(". $tmpKey . "+ \" => \" + " . $tmpValue . "); </script>";
            }
        } else {
            echo "<script> console.log('$object'); </script>";
        }
    }

    /**
     * Abstract GET method management function
     * to be implemented by the children controllers.
     */
    public abstract function doGET();

    /**
     * Abstract POST method management function
     * to be implemented by the children controllers.
     */
    public abstract function doPOST();
}