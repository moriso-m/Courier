<?php
/**
 * Created by PhpStorm.
 * User: moris
 * Date: 19/01/2019
 * Time: 09:54
 */

//this file will initialize sessions
if (session_start() == false){
    die('error starting session');
}
//initiate state of the website
$_SESSION['state']=$state;