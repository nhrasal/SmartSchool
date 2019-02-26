

<?php


?>

<td><div id="sidbar">
<tr>
<td><h2><b><p style="color:white">Notice </p></b></h2></h2></td>
</td>
<tr>


<?php
include("database/config.php");
$sql=" SELECT * FROM notice WHERE notice_ctgry='Sidbar' ";
$query=mysqli_query($myconn,$sql);

while($row=mysqli_fetch_array($query))
{

$title=$row['notice_title'];
$nid=$row['notice_id'];
?>
<ul>
<li>
<div><a href="viewnotice.php?notice_id=<?php echo $nid ?>"><p style="color:white"><?php echo $title; ?></p></a></div></li></ul>

<?php }?>

</tr><br />

