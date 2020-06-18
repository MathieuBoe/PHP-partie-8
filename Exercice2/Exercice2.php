<?php 
session_start();
$_SESSION['lastname']= 'Boe ';
$_SESSION['firstname']='Mathieu ';
$_SESSION['age']=26;
$title = 'Exercice2';

include 'header.php';?>
<a href="Exercice2-1.php">Clic</a>
<?php include 'footer.php';?>