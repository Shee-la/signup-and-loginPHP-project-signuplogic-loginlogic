<?php
include'connection.php';
session_start();
if(!isset($_SESSION['username'])){
header('location:nextpage.php');
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
   <title>welcome</title>
  </head>
  <body style="background-color:pink;">
  <div class="container">
  <div class="jumbotron">
  <h1 class="display-4 text-center text-success">Hello, <?php echo $_SESSION['username']?></h1>
  <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis, in doloribus autem dolor non explicabo dicta sequi id, qui ut commodi, sint ullam quae vero sed assumenda? Voluptates, quis ex..</p>
  <hr class="my-4">
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="logout.php" role="button">Log-out</a>
  </p>
</div>
  </div> 
  </body>
</html>
