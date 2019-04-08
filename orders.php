<?php
require_once "config.php";
$table ='orders';
/* create a paginator for all orders*/
include "pagination.php";
?>
<!doctype html>
<html lang="en">
<head>
	<?php include "links.php";?>
	<title>Orders</title>
</head>
<body>
<div class="container"  >

	<?php
	include "header.php";
	?>
	<div style="" id="main-content">
		<ul class="breadcrumb">
			<li>
				<a href="index">Home</a>
			</li>
			<li class="active">About us</li>
		</ul>

        <div>
            <table class="table table-responsive table-striped">
                <thead>
                    <th>no.</th>
                    <th>NAME</th>
                    <th>EMAIL ADDRESS</th>
                    <th>COUNTRY</th>
                    <th>LOCATION</th>
                    <th>ORDER PLACED ON</th>
                </thead>
                <tbody>
                    <?php
                    $sql = 'SELECT * FROM `ethan`.`orders` ORDER BY `date` DESC
                            LIMIT '.$offset.','.$no_of_records_per_page;
                    $query = mysqli_query($conn,$sql);
                    if(mysqli_error($conn)){
                        include "errorLog.php";
                    }
                    else{
                        if(mysqli_num_rows($query)){
                            $tr ='';
                            $pos =0;
                            while($row= mysqli_fetch_assoc($query)){
                                $date = date('d',$row['date']);
                                if ((date('d')==$date)) {
                                    # code...
                                    $date = 'Today '.date("h:i a",$row["date"]);
                                }
                                else{
                                    $date = date('d M Y h:i a',$row['date']);
                                }
                                $tr .= '<tr>
                                            <td>'.$pos++.'</td>
                                            <td>'.$row['name'].'</td>
                                            <td>'.$row['email'].'</td>
                                            <td>'.$row['country'].'</td>
                                            <td>'.$row['location'].'</td>
                                            <td>'.$date.'</td>
                                        </tr>';
                            }
                            echo $tr;
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <?php
        include "pagination-buttons.php";
        ?>
    </div>
    <?php
    include "footer.php";
    ?>
</div>