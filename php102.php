<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Practicing PHP</title>
</head>
<body style="overflow-x: hidden;">

<!--Navigation Bar begins-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="width: 100%;">
  
  <div class="container-fluid">
    <a class="navbar-brand" target="_blank" href="https://www.linkedin.com/in/aman-kumar-dewangan-akd13o1/">PHP by AkD<span class="badge bg-warning text-dark rounded-pill">2021</span></h1> ||</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="./index.php"><button type="button" class="btn btn-primary" style="margin-left: 10px;"><img src="./images/home.svg" style="margin: 2pt;" class="img-fluid">Home</button></a>
        </li>

        <li class="nav-item">
        <a class="nav-link" href="#"><button type="button" class="btn btn-light" style="margin-left: 10px;">Link</button></a>
        </li>

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <button type="button" class="btn btn-danger" style="margin-left: 10px;">Lessons</button>
        </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="./php102.php">PHP 102</a></li>
            <li><a class="dropdown-item" href="#">PHP 103</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <button type="button" class="btn btn-warning" style="margin-left: 10px;">Social Media/Coding Platform</button>
        </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="https://www.linkedin.com/in/aman-kumar-dewangan-akd13o1/"><img src="./images/linkedin.svg" style="margin: 2pt;" class="img-fluid">Linkedin</a></li>
            <li><a class="dropdown-item" href="https://www.instagram.com/akd_beast_slayer/"><img src="./images/instagram.svg" style="margin: 2pt;" class="img-fluid">Instagram</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="https://github.com/amandewatnitrr"><img src="./images/github.svg" style="margin: 2pt;" class="img-fluid">Github</a></li>
            <li><a class="dropdown-item" href="https://www.hackerrank.com/amandewatnitrr?hr_r=1"><img src="./images/code.svg" style="margin: 2pt;" class="img-fluid">Hackerrank</a></li>
            <li><a class="dropdown-item" href="https://www.codechef.com/users/amandewatnitrr"><img src="./images/code.svg" style="margin: 2pt;" class="img-fluid">Codechef</a></li>
          </ul>
        </li>

      </ul>
      <form class="searchform d-flex" action="https://www.google.com/search" method="get" name="searchform" target="_blank" type="search" id="searchinput">
        <input name="sitesearch" type="hidden" class="form-control me-2" placeholder="Search" aria-label="Search">
        <input autocomplete="on" class="form-control search" name="q" placeholder="Search in example.com" required="required"  type="text">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!--Navigation Bar Ends-->
<br><br>
    <div class="container">

        
    
        <div class="list-group-item list-group-item-success">
                <h3>"You have made till here, for the next chapter follow this link --&gt; <a style="text-decoration: none;" href="./php102.php">PHP 102</a> "</h3>
        </div>

    </div>

    


    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>The Website is made using HTML, Bootstrap and PHP,</strong> and is only for educational purpose.<br>
        <b><?php       echo "<br>This Webpage is being developed by Aman Kumar Dewangan using PHP.";    ?><b>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <span aria-hidden="true">&times;</span>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>