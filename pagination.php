<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 28/07/2018
 * Time: 11:50
 */
if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}
$no_of_records_per_page = 8;
$offset = ($pageno-1) * $no_of_records_per_page;
$total_pages_sql = "SELECT COUNT(*) FROM ".$table."";
$result = mysqli_query($conn,$total_pages_sql) or die(mysqli_error($conn));
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);
