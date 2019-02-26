<?php


?>

<?php
include("database/config.php");
$sql=" SELECT * FROM notice WHERE notice_ctgry='marquee' ";
$query=mysqli_query($myconn,$sql);

while($row=mysqli_fetch_array($query))
{

$title=$row['notice_title'];
$nid=$row['notice_id'];
?>

<a href="viewnotice.php?notice_id=<?php echo $nid ?>"><?php echo $title; ?></a>|||

<?php } ?>
