<?php
/**
 * Created by PhpStorm.
 * User: moris
 * Date: 23/03/2019
 * Time: 15:42
 */

?>
<div class="" >
	<div class="top-header">
		<span id="company">
			<img src="images/logo.jpg" height="80" width="300" alt="Ethan" style="color:#ffffff;">
			<!-- 3than courier -->
		</span>
		<span class="pull-right header-links" >
			<span><a href="reviews">Reviews</a></span>
			<span class="separator">|</span>
			<span><a href="downloads">Downloads</a></span>
			<span>|</span>
			<span><a href="contact">Contact us</a></span>
		</span>
	</div>
	
	<nav class="navbar navbar-default" id="mainNav">
		<div class="navbar-header">
			<!collapsable navbar-->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="index" class="navbar-brand">
				<img src="images/logo.jpg" height="50" width="80" alt="Ethan" style="color:#ffffff;">
			</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li>
					<a href="programs"></a>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">About us
					<span class="caret"></span></a>
					<ul class="dropdown-menu about-dropdown" >
					<li><a href="about#mission">Mission</a></li>
					<li><a href="about#vision">Vision</a></li>
					<li><a href="about#core-values">Core values</a></li>
					</ul>
				</li>
				<li>
					<a href="services">
						Services
					</a>
				</li>
				<li>
					<a href="contact">
						Contact us
					</a>
				</li>
				<!-- <li>
					<a href="track">
						Track shipment
					</a>
				</li> -->
				<li>
					<a href="rates">
						Request for quotition
					</a>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
                <li>
					<a href="http://www.ethancourier.com:2095" target="blank">
						Staff login
					</a>
				</li>
			</ul>
		</div>
	</nav>
</div>

<div id="tracking-builder"></div>
<div id="track-shipment">
    <span id="track-close" class="close">&times</span>
    <div id="track-shipment-content">
        <h3>Track your shipment</h3>
        <p>
        </p>
        <form id="popup-form" action="shipment-details.php" class="form-inline">
            <input type="text" name="waybill" placeholder="Waybill number/track ID" class="form-control"/>
            <button type="button" name="subscribe" class="btn btn-success">Track shipment</button>
        </form>
    </div>
</div>

<!--        courier order-->
<div class="modal fade" id="order" role="dialog" >
    <div class="modal-dialog">
        <!-- modal content-->
        <div class="modal-content">
            <div class="modal-title">

            </div>
            <div class="modal-header text-center">
                <a href="#" data-dismiss="modal" class="close">&times;</a>
                <h3>
                    Request for shipping rate
                </h3>
            </div>
            <div class="modal-body" >
				<!-- 
				<div id="alert" style="color:red"></div>
                <form method="post" class="row" id="order-form" action="save-order.php">
                    <div class="form-group col-lg-8 col-lg-offset-2">
                        <input type="text" name="name" required class="form-control" placeholder="name">
						
                    </div>
                    <div class="form-group col-lg-8 col-lg-offset-2">
                        <input type="email" name="email" required class="form-control" placeholder="email address">
                    </div>
                    <div class="form-group col-lg-8 col-lg-offset-2">
                        <input type="number" name="phone" required class="form-control" placeholder="phone" >
						<span class="help-block">eg. 0712345678</span>
                    </div>
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
					<div class="form-group col-lg-8 col-lg-offset-2">
						<input type="text" name="subject" id="subject" class="form-control" placeholder="subject">
					</div>
					<div class="form-group col-lg-8 col-lg-offset-2">
						<textarea type="text" name="description" id="description" class="form-control">
						</textarea>
						<span class="help-block">Short description of what you want to ship or want to get delivered</span>

					</div>
                    <button type="submit" id="courier-order"
                            class="form-group btn btn-success col-lg-5 col-md-5 col-sm-6 col-xs-8 col-lg-offset-3 col-md-3 col-sm-3 col-xs-offset-2">
                        Order courier
                    </button>
                </form>
				-->
            </div>
        </div>

    </div>
</div>
