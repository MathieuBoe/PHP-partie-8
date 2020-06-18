<?php 
$title = 'Exercice1';
$_SERVER['SERVER_NAME'];
$_SERVER['SERVER_ADDR'];
$_SERVER['HTTP_USER_AGENT'];
include 'header.php';?>
<p><?= $_SERVER['SERVER_NAME'];?></p>
<p><?= $_SERVER['SERVER_ADDR'];?></p>
<p><?= $_SERVER['HTTP_USER_AGENT'];?></p>
<?php include 'footer.php';?>