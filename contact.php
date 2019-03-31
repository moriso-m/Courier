<?php
/**
 * Created by PhpStorm.
 * User: moris
 * Date: 24/03/2019
 * Time: 13:14
 */

//include "config.php";
// check if form has been submitted

if (isset($_REQUEST['messageSubmit'])){
    if (isset($_REQUEST['email']) and filter_var($_REQUEST['email'],FILTER_VALIDATE_EMAIL)){
        $email = $_REQUEST['email'];
        if (isset($_REQUEST['message'])){
            $message = $_REQUEST['message'];
            $message = trim($message);
            if (isset($_REQUEST['name'])){
                $message = $message. '<br><br>From  '.$_REQUEST['name'];
            }

            //send email to  the customer care desk of kcador.com
            $to = 'info@than.com';
            $subject = 'Query from customer';
            $from = $email;
            $sendMail = mail($to, $subject, $message, 'From:'.$email);
            if ($sendMail){
                $mailSent = 'Your message has been received on our end. You will get a response in the next 12 hours';
            }
            else{
                $error = 'some issues occurred while trying to contact us. Please try again';
            }
        }
    }
    else{
        $error = 'Please provide a valid email address';
    }
}

?>
 <!DOCTYPE html>
<html>
<head>
<?php
    include "links.php";
?>
    <title>Page Title</title>

</head>
<body class="container">
<?php
include "header.php";
?>
<div style="background: url('images/background/gravel.png') fixed;" id="main-content">
    <?php
    if (isset($error)) {

        ?>
        <div class="alert alert-danger container">
            <a href="#" data-dismiss="alert" class="close">&times;</a>
            <em><?php echo $error;?></em>
        </div>
        <?php
    }
    if (isset($mailSent)) {
        ?>
        <div class="alert alert-danger">
            <em><?php echo $mailSent;?></em>
        </div>
        <?php
    }
    
    ?>
    <div id="alert"></div>
    <div class="alert alert-info">
        <div align="center">Your response will be sent to the email address you provide here</div>
    </div>
    <form action="contactform" method='post' class="container">
        <div class='form-group col-lg-6 col-md-6 col-sm-8 col-lg-offset-3 col-md-offset-3 col-sm-offset-2'>
            <label for='Name'>Name:</label>
            <input type='text' Name='name' class='form-control'>
        </div>
        <div class='form-group col-lg-6 col-md-6 col-sm-8 col-md-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-2'>
            <label for='email address'><span class="important">*</span>Email address:</label>
            <input type='email' Name='email' class='form-control' required>
        </div>
        <div class='form-group col-lg-6 col-md-6 col-sm-8 col-lg-offset-3 col-md-offset-3 col-sm-offset-2'>
            <label for='message'><span class="important">*</span>message:</label>
            <textarea Name='message' class='form-control' required></textarea>
        </div>
        <div class='form-group col-lg-6 col-md-6 col-sm-12 col-xs-12'>&nbsp;</div>
        <div class='form-group col-lg-6 col-md-6 col-sm-6 col-md-12 col-lg-offset-3 col-md-offset-3'>
            <input type="submit" value="Send message" class="btn btn-success col-lg-6 col-md-6 col-sm-6 col-md-12 col-lg-offset-3 col-md-offset-3"> 

        </div>
        <!-- <button type="submit" name='messageSubmit' class="btn btn-success col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-offset-4 col-md-offset-4">
            <i class="fa fa-check"></i>
            <b>Send message</b>
        </button> -->
    </form>
</div>

    <?php
    include "footer.php";
    ?>
    <script type="text/javascript" src="main.js"></script>
</body>
</html>