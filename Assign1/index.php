<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "gameBar";
$mysqli = new mysqli($hostname, $username, $password, $database);
$gameName = $_POST['game_name'];
$friends = $_POST['number_friends'];
$fees = $_POST['fees'];
if($fees/$friends < 1000){
    header("Location:form.php");
    exit;
}
$result = $mysqli->query("INSERT INTO customerdata (gameName, friends, fees) VALUES('$gameName','$friends', '$fees')");
if ($result == null) {
    echo $mysqli->error;
} 
 else {
    header("Location:thanks.php");
    exit;
}
