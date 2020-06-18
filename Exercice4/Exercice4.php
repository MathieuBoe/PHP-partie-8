<?php
$user = $_COOKIE['user'] ?? '';
$password = $_COOKIE['password'] ?? '';
$title = 'Exercice4';
include 'header.php'; ?>
<p><?= $user.' '. $password;?></p>

<?php
echo $_COOKIE['user'];
echo $_COOKIE['pass'];
include 'footer.php';?>