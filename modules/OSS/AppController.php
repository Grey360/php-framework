<?php
/**
 * Created by PhpStorm.
 * User: gpetemoy
 * Date: 14/05/2018
 * Time: 15:22
 */

class AppController extends Root\System\Controller
{
    public function __construct($template) {
        $this->render($template);
    }
}