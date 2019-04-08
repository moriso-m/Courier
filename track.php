<?php
/**
 * Created by PhpStorm.
 * User: moriso
 * Date: 1/04/2019
 * Time: 00:53 am
 */

?>

<!doctype html>
<html lang="en">
<head>
	<?php include "links.php";?>
	<title>Track shipment</title>
</head>
<body>
<div class=""  >

	<?php
	include "header.php";
	?>
	<div style="background: url('images/background/white-waves.png') fixed;" id="main-content">
		<ul class="breadcrumb">
			<li>
				<a href="index">Home</a>
			</li>
			<li class="active">Shipment tracking</li>
        </ul>
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-lg-offset-2 col-md-offset-2 col-sm-offset-2">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <b>Track your shipment <i class="fa fa-question-circle"></i></b>
                    </div>
                    <div class="panel-body">
                        <form action="#" method="post" id="track-form" class="">
                            <div class="form-group col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <input type="text" name="waybill" id="waybill" class="form-control " placeholder="Waybill no./ Tracking id">
                            </div>
                            <div class="btn btn-success col-lg-2 col-md-3 col-sm-3 col-xs-3 " type="button">
                                Track
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="row"> -->
            <div class="pull-right">
                <i class="fa fa-print fa-2x"></i>
            </div>
            <table class="table table-responsive table-striped">
                <thead style="background-color:rgb(153, 51, 153);color:#ffffff;">
                    <tr>
                        <th>EVENT</th>
                        <th>DESCRIPTION</th>
                        <th>DATE</th>
                        <th>TIME</th>
                        <th>LOCATION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Order placed</td>
                        <td>shipment was sent</td>
                        <td>31/03/2019</td>
                        <td>11.30 am</td>
                        <td>Nairobi</td>
                    </tr>
                    <tr>
                        <td>Goods sent</td>
                        <td>Shipment is on its way to Eldoret</td>
                        <td>31/03/2019</td>
                        <td>12.40pm</td>
                        <td>Nairobi</td>
                    </tr>
                </tbody>
            </table>
        <!-- </div> -->
    </div>
    <?php
    include "footer.php";
    ?>
</div>
</body>
</html>         