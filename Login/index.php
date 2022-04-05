<?php
session_start();
$hostname = "localhost";
$username = "newuser";
$password = "password";
$database = "users";
$db = new PDO("mysql:dbname=$database;host=$hostname",$username,$password);

$p_username = $_POST['username'];
$p_password = $_POST['password'];

$result = $db->prepare("SELECT * FROM users WHERE email=:email AND password=:password");
$result->execute([":email" => $p_username, ":password" => $p_password]);
$rows = $result->fetch(2);
if ($rows == null) {
    header("Location:form.php");
    exit;
} 

else if ($rows >= 1){
    $_SESSION['username'] = $p_username;
    header("Location:welcome.php");
    exit;
}
else{
    header("Location:form.php");
    exit;
}
