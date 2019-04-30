<?php
/**
 * Created by PhpStorm.
 * User: moris
 * Date: 13/04/2019
 * Time: 01:13
 */
require_once "config.php";
/* create a paginator for all orders*/
$table ='reviews';
$records =5;
$comments =true;
include "pagination.php";
 function reviews($conn,$offset,$no_of_records_per_page){
    $sql = 'SELECT * FROM `reviews`ORDER BY `created_on` DESC LIMIT '.$offset.','.$no_of_records_per_page;
    $query = mysqli_query($conn,$sql);
    if(mysqli_error($conn)){
        include "errorLog.php";
    }
    else{
        if (mysqli_num_rows($query)) {
            $msg = '';
            while($row=mysqli_fetch_assoc($query)){
                $total_ratings = '<span>';
                if(!empty($row['rating'])){
                    while($row['rating']){
                        $total_ratings .='&#x2B50;';
                        --$row['rating'];
                    }
                }
                $total_ratings .='</span>';
                $msg .= '
                    <div class="col-lg-12 review-per-person">
                        <div class="name"><i class="fa fa-user-o"></i> '.htmlspecialchars($row['name'],ENT_QUOTES).'</div>
                        <div class="review-message panel-body">
                          '.htmlspecialchars($row["comment"],ENT_QUOTES).'
                        </div>
                       
                        <div class="review-likes">
                           <!-- <span>
                                <i class="fa fa-heart like" onclick="like('.$row['id'].')"></i>
                                <span id="like'.$row['id'].'">'.$row['likes'].'</span>
                            </span>
                            -->'
                            .$total_ratings.
                            '<span class="pull-right" style="font-size:0.8em;">
                                <em>'.date('d M Y h:i a',$row["created_on"]).'</em>'.
                            '</span>
                        </div>
                       
                    </div>
                ';
            }
            echo $msg;
        }
        else{
            $msg = '<div class="alert alert-info">There are currently no comments</div>';
            echo $msg;
        }
    }
}
?>

<!doctype html>
<html lang="en">
<head>
	<?php include "links.php";?>
    <title>Reviews</title>
    <script>
        $(document).ready(function(){
            // $(window).scrollTop(700);
            
        });
    </script>
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
			<li class="active">Reviews</li>
		</ul>
        <div class="row reviews">
           <?php echo reviews($conn,$offset,$no_of_records_per_page);?>
        </div>
        <?php
        include "pagination-buttons.php";
        ?>
        <div class="row">
            <form action="#" method="post" id="review-form" >
                <p class="name text-center"><b>Add your review</b></P>
                <div class="form-group col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
                    <label for="name" class="">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="form-group col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3" id="comment-div">
                    <label for="Comment">Comment:</label>
                    <textarea name="comment" id="comment" cols="30" rows="5" class="form-control" required></textarea>
                </div><br>
                <div class="form-group col-lg-3 col-md-3 col-lg-offset-3 col-md-offset-3 "id="rating-div">
                    <label for="rating">Rate us :</label>
                    <div id="hidden" style="color:green;">value should be between 1 to 5</div>
                    <input type="number" name="rating" id="rating" class="form-control" min="1" max="5" placeholder="out of 5">
                </div>
                <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
                    <button class="btn btn-success " id="send-review">
                    Comment
                    </button>
                </div>
            </form>
        </div>
    <?php
    include "footer.php";
    ?>
   </div>
</div>
<script src="main.js"></script>
</body>
</html>