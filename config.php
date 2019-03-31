<?php
/**
 * Created by PhpStorm.
 * User: moriso
 * Date: 19/01/2019
 * Time: 08:17
 */

//initialize database
$server='localhost';
$user='root';
$password='';
$db='ethan';
/**  state of the website
 * @var state =debug => 'under development
 * @var state = production =>'hosted and online'
 **/
$state='debug';

$conn=mysqli_connect($server,$user,$password);
if (mysqli_connect_error()){
	if (isset($_SESSION['state']) and $_SESSION['state'] == 'debug'){
		echo 'Connection failed'.mysqli_connect_error();
	}
	echo 'something went wrong, please try reloading the page';
	$logFile= fopen('log.txt','a+') or die('internal error occurred, please reloading later');
	$content=mysqli_connect_error();
	fwrite($logFile,$content);
	fclose($logFile);
}
//select database
mysqli_select_db($conn,$db);
require_once ('init.php');
