<?php
$user=0;
$successful=0;
$match=0;
if ($_SERVER['REQUEST_METHOD']=='POST'){
include("connection.php");
if (isset($_POST['signup'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    //$sql= "insert into users (username, password) values ('$username', '$password')";
   
    //$result=mysqli_query($con, $sql);
   //if($result){
   // echo"successful";
    //}
   // else{
       // die(mysqli_error($con));
    //}
    $sql="select *from users where username='$username'";
    $result=mysqli_query($con, $sql);
    if($result){
        $count = mysqli_num_rows($result);
        if($count>0 ){
           // echo"user exists";
           $user=1;
        }
    
        else{
            if($password==$cpassword){ 
                $sql="insert into users (username, password) values ('$username', '$password')";
                $result=mysqli_query($con, $sql);
                if($result){
                    //echo"successful";
                    $successful=1;
                    header('location:login.php');
                }
            
            } else{
                    //echo"passwords did not match";
                    $match=1;
                 }
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
   <title>signuplogic</title>
  </head>
  <body>
   <?php
   if($user){
    echo"<div class='alert alert-danger' role='alert'>
    user already exists
  </div>";
}
else{
if ($successful){
    echo "<div class='alert alert-success' role='alert'>
    signup successful
  </div>";
}

else {
if ($match){
    echo "<div class='alert alert-warning' role='alert'>
    passwords do not match
  </div>";
}
}
}
   ?>
  </body>
</html>
