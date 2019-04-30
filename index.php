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
    <div class=""  >
    
    <?php
    include "header.php";
    ?>
    <div style="background: url('images/background/white-waves.png');" id="main-content">
        <div class="row" >
            <div class="col-lg-8 col-md-8 c0l-sm-8 col-xs-12">
                <!--carousel -->
                <div class="skitter skitter-large ">
                    <ul>
                        <li>
                            <a href="#blindWidth"><img src="images/parcel 2.jpg" class="blindWidth" height="300"/></a>
                            <div class="label_text">
                                <h3 style="color: #ffffff;">
                                    Looking for reliable courier service for your company?<br>
                                </h3>
                            </div>
                        </li>
                        <li>
                            <a href="#blindWidth"><img src="images/port.jpg" class="blindWidth" height="300"/></a>
                            <div class="label_text">
                                <h3  style="color: #ffffff;">
                                   and Timely delivery? Here is the solution... ethan courier services 
                                </h3>
                            </div>
                        </li>
                        <li>
                            <a href="#blindWidth"><img src="images/courier truck.jpg" class="blindWidth" /></a>
                            <div class="label_text">
                                <h4  style="color: #ffffff;">We deliver and pick shipment from your location</h4>
                            </div>
                        </li>
                        <li>
                            <a href="#blindWidth"><img src="images/warehouse.jpg" class="blindWidth" /></a>
                            <div class="label_text">
                                <h4  style="color: #ffffff;">Ship at economical rates</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="">
                    <h3>Request for Quotition</h3>
<!--                    <img src="images/courier-9.jpg" class="img-responsive" height="50"><br>-->
                <div id="alert" style="color:red"></div>
                <form method="post" class="row" id="order-form" action="save-order.php">
                    <div class="form-group col-lg-8 col-lg-offset-2">
                        <input type="text" name="name" required class="form-control" placeholder="name">
						
                    </div>
                    <div class="form-group col-lg-8 col-lg-offset-2">
                        <input type="number" name="phone" required class="form-control" placeholder="phone" >
						<span class="help-block">eg. 0712345678</span>
                    </div>
                    <div class="form-group col-lg-8 col-lg-offset-2">
                        <input type="text" name="from" required class="form-control" placeholder="From which location">
                    </div>
                    <div class="form-group col-lg-8 col-lg-offset-2">
                        <input type="text" name="to" required class="form-control" placeholder="to">
                    </div>

                    <!-- <div class="form-group col-lg-8 col-lg-offset-2">
                        <input type="email" name="email" required class="form-control" placeholder="email address">
                    </div> -->
  
                   <!--
                    <div class="form-group col-lg-8 col-lg-offset-2">
                        <select name="country" required class="form-control">
                            <option value="Kenya">Kenya</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Tanzania">Tanzania</option>
                            <option value="Rwanda">Rwanda</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-8 col-lg-offset-2">
                        <input type="text" name="location" required class="form-control" placeholder="county / Town">
					</div>
                    -->
					<!-- <div class="form-group col-lg-8 col-lg-offset-2">
						<input type="text" name="subject" id="subject" class="form-control" placeholder="subject">
					</div> -->
					<div class="form-group col-lg-8 col-lg-offset-2">
                        <textarea type="text" name="description" id="description" class="form-control"
                         placeholder="short description about the shipment">
						</textarea>
						<span class="help-block">Short description of what you want to ship or want to get delivered</span>

					</div>
                    <button type="submit" id="courier-order"
                            class="form-group btn btn-success col-lg-5 col-md-5 col-sm-6 col-xs-8 col-lg-offset-3 col-md-3 col-sm-3 col-xs-offset-2">
                        Get Rates
                    </button>
                </form>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 description">

                <h3 class="text-center">Who we are</h3>
                <p>
                  We offer courier services around Kenya and East Africa,
                    From small packages to large containers we have all types of means from trucks to small vehicles to transport your luggage.
					We give you personalized services and execute them competently.
                    <a href="services">
                        Read more
                    </a>
                </p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 description">

                <h3 class="text-center">Why choose us</h3>

                <div class="row jumbotron" style="margin:6px 1px;" id="services">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center">
                        <img src="images/door to door delivery.jpg" alt="" class="img-responsive ">&nbsp;<br>&nbsp;
                        We ensure your shipment is delivered in time
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center">
                        <img src="images/large%20truck.jpg" alt="" class="img-responsive "><br>
                        We pick and deliver to any location in kenya and East africa
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center">
                        <img src="images/scheduled%20delivery.jpg" alt="" class="img-responsive "><br>
                        &nbsp;&nbsp;Get your shipment delivered at an affordable rate
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center">
                        <img src="images/customer care.png" alt="customer care" class="img-responsive "><br>
                        Contact our customer service team any day any time
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
