<?php
/**
 * Created by PhpStorm.
 * User: moriso
 * Date: 30/03/2019
 * Time: 10:59
 */

require_once "config.php";

//check whether method is post
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$country='';
	$location='';
	$name = '';
	if (isset($_REQUEST['phone'],$_REQUEST['email'])){
		$phone = $_REQUEST['phone'];
		$email = $_REQUEST['email'];
		if (!empty($_REQUEST['country'])){
			$country = $_REQUEST['country'];
		}
		if (!empty($_REQUEST['location'])){
			$location = $_REQUEST['location'];
		}
		if (!empty($_REQUEST['name'])){
			$name = $_REQUEST['name'];
		}
		if(preg_match('/^\d{10}$/', $phone)){
			if (filter_var($email,FILTER_VALIDATE_EMAIL)){
				$to = "sales@ethan.com";
				$subject = "COURIER ORDER";
				$message = "Country :". $country."\r\nLocation : ". $location."\r\nPhone number : ".$phone."\r\nEmail :".$email ;
				// if(mail($to,$subject,$message,"From:\r\n")){
					$sql = 'INSERT INTO  `ethan`.`orders`(`name`,`phone`,`email`,`country`,`location`,`date`)'.
							'VALUES("'.$name.'","'.$email.'","'.$phone.'","'.$country.'","'.$location.'","'.time().'")';

					$query = mysqli_query($conn,$sql);
					if (mysqli_error($conn)){
						require "errorLog.php";
					}
					else{
						if (mysqli_affected_rows($conn)>0){
							echo '<div class="alert alert-success">
									<a href="#" class="close" data-target="alert">&times</a>
									<em>Your order has been successfully received.>We will communicate shortly to you</em>
								</div>';
						}
						else{
							echo "try again..We were unable to receive your request";
						}
					}
				// }
			}
			else {
				echo "invalid email address";
			}
		}
		else{
			echo "invalid phone number";
		}
	}
	else{
		echo '<div class="alert alert-danger">Please fill out the fields first</div>';
	}
}