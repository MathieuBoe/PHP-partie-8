<?php 
session_start();
$title = 'user';

include 'header.php';
    echo 'Votre ID de session est le ' .$_COOKIE['userlogin'];
include 'footer.php';?>