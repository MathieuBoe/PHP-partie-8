<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['user'];
    $password = $_POST['password'];
    setcookie('user',$_POST['user'],time() + 365*24*3600,'/', '', false, false);
    setcookie('password',$_POST['password'],time() + 365*24*3600,'/', '', false, false);
}
// if (isset($_POST['LOGIN'])){

//  }
$title = 'Exercice3';
include 'header.php'; ?>
<form action="/Exercice4/Exercice4.php" method="POST">
<input type="text" name="user">
<input type="password" name="password">
<input type="submit" name="CONNECT">
</form>
<?php echo $_COOKIE['user'];
echo $_COOKIE['password'];
include 'footer.php';?>