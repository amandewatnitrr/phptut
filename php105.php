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
        
            <div class="row">    
                
            <div class="col-md-4 my-2"><div class="card" style="width: 18rem;">
            <img src="https://source.unsplash.com/1600x900/?coding" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">PHP Tutorials</h5>
                <p class="card-text">Tutorial on PHP from Code with Harry.<br>Duration: 1 Month (At Max)<br>No. of Videos: 81
                <br>Backend Development</p>
                <a href="https://codewithharry.com/videos/php-tutorials-in-hindi-1" class="btn btn-primary">Link</a>
            </div>
            </div></div>

            <div class="col-md-4 my-2"><div class="card" style="width: 18rem;">
            <img src="https://source.unsplash.com/1600x900/?programming,python" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Python Tutorials</h5>
                <p class="card-text">Tutorial on Python from Code with Harry.<br>No. of Videos: 129</p>
                <a href="https://codewithharry.com/videos/python-tutorials-for-absolute-beginners-0" class="btn btn-warning">Link</a>
            </div>
            </div></div>

            <div class="col-md-4 my-2"><div class="card" style="width: 18rem;">
            <img src="https://source.unsplash.com/1600x900/?coding,programming,github" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Github Repo Link for this Website</h5>
                <p class="card-text">Open Source Contribution<br>#thankstober</p>
                <a href="https://github.com/amandewatnitrr/phptut" class="btn btn-info"><img src="./images/github.svg" style="margin: 2pt;" class="img-fluid">Link</a>
            </div>
            </div></div>

            </b>
            </div>

    </div>
        
        
            <br>
            <div class="list-group-item list-group-item-success">
                <h3>"Now follow the link to course on PHP mentioned above and make your own projects."</h3>
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
    <script>$(".toast").toast({ autohide: false });</script>
</body>
</html>