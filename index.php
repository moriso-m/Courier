<?php
/**
 * Created by PhpStorm.
 * User: moris
 * Date: 23/03/2019
 * Time: 11:29
 */
?>

<!doctype html>
<html lang="en">
<head>
    <?php include "links.php";?>
    <title>courier</title>
    <!-- skitter slideshow plugin-->

    <script type="text/javascript" src="skitter-Slideshow/dist/jquery.skitter.min.js"></script>
    <script type="text/javascript" src="skitter-Slideshow/js/jquery.easing.1.3.js"></script>
    <!--Init the Skitter-->
    <script type="text/javascript">
        $(document).ready(function() {
            $('.skitter-large').skitter({
                preview: true,
                dots:false,
                navigation: true,
                progressbar: true,
                focus: true,
                theme: 'clean',
                label_animation: 'right'
            });
        });
    </script>
</head>
<body>
    <div class="container"  >
    
    <?php
    include "header.php";
    ?>
    <div style="background: url('images/background/gravel.png') fixed;" id="main-content">
        <div class="row" >
            <div class="col-lg-8 col-md-8 c0l-sm-8 col-xs-12">
                <!--carousel -->
                <div class="skitter skitter-large ">
                    <ul>
                        <li>
                            <a href="#circlesRotate"><img src="images/courier-3.jpg" class="circles" height="300"/></a>
                            <div class="label_text">
                                <h3 style="color: #ffffff;">
                                    Looking for reliable courier service for your company?<br>
                                </h3>
                            </div>
                        </li>
                        <li>
                            <a href="#circleInside"><img src="images/courier-7.jpg" class="circlesInside" height="300"/></a>
                            <div class="label_text">
                                <h4  style="color: #ffffff;">
                                   Timely delivery
                                </h4>
                            </div>
                        </li>
                        <li>
                            <a href="#circlesRotate"><img src="images/courier-10.jpg" class="circlesRotate" /></a>
                            <div class="label_text">
                                <h4  style="color: #ffffff;">We deliver and pick shipment from your location</h4>
                            </div>
                        </li>
                        <li>
                            <a href="#blindWidth"><img src="images/courier-9.jpg" class="blindWidth" /></a>
                            <div class="label_text">
                                <h4  style="color: #ffffff;">Ship at economical rates</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="">
                    <h3>Place your courier order</h3>
<!--                    <img src="images/courier-9.jpg" class="img-responsive" height="50"><br>-->
                    <form method="post" class="row" action="save-order.php">
                        <div class="form-group col-lg-9">
                            <input type="text" name="name" required class="form-control" placeholder="Full name">
                        </div>
                        <div class="form-group col-lg-9">
                            <input type="number" name="phone" required class="form-control" placeholder="Mobile number">
                            <span class="help-block">eg. 0712345678</span>
                        </div>
                        <div class="form-group col-lg-9">
                            <input type="email" name="email" required class="form-control" placeholder="email address">
                        </div>
                        <div class="form-group col-lg-9">
                            <select name="country" required class="form-control">
                                <option value="Kenya">Kenya</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Rwanda">Rwanda</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-9 col-md-9 col-sm-12">
                            <input type="text" required class="form-control" placeholder="county / Town">
                        </div>
                        <div class=" col-lg-5 col-md-5 col-sm-6 col-xs-6 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-3">
                            <input type="submit" value="Order courier" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 description">

                <h3 class="text-center">Why choose us</h3>
                <div class="row jumbotron" style="margin:6px 1px;">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center">
                        <span class="number fa fa-hourglass-half "></span>&nbsp;<br>&nbsp;
                        We ensure your shipment is delivered in time
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center">
                        <span class="number fa fa-truck  "></span><br>
                        We pick and deliver to any location in kenya and East africa
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center">
                        <span class="number fa fa-dollar "></span><br>
                        &nbsp;&nbsp;Get your shipment delivered at an affordable price
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center">
                        <span class="number fa fa-calendar-check-o "></span><br>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <?php include "footer.php";?>
        </div>
    </div>
</div>
<script type="text/javascript" src="main.js"></script>
</body>
</html>
