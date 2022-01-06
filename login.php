<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="style.css"><meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="w.jpeg">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="w.jpeg">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a> 
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <div class="Login-box">
        <img src="logoo.jpg" class="pp">
        <h3><center>Login Here</center></h3>
        <form>
            <p>NIP</p>
            <input type="text" name="NIP" placeholder="Enter Your NIP">
            <p>Password</p>
            <input type="password" name="Password" placeholder="Enter Your Password">
            <input type="submit" name="submit" value="Login">
            <a href="#">Forgot Password?</a>
            <a href="#"><u>Register</u></a>
        </form>
    </div> 
</body>
</html>



