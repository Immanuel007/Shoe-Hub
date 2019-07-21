<?php
include 'Header.php';
if(isset($_GET['f_error'])){
    echo "First name is required";
}
?>
<!DOCTYPE html>
<html lan = en>
<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="CSS/Sign.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="jumbotron" style="background-color: black">
    <h3>Register here with us</h3>
</div>

<div id="Pic">
<div class="container">

   <div class="row">

        <div class="col-md-4">        </div>
        <div class="col-md-4" >
            <form action="Signup_handler.php" method="post">
                <div class="form-group">
                    <label for="firstname">First name:</label>
                    <span class="btn-danger">
                         <?php
                         if(isset($_GET['f_error'])){
                             echo "First name is required";
                         }
                         ?>
                        </span>
                    <input type="text" class="form-control" id="firstname" placeholder="Enter first Name" name="firstname">
                </div>
                <div class="form-group">
                    <label for="lastname">Last name:</label>
                    <span class="btn-danger">
                                <?php
                                if(isset($_GET['l_error'])){
                                    echo "Last name is required";
                                }
                                ?>
                            </span>
                    <input type="text" class="form-control" id="lastname" placeholder="Enter last name" name="lastname">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <span class="btn-danger">
                                <?php
                                if(isset($_GET['e_error'])){
                                    echo "Email is required";
                                }
                                ?>
                            </span>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password_1">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Confirm password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password_2">
                    </div>
                    <div class="form-group">
                        <label><input type="date">Date registered</label>
                    </div>
                    <button type="submit" name="signup" class="btn btn-default">Sign up</button>
                </div>
                <div class="col-md-4"></div>
        </div>
    </div>
</div>
</body>
</html>
