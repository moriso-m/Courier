<?php
/**
 * Created by PhpStorm.
 * User: moris
 * Date: 13/04/2019
 * Time: 01:13
 */

require_once "config.php";

if ($_SERVER['REQUEST_METHOD']=='POST'){
     # code...
    $rating='';
    if (isset($_REQUEST['name'],$_REQUEST['comment']) and !empty($_REQUEST['name']) and !empty($_REQUEST['comment'])) {
        $name = mysqli_real_escape_string($conn,$_REQUEST['name']);
        $comment = mysqli_real_escape_string($conn,$_REQUEST['comment']);

        if(isset($_REQUEST['rating'])){
            $rating = $_REQUEST['rating'];
            $sql = 'INSERT INTO `reviews`(`name`,`comment`,`rating`,`created_on`)
                    VALUES("'.$name.'","'.$comment.'","'.$rating.'","'.time().'")';
        }
        else{
            $sql = 'INSERT INTO `reviews`(`name`,`comment`,`created_on`)
                    VALUES("'.$name.'","'.$comment.'","'.time().'")';
        }
        $query = mysqli_query($conn,$sql);
        if(mysqli_error($conn)){
            include "errorLog.php";
        }
        else{
            if(mysqli_affected_rows($conn)){
                reviews($conn);
            }
            else{
                $msg = '<div class="alert alert-danger">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <em>unable to add your comment currently, Please try again</em>
                        </div>';
                        echo $msg;
            }
        }
    }
    else if(isset($_REQUEST['like'])){
        $id = $_REQUEST['like'];
        $query = mysqli_query($conn, 'SELECT `likes` FROM `reviews` WHERE `id`="'.$id.'"');
        if(mysqli_error($conn)){
            include "errorLog.php";
        }
        else{
            if (mysqli_num_rows($query)) {
                $row = mysqli_fetch_assoc($query);
                $likes = $row['likes'];
                if (!isset($_COOKIE['liked'])) {
                    $query = mysqli_query($conn,'UPDATE `reviews` SET `likes`="'.++$likes.'" WHERE id="'.$id.'"');
                    if (mysqli_affected_rows($conn)) {
                        $sql = 'SELECT `likes` FROM `reviews` WHERE id="'.$id.'"';
                        $query = mysqli_query($conn,$sql);
                        if(mysqli_error($conn)){
                            include "errorLog.php";
                        }
                        else {
                            if (mysqli_num_rows($query)) {
                                $row = mysqli_fetch_assoc($query);
                                echo $row['likes'];
                                setcookie('liked','1',time()+365*60*60*24,'/');
                                exit();
                            }
                        }
                    }
                    else{
                        echo "An error has occured.Please try liking again";
                        exit();
                    }
                }
                else{
                    echo $likes;
                }
            }
        }
    }
    else {
        reviews($conn);
    }

}
else{
    include "header.php";
    echo "<div class='alert alert-danger'> Invalid access to this page</div>";
}

function reviews($conn){
    $sql = 'SELECT * FROM `reviews`';
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
                        <!--
                            <span>
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
    }
}