<?php
/**
 * Created by PhpStorm.
 * User: moris
 * Date: 19/01/2019
 * Time: 11:17
 */

/**incase of errors, dump errors to log.txt
 * @params logFile = log file
 * */

if ($_SESSION['state'] == 'debug'){
	echo 'Request failed '.mysqli_error($conn);
}
else {
	echo'something went wrong, please try reloading the page';
	$logFile = fopen( __DIR__.'/log.txt', 'a+' ) or die( 'internal error occurred, please reloading later' );
	$content = mysqli_error( $conn ) . ' PAGE =>' . $_SERVER['PHP_SELF'] . ' ' . date( 'd/m/Y H:i:s a' ) . "\r\n";
	fwrite( $logFile, $content );
	fclose( $logFile );
}