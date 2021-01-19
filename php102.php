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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky" style="width: 100%;">
  
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
        <a class="nav-link" href="https://calendar.google.com/calendar/u/0/r?tab=wc"><button type="button" class="btn btn-light" style="margin-left: 10px;">Link</button></a>
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
                  <div class="list-group-item list-group-item-warning">
                  <h3 class="my-3">Functions in PHP</h3><b>
        <?php $code='
<?php

function show($var)
  {
    return $var;
  };

$a =array("Aman","10","01-03-2001");
foreach($var as $a)
  {
    echo show($var)."<br>";
  }
?>
        '; highlight_string($code); ?></b>
                  <hr>
                  Output:<br>
                  <?php

                    function show($var)
                      {
                        return $var;
                      }

                    $a =array("Aman","10","01-03-2001");
                    foreach($a as $b)
                      {
                        echo show($b)."<br>";
                      }
                  ?>
                  <hr>
                  Functions are named block of statements that perform set of instructions enclosed within them whenever called in the program. It's not always nessecary that
                  a function must return something but that depends completely on the purpose for which we are using it. Also, we can pass values to the function to perform 
                  operations on them. In raw terms functions in programming are similar to functions in mathematics.<br>
                  <div class="list-group-item list-group-item-danger">(click on the button to view another example.)
                  <hr>
                  <button type="button" style="margin: 5px;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalfunc">Example</button>
                  </div>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalfunc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Getiing average marks</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      <b>Code:<br><?php $code = '
<?php 
function average ($a)
  {
      $sum = 0;
      $k = 0;
      for($i=0;$i<strlen($a);$i++)
          {
              $sum += $a[$i];
              $k++;
          }
      return ($sum/$k);
  }

$student = array(17,19,20,19,20);
?>';highlight_string($code);?></b><br>
                <hr>
                      Output: <br>
                      <?php 
                          function average($a)
                            {
                                $sum = 0;
                                $k = 0;
                                for($i=0;$i<sizeof($a);$i++)
                                    {
                                        $sum += $a[$i];
                                        $k++;
                                    }
                                return ($sum/$k);
                            }

                          $student = array(17,19,20,19,20);
                          echo "Average marks of the students is = ".average($student)."<br>";
                      ?>
                      <hr>So, now let's discuss how this function over here  actually works, so we have marks of a student stored in an array. Also, we have defined a function that 
                      accesses the marks stored in array. The marks of each subject in the array is processed within the function and than at the end after getting sum it returns,
                      the average marks obtained by that student.
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                      </div>
                  </div>
                  </div>

        </div><br>
        
        <div class="list-group-item list-group-item-info">
                  <h3 class="my-3">Associative Arrays in PHP</h3><b>
        <?php $code='
<?php

$arr=array("Aman"=>"Pizza","Kritika"=>"Pasta","Arnav"=>"Italian","Chotti"=>"Indian");
foreach($arr as $key => $v)
      {
          echo $key." likes to eat ".$v."<br>";
      }
echo "Aman references to ".$arr["Aman"];
?>
        '; highlight_string($code); ?></b>
                  <hr>
                  Output:<br>
                  <?php

                      $arr=array("Aman"=>"Pizza","Kritika"=>"Pasta","Arnav"=>"Italian","Chotti"=>"Indian");
                      foreach($arr as $key => $v)
                            {
                                echo $key." likes to eat ".$v."<br>";
                            }
                      echo "Aman references to ".$arr["Aman"];
                  ?>
                  <hr>
                  Associative arrays are used to associate a value at particular index of array to it's specific key. The key itself acts as an index for the reference value. This will be more 
                  clear through above example.<br>
        </div>
        <br>
        
        <div class="list-group-item list-group-item-info">
                  <h3 class="my-3">Multi-dimensional Arrays in PHP</h3><b>
        <?php $code='
<?php

$arr=array(array(1,2,3,4),array(5,6,7,8),array(8,10,11,12));
echo "Elements in array are: <br>";
for($i=0;$i<count($arr);$i++)
      {
            echo var_dump($arr[$i])." ";
      }

?>
        '; highlight_string($code); ?></b>
                  <hr>
                  Output:<br>
                  <?php

                      $arr=array(array(1,2,3,4),array(5,6,7,8),array(8,10,11,12));
                      echo "Elements in array are: <br>";
                      for($i=0;$i<count($arr);$i++)
                            {
                                  echo var_dump($arr[$i])." ";
                            }
                    
                  ?>
                  <hr>
                  Multidimensional Arrays are just as similar to 2D Matrices. If we have a 2D array it has indexing from 0 to r-1 row and column has indexing from 0 to c-1 column.<br>
                  <div class="list-group-item list-group-item-danger">(click on the button to view another example.)
                  <hr>
                  <button type="button" style="margin: 5px;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2d">Example</button>
                  </div>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal2d" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Traversing 2D Array</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      <b>Code:<br><?php $code = '
<?php

$arr=array(array(1,2,3,4),array(5,6,7,8),array(8,10,11,12));
echo "Elements in array are: <br>";
for($i=0;$i<count($arr);$i++)
      {
            for($j=0;$j<count($arr[$i]);$j++)
                {echo $arr[$i][$j]." ";}
                echo "<br>";
      }

