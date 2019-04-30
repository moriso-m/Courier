<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 28/07/2018
 * Time: 12:03
 */
$last_record=$offset+$no_of_records_per_page;
if ($pageno==$total_pages){
    $last_record=$total_rows;
}
if (isset($comments)) {
    echo "<div>".$total_rows." Comments</div>";
    # code...
}
else{
    echo '<div>Records'. ++$offset.' - '.$last_record.' of '.$total_rows .'</div>';
}
?>
<ul class="pagination" style="margin:0px 5px;">
    <li><a href="?pageno=1">First</a></li>
    <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
        <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
    </li>
    <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
        <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
    </li>
    <li class="<?php if($pageno == $total_pages){ echo 'disabled'; } ?>">
        <a href="?pageno=<?php echo $total_pages; ?>">Last</a>
    </li>
</ul>