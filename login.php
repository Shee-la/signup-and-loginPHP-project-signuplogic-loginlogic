<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="stylesheet" href="style.css">
    <title>loginform</title>
</head>

<body>
    <div class="container my-5 ">
        <div class="row">
            <div class="col-md-12 col-xm-12">
                <!--sigup screen takes 6(takes complete 50% of the screen) and small screen 12(takes complete 100% of the screen)-->
                <h1 class="text-center my-5">Log-In</h1>
                <form action="loginlogic.php" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" id="username" class="form-control" placeholder="Enter Your Username"
                            autocomplete="off" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" class="form-control" placeholder="Enter Your Password"
                            autocomplete="off" name="password">
                    </div>
                    <button type="submit" class="btn btn-success w-100 my-3" name="login">Log-In</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>