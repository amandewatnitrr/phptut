<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  
    <title>PHP 102</title>
</head>
<body style="overflow-x: hidden;">

<!--Navigation Bar begins-->
<?php require 'navbar.php' ?>
<!--Navigation Bar Ends-->
<br><br>
    <div class="container">
    <div class="list-group-item list-group-item-danger"><b>Because of some of the elements on second page, 2nd page has turned quite unresponsive and 
    I am working on it, in case if you want to visit other pages and navigation bar doesnt open than, click back on --&lt;PHP by AkD&gt;-- written on nav bar and you will be again able to move between pages via nav-bar.</b></div><br>
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
                      
                      if($_SERVER['REQUEST_METHOD'] == 'POST')
                            {
                                $email = $_POST['email'];
                                $name = $_POST['name'];
                                echo '<br>Message:<br><div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Form Submitted!</strong> Thank you for checking in the website.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>';
                                echo "<hr>";
                            }
                  
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
                      if($conn){echo "Connection, Successfull!!!";}
                      else {echo "Connection, Not Successfull(It's programmed for Localhost)!!! ".mysqli_connect_error()."<br>";}
                  ?>
                  <br><br>
                  <h4>Using PHP to exectue SQL commands</h4><br>
                  Now, once we are connected to the host we can now connect to the database and execute sql statements. A connection 
                  to the localhost is nessecary for you guys to perform this. We can do this as follows:<br>
                  <div class="list-group-item list-group-item-info">
                  <b>Code:<br><?php $code = '
<?php 
$sql = "CREATE DATABASE any_name";
$result = mysqli_query($conn,$sql);
if(!$result)
  {
    echo "The database didnt get created, the fact is ".$result.", "." due to ".mysqli_error($result)."<br>";
  }
else { echo "The database has been created, the fact is ".$result.".<br>"; }

?>';highlight_string($code);?></b><hr>
                  </div>
                  Output:<br>Cannot show, you will have to test it on your own due to stability issues. This must return 1(true when working on Localhost), i.e. the database is created.<br>
                  
                  </div>                  

                  <h3>Creating table using SQL in PHP</h3>
                  <div class="list-group-item list-group-item-primary shadow-lg p-3 mb-5 bg-white rounded">
                  <div class="list-group-item list-group-item-primary">
                  <b>Code:<br><?php $code = '
<?php 
# denotes comment in php
$servername = "servername"; #-->localhost<-- for you guys
$username = "username"; #-->root<-- for you guys
$password = "password"; #--><-- theres no password guys for you
$database = "databasename"; #-->Any database you have made<--

$conn = mysqli_connect($servername,$username,$password,$database);
#specifying database connects your page to that particular database only.
if(!$conn){echo "Connection, Not Successfull!!!<br>";}
else {echo "Connection, Successfull!!!";}
$sql = "CREATE TABLE "trip" ("sno" INT(6) NOT NULL AUTO_INCREMENT PRIMARY,"name" VARCHAR(12) NOT NULL, "dest" VARCHAR(6) NOT NULL);
$result = mysqli_query($conn,$sql);
if(!$result)
  {
    echo "The table didnt get created, the fact is ".$result.", "." due to ".mysqli_error($result)."<br>";
  }
else { echo "The table has been created, the fact is ".$result.".<br>"; }

?>';highlight_string($code);?></b><hr>
                  </div>
                      So, basically what we did here is we got connection to the database and within
                      the database using sql in php we created a table. Such commands have not been executed because 
                      mysqli_error() function causes the program execution to get terminated there itself, hindering
                      the proper working of website.
                  </div>


                  <h3>Inserting values in table using SQL in PHP</h3>
                  <div class="list-group-item list-group-item-primary shadow-lg p-3 mb-5 bg-white rounded">
                  <div class="list-group-item list-group-item-primary">
                  <b>Code:<br><?php $code = '
<?php 
# denotes comment in php
$servername = "servername"; #-->localhost<-- for you guys
$username = "username"; #-->root<-- for you guys
$password = "password"; #--><-- theres no password guys for you
$database = "databasename"; #-->Any database you have made<--

$conn = mysqli_connect($servername,$username,$password,$database);
#specifying database connects your page to that particular database only.
if(!$conn){echo "Connection, Not Successfull!!!<br>";}
else {echo "Connection, Successfull!!!";}
$sql = "INSERT INTO "trip" ("name","dest") VALUES ("Rohan","Wuhan")";
$result = mysqli_query($conn,$sql);
if(!$result)
  {
    echo "The value in table didnt get inserted, the fact is ".$result.", "." due to ".mysqli_error($result)."<br>";
  }
else { echo "The value in table has been inserted, the fact is ".$result.".<br>"; }

