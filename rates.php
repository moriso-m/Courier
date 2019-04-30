<!DOCTYPE html>
<html lang="en">
<head>
<?php include "links.php";?>
    <title>shipping rates</title>
</head>
<body>
    <div>
        <?php include "header.php";?>
        <div class="jumbotron text-center">
            <h3>Request for shipping rates</h3>
        </div>
        <div id="alert" style="color:red" class="text-center"></div>
                <form method="post" class="row" id="order-form" action="save-order.php">
                    <div class="form-group col-lg-4 col-md-4 col-sm-6 col-lg-offset-4 col-md-offset-4 col-sm-offset-3">
                        <label for="name">Name:</label>
                        <input type="text" name="name" required class="form-control" placeholder="name">
						
                    </div>
                    <div class="form-group col-lg-4 col-md-4 col-sm-6 col-lg-offset-4 col-md-offset-4 col-sm-offset-3">
                        <label for="email">Email:</label>
                        <span class="help-block">eg. 0712345678</span>
                        <input type="email" name="email" required class="form-control" placeholder="phone" >
						
                    </div>
                    <div class="form-group col-lg-4 col-md-4 col-sm-6 col-lg-offset-4 col-md-offset-4 col-sm-offset-3">
                        <label for="phone">Mobile number:</label>
                        <span class="help-block">eg. 0712345678</span>
                        <input type="number" name="phone" required class="form-control" placeholder="phone" >
						
                    </div>
                    <div class="form-group col-lg-4 col-md-4 col-sm-6 col-lg-offset-4 col-md-offset-4 col-sm-offset-3">
                        <label for="from">From:</label>
                        <input type="text" name="from" required class="form-control" placeholder="From which location">
                    </div>
                    <div class="form-groupcol-lg-4 col-md-4 col-sm-6 col-lg-offset-4 col-md-offset-4 col-sm-offset-3">
                        <label for="to">To:</label>
                        <input type="text" name="to" required class="form-control" placeholder="to">
                    </div>
					<div class="form-group col-lg-4 col-md-4 col-sm-6 col-lg-offset-4 col-md-offset-4 col-sm-offset-3">
                        <label for="description">Short description about the shipment:</label>
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
    <script type="text/javascript">
    $('#courier-order').click(function (e) { 
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "save-order.php",
            data: $('#order-form').serialize(),
            success: function (data) {
                $('#alert').html(data);
            }
        });
       
        
    });
    </script>
</body>
</html>