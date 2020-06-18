<?php 
session_start();
$title = 'Exercice2-1';

include 'header.php';

echo $_SESSION['lastname'].$_SESSION['firstname'].$_SESSION['age'];
include 'footer.php';?>