?>';highlight_string($code);?></b><hr>
                  </div>
                      So, basically what we did here is we got connection to the database and within
                      the database using sql in php we created a table, and now we are inserting data into it. Such commands have not been executed because 
                      mysqli_error() function causes the program execution to get terminated there itself, hindering
                      the proper working of website.
                  </div>


                  <h3>Connecting Form to Backend</h3>
                  <div class="list-group-item list-group-item-primary shadow-lg p-3 mb-5 bg-white rounded">
                  <div class="list-group-item list-group-item-primary">
                  <b>Code:<br><?php $code = '
<?php 
# denotes comment in php
$servername = "servername"; #-->localhost<-- for you guys
$username = "username"; #-->root<-- for you guys
$password = "password"; #--><-- theres no password guys for you
$database = "databasename"; #-->Any database you have made<--
$conn = mysqli_connect($servername,$username,$password,$database);

#specifying database connects your page to that particular database only.
if(!$conn){echo "Connection, Not Successfull!!!<br>";}
else {echo "Connection, Successfull!!!";}

if($_SERVER["REQUEST_METHOD"] == "POST")
      {
          $var1 = $_POST["field1"];
          $var2 = $_POST["field2"];
          echo "<br>Message:<br><div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Form Submitted!</strong> Thank you for checking in the website.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>";
      }

$sql = "INSERT INTO "tablename" ("field1","field2") VALUES ($var1,$var2)";
$result = mysqli_query($conn,$sql);


?>';highlight_string($code);?></b><hr>
                  </div>
                      So, now it's clear that in the localhost how, data gets stored in the SQL Database using POST method in PHP. Previously, we
                      only designed the PHP only to show pop-up but now once we have known how we can record that data and connect to database we can easily add
                      it to database.
                  </div>


                  <h3>Fetching Data from Backend using PHP in MySQL</h3>
                  <div class="list-group-item list-group-item-primary shadow-lg p-3 mb-5 bg-white rounded">
                  <div class="list-group-item list-group-item-primary">
                  <b>Code:<br><?php $code = '
<?php 
# denotes comment in php
$servername = "servername"; #-->localhost<-- for you guys
$username = "username"; #-->root<-- for you guys
$password = "password"; #--><-- theres no password guys for you
$database = "databasename"; #-->Any database you have made<--
$conn = mysqli_connect($servername,$username,$password,$database);

#specifying database connects your page to that particular database only.
if(!$conn){echo "Connection, Not Successfull!!!<br>";}
else {echo "Connection, Successfull!!!";}

$sql = "SELECT * FROM "tablename"";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result); #Counts the total no. of rows in dataset
echo "No. of entries --> ".$num."<br>";

echo "The records in dataset are as follows:";
while($row = mysqli_fetch_assoc($result))
      {
          echo $row["sno"]." ".$row["field1"]." ".$row["field2"]."<br>";
      }

?>';highlight_string($code);?></b><hr>
                  </div>
                      Now, here we can extract the data from database using the command mysqli_fetch_assoc(), this command sequentially moves to the next record in the table,
                      It's just like an iterator, that keeps on moving to the next record as long as the EOF(End of File) is reached.
                  </div>


                  <h3>Updating values via MySQLi in PHP</h3>
                  <div class="list-group-item list-group-item-primary shadow-lg p-3 mb-5 bg-white rounded">
                  <div class="list-group-item list-group-item-primary">
                  <b>Code:<br><?php $code = '
<?php 

  $sql = "UPDATE "tablename" SET "field1" = "value1" WHERE "field2" = "value2" ";
  $result = mysqli_query($conn,$sql);
  echo "Record updated too ".var_dump($result)."<br>";
  $aff = mysqli_affected_rows($conn);
  echo "No. of rows affected = ".$aff."<br>";
  if($result)
        {echo "Record Updated Succesfully!!";}
  else  {echo "Record Updation Failed!!!";}

?>';highlight_string($code);?></b><hr>
                  </div>
                      Update query of SQL allows you to update the records in dataset, for this we just need to know
                      the proper filtering so that we can get only those records where the values actually need to be updated.
                  </div>

                  <h3>Deleting records from table via  SQL query in PHP</h3>
                  <div class="list-group-item list-group-item-primary shadow-lg p-3 mb-5 bg-white rounded">
                  <div class="list-group-item list-group-item-primary">
                  <b>Code:<br><?php $code = '
<?php 

  $sql = "DELETE FROM "tablename" WHERE "field1" = "value1"";
  $result = mysqli_query($conn,$sql);
  $aff = mysqli_affected_rows($conn);
  echo "No. of rows affected = ".$aff."<br>";
  if($result)
        {echo "Record Deletion Succesfull!!";}
  else  {echo "Record Deletion Failed!!!";}

?>';highlight_string($code);?></b><hr>
                  </div>
                      Delete query of SQL allows you to delete the records from dataset, for this we just need to know
                      the proper filtering so that we only those records which we want to delete.
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