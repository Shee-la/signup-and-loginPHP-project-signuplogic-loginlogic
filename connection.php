<?php
$servername="localhost";
$username ="root";
$password ="";
$db_name ="usersregistration";
$con = new mysqli($servername, $username, $password, $db_name);
if (!$con){
    die(mysqli_error($con));
}
?>