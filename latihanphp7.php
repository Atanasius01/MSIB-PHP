<form action="" method="POST">
    <label for="">Username</label><br>
    <input type="text" name="uname"><br>
    <label for="">Password</label><br>
    <input type="password" name="pass"><br>

    <input type="submit" name="login" value ="login">
</form>

<?php
error_reporting(0);
$username = $_POST['uname'];
$password = $_POST['pass'];
$login = $_POST['login'];
if(isset($login)){
    echo 'Hallo ' .$username. '<br> Password Anda ' .$password;
}


?>