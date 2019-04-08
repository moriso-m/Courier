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
    <div class=""  >
        
        <?php
        include "header.php";
        ?>
        <div style="" id="main-content">
            <ul class="breadcrumb">
                <li>
                    <a href="index">Home</a>
                </li>
                <li class="active">Services</li>
            </ul>
            <div class="row " id="services">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                    <h2 class="text-center"><b>Our services</b>
                    </h2>
                    <p style="border-bottom:4px solid rgb(153, 51, 153);text-align:center;line-height:0.3em;"
                         class="col-lg-2 col-md-8 col-lg-offset-5">&nbsp;
                    </p>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 each-service jumbotron">
                    <img src="images/door to door delivery.jpg" alt="" class="img-responsive img-circle">
                    <p><b>Door to door delivery </b></p>
                    <p>
                        By coming to Ethan courier ltd, 
                        you would have taken one of the steps of ensuring your cargo arrives safely and ...                    </p>
                    <div id="arrow-down">
                            <a href="#" class="btn btn-success">
                                <span class="fa fa-angle-down"></span>    
                                Read more
                            </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 each-service jumbotron">
                    <img src="images/courier truck.jpg" alt="Luggage packaging" class="img-responsive img-circle">
                    <p><b>Luggage packaging</b></p>
                    <p>
                        From small packages to large containers we have all types of means from trucks to small vehicles
                        to transport your luggage...                    </p>
                    <div id="arrow-down">
                            <a href="#" class="btn btn-success">
                                <span class="fa fa-angle-down"></span>    
                                Read more
                            </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 each-service jumbotron">
                    <img src="images/parcel.jpg" alt="Warehousing" class="img-responsive img-circle">
                    <p><b>Warehousing </b></p>
                    <p>
                        Ethan courier provides warehousing facilities at the most economical rates...
                    </p>
                    <div id="arrow-down">
                            <a href="#" class="btn btn-success">
                                <span class="fa fa-angle-down"></span>    
                                Read more
                            </a>
                    </div>
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