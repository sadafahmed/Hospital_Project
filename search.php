<div class="mainbody">
<center>
<?php
include 'db.php';
if(isset($_GET['submit'])){

$search = $_GET['search'];

	
$query ="select *from docoter where d_title like '%$search%'";

$run = mysql_query($query);

while ($row = mysql_fetch_array($run)){

	$id = $row['p_id'];
	$email = $row['p_title'];
	$passord = $row['p_date'];
	$ = $row['p_author'];
	$content = $row['p_content'];
	$image = $row['p_image'];
	

?>

<h1><?php echo $title; ?></h1>
<b>published on :</b> <?php echo $date; ?>
<p align="right"><b>Posted by&nbsp;&nbsp;&nbsp;</b><?php echo $author; ?></p>

<img src="images/<?php echo $image; ?>" width="300" height="200">
<p><?php echo $content; ?></p>
<p align="right"><a href="page.php?id=<?php echo $id; ?>">Read More</a></p>
<?php }

}

?>
</div>

<div class="leftsidebar">
<div class="box">
<form action="search.php" method="get">
<input type="search" name="search" placeholder="Search..." size="10">
<input type="submit" name="submit" value="search">
</form>
</div>
<?php

include 'db.php';

$query= "select *from posts";

$run= mysql_query($query);

while($row = mysql_fetch_array($run)){
	$id = $row[0];
	$title = $row[1];
	$date = $row[2];
	$author = $row[3];
	$content = substr($row[4],0,50);
	$image = $row[5]; 
	

?>
