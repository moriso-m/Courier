<?php
/**
 * Created by PhpStorm.
 * User: moris
 * Date: 23/03/2019
 * Time: 15:42
 */

?>
<div class="" >
	<div>
		<!-- <img src="images/courier-7.jpg" alt="" srcset="" class="img-responsive img-thumbnail"> -->
        <p><em>We <span style="color:rgb(153, 51, 153); ">move</span> with you</em></p>
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
					<a href="about">About us</a>
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
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="track">
						Track shipment
					</a>
				</li>
				<li>
					<a href="#" data-target="#order" data-toggle="modal">
						Ship courier
					</a>
				</li>
			</ul>
		</div>
	</nav>
</div>

<!--        enroll modal-->
<div class="modal fade" id="order" role="dialog" >
    <div class="modal-dialog">
        <!-- modal content-->
        <div class="modal-content">
            <div class="modal-title">

            </div>
            <div class="modal-header text-center">
                <a href="#" data-dismiss="modal" class="close">&times;</a>
                <h3>
                    Shipment details
                </h3>
            </div>
            <div class="modal-body" >
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
                    <button type="submit" id="courier-order"
                            class="form-group btn btn-success col-lg-5 col-md-5 col-sm-6 col-xs-6 col-lg-offset-3 col-md-3 col-sm-3 col-xs-3">
                        Order courier
                    </button>
                </form>
            </div>
        </div>

    </div>
</div>
