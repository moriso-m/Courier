<?php

/**
 * ceated on 16/04/2019
 * Author Moriso
 */

 require_once "config.php";

 $_GLOBALS['conn'] = $conn;

 /**
  * Fetch downloads from database
  * @var object conn = Connection to database
  */
 function getDownloads($conn){
     $sql = 'SELECT * FROM `downloads`';
     $query = mysqli_query($conn,$sql);
     if(mysqli_error($conn)){
         include "errorLog.php";
     }
     else{
         if (mysqli_num_rows($query)) {
             $tr='';
             $count=0;
             while($row = mysqli_fetch_assoc($query)){
                 $tr .= '<tr>
                            <td>'.$count.'</td>
                            <td>'.$row["item"].'</td>
                            <td>'.$row["size"].'</td>
                            <td><a href="'.$row['link'].' target="blank" download>
                                <i class="fa fa-download"></i>
                            </td>
                        </tr>
                    ';
             }
             return $tr;
        }
        else{
            return null;
        }
     }
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "links.php";?>
    <title>Downloads</title>
</head>
<body>
<div>
<?php
	include "header.php";
	?>
	<div style="" id="main-content">
		<ul class="breadcrumb">
			<li>
				<a href="index">Home</a>
			</li>
			<li class="active">Downloads</li>
		</ul>
        <table class="table table-responsive table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Item</th>
                    <th>size</th>
                    <th>Download</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Our profile</td>
                    <td>26kb</td>
                    <td class="download">
                        <a href="#" target="blank" class="btn btn-success" download>
                            <i class="fa fa-download"></i>
                            Download
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Our profile</td>
                    <td>26kb</td>
                    <td class="download">
                        <a href="#" target="blank" class="btn btn-success" download>
                            <i class="fa fa-download"></i>
                            Download
                        </a>
                    </td>
                </tr>
                <?php
                echo getDownloads($conn);
                ?>
            </tbody>
        </table>
        <div>
            
        </div>
    </div>
</div>
    
</body>
</html>