?>';highlight_string($code);?></b><br>
                <hr>
                      Output: <br>
                      <?php

                      $arr=array(array(1,2,3,4),array(5,6,7,8),array(8,10,11,12));
                      echo "Elements in array are: <br>";
                      for($i=0;$i<count($arr);$i++)
                            {
                                  for($j=0;$j<count($arr[$i]);$j++)
                                      {echo $arr[$i][$j]." ";}
                                      echo "<br>";
                            }
                    
                      ?>
                      <hr>Here, as you can see the concept of Associative array gets used, as you can see that the $arr[$i] acts as a column reference for the values in the column.
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                      </div>
                  </div>
                  </div>
                  </div><br>


                  <div class="list-group-item list-group-item-danger"><b>In PHP, the concept of global and local variable is a bit different here, whatever you declare in the
                  global scope(for raw understanding: say it free space) is part of outside scope and whatever is inside function(assume it as a closed system) will remain within the
                  function only. Whatever is inside function can't go outside and what's outside cannot come inside unless and untill passed as a parameter to the function
                  calling it directly. But, we can acces the global variable using keyword global, not only access but manipulate as well. This will become more clear with the below example.</b>
                  <hr>

                  <div class="list-group-item list-group-item-danger shadow-lg p-3 mb-5 bg-white rounded">
                  <b>Code:<br><?php $code = '
<?php 
$globe = 100;
function show1()
    {$globe =10; echo "Local = ".$globe."<br>";}
function show2()
    {global $globe; echo "Global = ".$globe."<br>";}
show1();
show2();
?>';highlight_string($code);?></b><hr>
                  Output:
                  <?php 
                      $globe = 100;
                      function show1()
                          {$globe =10; echo "Local = ".$globe."<br>";}
                      function show2()
                          {global $globe; echo "Global = ".$globe."<br>";}
                      show1();
                      show2();
                  ?>
                  </div>


                  </div><br>


                  <div class="list-group-item list-group-item-warning shadow-lg p-3 mb-5 bg-white rounded">
  
                  <form action="/php102.php" method="POST">
                    <div class="mb-3 my-3">
                      <label for="email" class="form-label">Email address</label>
                      <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input type="name" class="form-control" id="name" name="name">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form><br>
                  <?php 
                      /*
                      if($_SERVER['REQUEST_METHOD'] == 'POST')
                            {
                                $email = $_POST['email'];
                                $name = $_POST['name'];
                                echo '<br>Message:<br><div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Form Submitted!</strong> Thank you for checking in the website.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>';
                                echo "<hr>";
                            }*/
                  
                  ?>
                  <div class="list-group-item list-group-item-info">
                  <b>Code:<br><?php $code = '
<?php 
                      
if($_SERVER["REQUEST_METHOD"] == "POST")
      {
          $email = $_POST["email"];
          $name = $_POST["name"];
          echo "<br>Message:<br><div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Form Submitted!</strong> Thank you for checking in the website.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>";
      }

?>';highlight_string($code);?></b><hr>
                  </div>
                  Please, first fill the form and read the text further....[Alert!!! This is a dummy form.]. You got the Pop-up because you filled the form, a simple
                  example of PHP.<br>
                  So, the point is you might have first thought that a form over here doesn't make sense, yeah!! you are right but I am not making a commercial
                  or some other website, I am working on a website that teaches PHP, so here we are going to integrate database to this form now. Basically, there are 2 ways
                  in which we can perform this task. <br>
                  <ol>
                        <li>MY SQLi Extension: Works only with MySQL Database System. It's usage can be categorised further into 2 methods.</li>
                            <ul>
                                <li>Prcedural: Use of functions</li>
                                <li>Object Oriented Use: Use of Classes and Object</li>
                            </ul>
                        <li>PDO: Works with a wide-variety of database systems</li>
                  </ol>
                  <br>
                  <div class="list-group-item list-group-item-info">
                  <b>Code:<br><?php $code = '
<?php 
# denotes comment in php
$servername = "servername"; #-->localhost<-- for you guys
$username = "username"; #-->root<-- for you guys
$password = "password"; #--><-- theres no password guys for you

$conn = mysqli_connect($servername,$username,$password);
if(!$conn){echo "Connection, Not Successfull!!!<br>";}
else {echo "Connection, Successfull!!!";}
?>';highlight_string($code);?></b><hr>
                  </div>
                  Connecting to the Server:<br>
                  <?php 
                      $servername = "localhost";
                      $username = "root";
                      $password = "";

                      $conn = mysqli_connect($servername,$username,$password);
                      if(!$conn){die("Connection, Not Successfull!!! ".mysqli_connect_error()."<br>");}
                      else {echo "Connection, Successfull!!!";}
                  ?>
                  <br><br>
                  <h4>Using PHP to exectue SQL commands</h4><br>
                  Now, once we are connected to the host we can now connect to the database and execute sql statements. A connection 
                  to the localhost is nessecary for you guys to perform this. We can do this as follows:<br>
                  <div class="list-group-item list-group-item-info">
                  <b>Code:<br><?php $code = '
<?php 
$sql = "create database any_name";
$result = mysqli_query($sql);
if(!$result)
  {
    echo "The database didnt get created, the fact is ".$result.", "." due to ".mysqli_error()."<br>";
  }
else { echo "The database has been created, the fact is ".$result.".<br>"; }

?>';highlight_string($code);?></b><hr>
                  </div>
                  Output:<br>Cannot show, you will have to test it on your own due to stability issues.<br>
                  
                  </div>                  


        </div>
        <br>

        <div class="list-group-item list-group-item-success">
                <h3>"You have made till here, for the next chapter follow this link --&gt; <a style="text-decoration: none;" href="./php103.php">PHP 103</a> "</h3>
        </div>

    </div>

    


    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>The Website is made using HTML, Bootstrap and PHP,</strong> and is only for educational purpose.<br>
        <b><?php       echo "<br>This Webpage is being developed by Aman Kumar Dewangan using PHP.<br>";  echo "Date: ".date("dS F Y");  ?><b>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <span aria-hidden="true">&times;</span>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>