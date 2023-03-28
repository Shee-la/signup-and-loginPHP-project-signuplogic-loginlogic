<?php
session_start();
 $login=0;
 $credentials=0;
if ($_SERVER['REQUEST_METHOD']=='POST'){
include("connection.php");
if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql="select * from users where username='$username' and password='$password'";
$result=mysqli_query($con, $sql);
    if($result){
        $num = mysqli_num_rows($result);
        if($num>0){
            //echo"login successful";
            $login=1;
            $_SESSION['username']=$username;
           header('location:nextpage.php');
                } else{
            //echo"Invalid Credentials";
            $credentials=1;
        } 
        }
}
}
    ?>
    <!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <title>loginlogic</title>
  </head>
  <body>
   <?php
 if ($login){
    echo "<div class='alert alert-success' role='alert'>
    login successful
  </div>";
}
else {
if ($credentials){
    echo "<div class='alert alert-danger' role='alert'>
    invalid credentials
  </div>";
}
}
   ?>
  </body>
</html>
