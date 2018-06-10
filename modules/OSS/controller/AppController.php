<?php
/**
 * Created by PhpStorm.
 * User: gpetemoy
 * Date: 14/05/2018
 * Time: 15:22
 */

class AppController extends Root\System\Controller
{
    public function doGET() {
        Root\System\Controller::consoleLog($_GET);
    }

    public function doPOST() {
        Root\System\Controller::consoleLog($_POST);
    }
}