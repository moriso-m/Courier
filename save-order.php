<?php
/**
 * Created by PhpStorm.
 * User: moriso
 * Date: 30/03/2019
 * Time: 10:59
 */

require_once "config.php";

// check whether method is post
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$country='';
	$description='';
	$name = '';
	if (isset($_REQUEST['phone'],$_REQUEST['from'],$_REQUEST['to'],$_REQUEST['email'])){
		if (!empty($_REQUEST['phone']) and !empty($_REQUEST['from']) and !empty($_REQUEST['to']) and !empty($_REQUEST['email'])) {
		$phone = $_REQUEST['phone'];
		$from = $_REQUEST['from'];
		$to = $_REQUEST['to'];
		$email = $_REQUEST['email'];

		if (!empty($_REQUEST['name'])){
			$name = $_REQUEST['name'];
			
		}
		if (!empty($_REQUEST['description'])){
			$description = $_REQUEST['description'];
		}
	
		if(preg_match('/^\d{10}$/', $phone)){
			if (filter_var($email,FILTER_VALIDATE_EMAIL)){
				$to_email = "sales@ethan.com";
				$subject = "SHIPPING RATES REQUEST";
				$message = "Country :". $country."\r\nFrom : ". $from." To :".$to."
							\r\nPhone number : ".$phone."\r\nEmail :".$email ;
				// if(mail($to,$subject,$message,"From:\r\n")){
					$sql = 'INSERT INTO  `ethan`.`rates_requests`(`name`,`phone`,`email`,`from_location`,`to_location`,`description`,`date`)'.
							'VALUES("'.$name.'","'.$phone.'","'.$email.'","'.$from.'","'.$to.'","'.$description.'","'.time().'")';

					$query = mysqli_query($conn,$sql);
					if (mysqli_error($conn)){
						require "errorLog.php";
					}
					else{
						if (mysqli_affected_rows($conn)>0){
							echo '<div style="color: #3c763d;" class="alert-info">
									<em>Your quotition has been received.We will communicate shortly to you</em>
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
}