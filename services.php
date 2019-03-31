<?php
/**
 * Created by PhpStorm.
 * User: moriso
 * Date: 29/03/2019
 * Time: 11:29
 */
?>

<!doctype html>
<html lang="en">
<head>
    <?php include "links.php";?>
    <title>Services</title>
</head>
<body>
    <div class="container"  >
        
        <?php
        include "header.php";
        ?>
        <div style="background: url('images/background/gravel.png') fixed;" id="main-content">
            <ul class="breadcrumb">
                <li>
                    <a href="index">Home</a>
                </li>
                <li class="active">Services</li>
            </ul>
            <div class="row" id="services">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="text-center"><b>Our services</b>
                    </h2>
                    <p style="border-bottom:2px solid rgb(153, 51, 153);text-align:center;" class="col-lg-4 col-md-8 col-lg-offset-4">&nbsp;</p>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <img src="images/courier-10.jpg" alt="" class="img-responsive img-circle">
                    <p><b>Door to door delivery </b></p>
                    <p>
                        By coming to Ethan courier ltd, 
                        you would have taken one of the steps of ensuring your cargo arrives safely and on time.
                        You will find people who understand your needs and priorities, and the importance of your cargo.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <img src="images/courier-3.jpg" alt="Luggage packaging" class="img-responsive img-circle">
                    <p><b>Luggage packaging</b></p>
                    <p>
                        From small packages to large containers we have all types of means from trucks to small vehicles
                        to transport your luggage. We give you personalized services and execute them competently, whatever the size of your requirement.
                        We offer quick and efficient transportation covering all major towns in Kenya and outside Kenya.
                    </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <img src="images/courier-8.png" alt="Warehousing" class="img-responsive img-circle">
                    <p><b>Warehousing </b></p>
                    <p>
                        Ethan courier provides warehousing facilities at the most economical rates
                         to the clients at any time and ensure security for your cargo until pick up time.</p>
                </div>
            </div>

        <?php
        include "footer.php";
        ?>
        </div>
    </div>
    <script src="main.js"></script>
</body>
</html>