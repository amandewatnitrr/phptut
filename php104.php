<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-signin-client_id" content="483362517964-fle8m9lubucr4o7fbkejtde77ncmv79n.apps.googleusercontent.com">
    <meta name="google-site-verification" content="Dyivp13NXmmNjAtQSBkjcaNuAK-7y5CHHBTrDl-TuNA" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        .logo-image{
            
            border-radius: 50%;
            overflow: visible;
            margin-top: -6px;
        }
    </style>
    <title>PHP by AkD(2021)</title>
</head>
<body style="overflow-x: hidden;">

<!--Navigation Bar begins-->
 <?php require 'navbar.php' ?>
<!--Navigation Bar Ends-->
<br><br>
    <div class="container">
    
    <div class="list-group-item list-group-item-primary shadow-lg p-3 mb-5 bg-white rounded">
    <h2>Connect your PHP file to the database</h2>
    <b><div class="list-group-item list-group-item-danger my-3"><?php $code='
<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "users";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
//     echo "success";
// }
// else{
    die("Error". mysqli_connect_error());
}

?>

        '; highlight_string($code); ?></b></div>
    <h2>Setting up Sigup</h2>
    <b><div class="list-group-item list-group-item-danger my-3"><?php $code='
<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include "partials/_dbconnect.php";
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists=false;
    if(($password == $cpassword) && $exists==false){
        $sql = "INSERT INTO `users` ( `username`, `password`, `dt`) VALUES "$username", "$password", current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
        }
    }
    else{
        $showError = "Passwords do not match";
    }

?>
        '; highlight_string($code); ?></b></div>
        <p>This will insert a record in the database obtained as input from the form made and will register the memeber, after all the conditon checks and validating the data.</p>
        <b><div class="list-group-item list-group-item-warning my-3"><?php $code='
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>SignUp</title>
  </head>
  <body>
    <?php require "partials/_nav.php" ?>
    <?php
    if($showAlert){
    echo "<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>";
    }
    if($showError){
    echo "<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> ". $showError."
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ";
    }
    ?>

    <div class="container my-4">
     <h1 class="text-center">Signup to our website</h1>
     <form action="/loginsystem/signup.php" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
            <label for="cpassword">Confirm Password</label>
            <input type="password" class="form-control" id="cpassword" name="cpassword">
            <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
        </div>
         
        <button type="submit" class="btn btn-primary">SignUp</button>
     </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
        '; highlight_string($code); ?></b></div>
    <h2>Navigation Bar</h2>    
    <b><div class="list-group-item list-group-item-warning my-3"><?php $code='
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="/loginsystem">iSecure</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="/loginsystem/welcome.php">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/loginsystem/login.php">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/loginsystem/signup.php">Signup</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/loginsystem/logout.php">Logout</a>
    </li>
     
    
  </ul>
  <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</div>
</nav>

        '; highlight_string($code); ?></b></div>
<h2>Setting Up the Login Page</h2>
<b><div class="list-group-item list-group-item-warning my-3"><?php $code='

<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include "partials/_dbconnect.php";
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
     
    $sql = "Select * from users where username="$username" AND password="$password"";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;
        header("location: welcome.php");

    } 
    else{
        $showError = "Invalid Credentials";
    }
}
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
    <?php require "partials/_nav.php" ?>
    <?php
    if($login){
    echo "<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>";
    }
    if($showError){
    echo "<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> ". $showError."
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ";
    }
    ?>

    <div class="container my-4">
     <h1 class="text-center">Login to our website</h1>
     <form action="/loginsystem/login.php" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
       
         
        <button type="submit" class="btn btn-primary">Login</button>
     </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>


        '; highlight_string($code); ?></b></div>

<h2>Setting up Logout</h2>
    <b><div class="list-group-item list-group-item-light my-3"><?php $code='
<?php

session_start();

session_unset();
session_destroy();

header("location: login.php");

#Add this php to the logout.php and dont forget to provide a link for logout. DIY

?>
        '; highlight_string($code); ?></b></div>
    </div>
        
    <h2>Password Hashing</h2>
    <div class="list-group-item list-group-item-primary shadow-lg p-3 mb-5 bg-white rounded"><b>
        Hashing is process of converting a given key into another value. A hash function is a one way mathematical function, that generates a different value from the 
        input key. The function generates the same hash from the input given, but you can never extract the input key from the hash itself, hence a one way function. Even if
        you hash the hash itself, it would not return you the input, but a hash of the hash. It is used to map a given value with particular key for faster access of elements.<br>
        <ul class="list-group-item my-3">
            <li class="list-group-item list-group-item-danger list-group-item-action">Solves the problem of needing to efficiently find or store an item in a collection.</li>
            <li class="list-group-item list-group-item-warning list-group-item-action">Stores data in forms of key and value pairs.</li>
            <li class="list-group-item list-group-item-success list-group-item-action">Generate an index, at which value is stored.</li>
            <li class="list-group-item list-group-item-primary list-group-item-action"">Make things more efficient by effectively narrowing down the search at outset.</li>
        </ul>
        <br> Hashing ensures a extra-security protection that ensures users that there credentials are safe. As, told it stores data in form of key and value pairs. The key which
        is identified as data is given as input to the function, the hash code which is an integer is than mapped to fixed size we have.
        <p>Hash Table supports 3 functions:
        <ol><li>Insert</li><li>Get</li><li>Delete</li></ol></p>
        <p>In place of password store, password hash, you can obtain the hash of your pasword using th functuion pssword_hash($password, PASSWORD_DEFAULT), this will return
        the hash key for password and that will be stored in database.</p>
        <p>What actually password_verify($input,$hash) does is, it compares the hash of the $input given with the $hash and returns boolean value.</p>
        <hr>
        Password Hash:<a href="https://www.php.net/manual/en/function.password-hash.php"<button type="button" class="btn btn-danger" style="margin-left: 10px;">Documentation</button></a>
        Password Verify:<a href="https://www.php.net/manual/en/function.password-verify.php"<button type="button" class="btn btn-primary" style="margin-left: 10px;">Documentation</button></a>
        </b>
    </div>


    <br>
    <div class="list-group-item list-group-item-success">
        <h3>"You have made till here, for the next chapter follow this link --&gt; <a style="text-decoration: none;" href="./php105.php">PHP 105</a> "</h3>
    </div>

    </div>

    


    
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>The Website is made using HTML, Bootstrap and PHP,</strong> and is only for educational purpose.<br>
        <b><?php       echo "<br>This Webpage is being developed by Aman Kumar Dewangan using PHP."; echo "Date: ".date("dS F Y");   ?><b>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <span aria-hidden="true">&times;</span>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script type="text/javascript">
            function onSignIn(googleUser) 
            {
                
                var profile = googleUser.getBasicProfile();
                console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
                console.log('Name: ' + profile.getName());
                console.log('Image URL: ' + profile.getImageUrl());
                console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
            }
    </script>
    
</body>
</html>