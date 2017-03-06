<?php
/**
 * Created by PhpStorm.
 * User: emiller20
 * Date: 3/6/17
 * Time: 11:20 AM
 */

namespace App\Http\Controllers;


class WelcomeController{
    public function welcome(){
        return "<h1>Howdy!</h1>";
    }
}