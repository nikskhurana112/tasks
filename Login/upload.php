<?php
session_start();
if( isset($_SESSION['username']) == false)
{
    header("Location:form.php");
    exit;
}

$name = time().$_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$path = "images/".$name;
$status = move_uploaded_file($tmp_name,$path);
if($status){
    header("Location:welcome.php");
    exit;
}
?>