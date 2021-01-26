<?php 
$servername = "localhost";
$password = "";
$username = "root";
$database = "testing";
$conn = mysqli_connect($servername,$username,$password,$database);
?>
<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  
    <title>PHP 103</title>
</head>
<body style="overflow-x: hidden;">

<!--Navigation Bar begins-->
<?php require 'navbar.php' ?>
<!--Navigation Bar Ends-->
<br><br>
    <div class="container">


    <div class="list-group-item list-group-item-success shadow-lg p-3 mb-5 bg-white rounded">
        <h3>I/O Files in PHP</h3>
        <div class="accordion accordion-flush" id="accordionFlushExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            include 'filename.extension';
        </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">include function allows us to include other files in php to be called execute there tasks, just like header files in all other programming 
        languages, but when if there is an error in the file being called, it only gives a warning a nd let's all other processes get executed smoothly. In short, 
        in case of any error caused by calling the file, it just warns and let's you complete other tasks.</div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            require 'filename.extension';
        </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">require function allows us to include other files in php to be called execute there tasks, just like header files in all other programming 
        languages, but when if there is an error in the file being called, it only gives a fatal error and stop's the other processes runing thereafter. In short, 
        in case of any error caused by calling the file, it stops all other execution of the page considering the mistak as a fatal error..</div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            readfile('filename.extension');
        </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">readfile function, reads a file and writes it to the output buffer. It returns the no. of bytes read from the file upon success or false on failure.</div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-heading4">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
            fopen('filename.extension');
        </button>
        </h2>
        <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Opens the given file, in the mode mentioned. There are no. of modes in which you can open a file. Basically it is a file pointer, that can be
        assigned role by the programmer whether to give which type of access to it. It returns a file pointer resource on success and FALSE on failure.<hr>

        <b><?php $code='
<?php

#example
$fptr = fopen("filename.txt","r"); # This will open the file in read mode only.
echo $fptr; #This will show Output Resource ID.

?>
        '; highlight_string($code); ?></b>

        <hr><a href="https://www.php.net/manual/en/function.fopen.php"<button type="button" class="btn btn-danger" style="margin-left: 10px;">Documentation</button></a>
        </div>
        </div>
    </div>


    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-heading5">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
            fread($file_pointer,$size_of_file);
        </button>
        </h2>
        <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">fread function is responsible for reading the content stored in a file. It take 2 arguments the file pointer and length of the file we want to read.<hr>

        <b><?php $code='
<?php

#example
$fptr = fopen("filename.txt","r"); # This will open the file in read mode only. Also, the file must exsist in order to read it.
$content =  fread($fptr,filesize("filename.txt")); #filesize("filename.ext") returns the complete size of the file, that is to be read.
echo $content; #This prints the content within the file in text format.

?>
        '; highlight_string($code); ?></b>

        <hr><a href="https://www.php.net/manual/en/function.fread"<button type="button" class="btn btn-danger" style="margin-left: 10px;">Documentation</button></a>
        </div>
        </div>
    </div>


    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-heading6">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
            fclose($file_pointer);
        </button>
        </h2>
        <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">fclose function, deallocates the memory utillised by the file pointer and ensures optimal working of website.<hr>

        <b><?php $code='
<?php

#example
$fptr = fopen("filename.txt","r"); # This will open the file in read mode only. Also, the file must exsist in order to read it.
$content =  fread($fptr,filesize("filename.txt")); #filesize("filename.ext") returns the complete size of the file, that is to be read.
echo $content; #This prints the content within the file in text format.
fclose($fptr); #Pointer fptr has now been deallocated, now ....
echo $content; #.... gives no output.
?>
        '; highlight_string($code); ?></b>

        <hr><a href="https://www.php.net/manual/en/function.fclose"<button type="button" class="btn btn-danger" style="margin-left: 10px;">Documentation</button></a>
        </div>
        </div>
    </div>


    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-heading7">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">
            fgets($file_pointer);
        </button>
        </h2>
        <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">fgets function, reads each line in the file line by line. It's just like an iterator that continues to read the lines in text file
        unless and untill, the end of file(EOF) is reached. When it reaches the end of the file, it returns false.<hr>

        <b><?php $code='
<?php

#example
$fptr = fgets("filename.txt"); # This will point to the first line in the file initially and jumps to the next line whenever called again
while($fptr){echo $fptr."<br>";}// THis reads the file over the period of time continuously unless and untill, $fptr returns false.
fclose($fptr);
?>
        '; highlight_string($code); ?></b>

        <hr><a href="https://www.php.net/manual/en/function.fgets.php"<button type="button" class="btn btn-danger" style="margin-left: 10px;">Documentation</button></a>
        </div>
        </div>
    </div>


    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-heading8">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse8" aria-expanded="false" aria-controls="flush-collapse8">
            fgetc($file_pointer);
        </button>
        </h2>
        <div id="flush-collapse8" class="accordion-collapse collapse" aria-labelledby="flush-heading8" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">fgetc function, reads each file character by cahracter. It's just like an iterator that continues to read the character in text file
        unless and untill, the end of file(EOF) is reached. When it reaches the end of the file, it returns false.<hr>

        <b><?php $code='
<?php

#example
$fptr = fgetc("filename.txt"); # This will point to the first line in the file initially and jumps to the next line whenever called again
while($fptr){echo $fptr."<br>";}// THis reads the file over the period of time continuously unless and untill, $fptr returns false.
fclose($fptr);
?>
        '; highlight_string($code); ?></b>

        <hr><a href="https://www.php.net/manual/en/function.fgetc.php"<button type="button" class="btn btn-danger" style="margin-left: 10px;">Documentation</button></a>
        </div>
        </div>
    </div>


        </div>
    </div>
    <h2>Follow this playlist(Click on the playlist button on the top-right corner)</h2>
    <iframe style="display: block; margin: auto;" width="100%" height="auto" src="https://www.youtube.com/embed/videoseries?list=PLu0W_9lII9aikXkRE0WxDt1vozo3hnmtR" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    <br>
    <div class="list-group-item list-group-item-success shadow-lg p-3 mb-5 bg-white rounded my-3">
      <h3 class="my-3">Writing and Appending files in PHP</h3>
      
      <div class="list-group-item list-group-item-info">
        <?php $code='
<?php

$fptr = fopen("filename.txt","w"); 
# Opens the file in write mode, i.e. if the file doesnt exsist, it will create a file with that particular name and start writting data into it.
# In case, if the file exsists, the content in file will be overwritten with the string value passed as argument.
fwrite($fptr,$string);
fclose($fptr);

$fptr = fopen("filename.txt","a"); 
# Opens the file in append mode.
# Only works in case, if the file exsists, the content passed as parameter to the function, gets appended at the end of the file.
fwrite($fptr,$string);
fclose($fptr);

?>
        '; highlight_string($code); ?></b>
        
    </div>

    <br>
    <h3>Setting up Cookies in PHP</h3>
    <h5>What arte cookies, session and tokens??</h5>
      Lets suppose that we want to login into our bank account, for that we have a login page with username and password. The credentials are recieved by the bank server and
      than the bank server checks for the credential in the database, and if everything goes fine you are directed to the overview page.<br>
      <p> But than there's an alternative to it, we can also create a session in database that gives you session ID in form of a cookie, i.e. the user has actually
      exchanged his credentials with the bank server for a cookie containg the Session ID. The Content of the cookie is secret and can't be read. The Cookie 
      having session ID is stored in the files system of the computer.</p>
      <p>The Session id is randomly generated and is hard to guess. If we logout the session on the server, the session ID will get deleted. But also the bank server at the same time
      will ask your browser to delete the cookie containing the session ID.</p>
      <p>Next time you request a page, your browser will automatically send a cookie contaning the session ID, which the server checks if its still valid, and it is pretty noticable 
      that we don't require credentials the second time. The Session remains active as long as we keep interacyting with the server. </p>
      <p>Lets say if the user is inactive for sometime and than you visit a page again after sometimee. The server will notice the period of inactivity and will prompt you to give
      your credentials again. This approach is called Cookie based Authentication. Here the cookie is just a mode to the User ID to the Client.</p>
      <p>The bank stores the session information on the server side and we cannot see the information in it, but at the same time it can store other information on the client side using another cookie.
      Let's say the design of frontend or any less sensitive information.</p>
      The reason server dont store much information on client because they cannot trust client. It's like a user conveying wrong information to bank that he/she have 1 million $
      in her account, thats why server prefer to work on database. 
      <p>The other idea is keep the data on client side and sign it. In this method, anyone holding the signature can check if data was manipulated or not; for this we can use JSON
      Web Tokens.</p>
      <p>For a long time Cookie based authentication, was considered an ideal but now its becoming outdated atleast in some use cases.</p>
      <p>Lets take another example, lets say we have an app that helps us with finance and keep track of spendings so for that, the app needs an access to credentials
      but what if we dont want to give the credentials, in such a case the app need to communicate to the bank server and send a token to the user for authentication,
      so that user can allow a third-party to only read its transaction for analysis only. Thus the app will only be able to see your transaction but it will not be able to
      perform transfer and do other activities. This token is like a randomly generated password if you think. It is like you are at a hotel and you get a one day WiFi password.
      So, in this process we never actually share username or password.</p>
      <br>
      <div class="list-group-item list-group-item-info my-3">
       <b> <?php $code='
<?php

setcookie($catgory_name,$value,time()+$time_when_a_cookie_expires_in_seconds,"/");
# --> / <-- indicates that you want to use the cokkie throughout the website.
# Now go to the inspect element by pressing F12 and than go to Network option and click on the file in which you made the cookie.
# Look for "Set Cookie" under the column "Response Header".
# Also under the "Request Header" column you can see the name of cookie being used.

$cat = $_COOKIE["cookie_name"];
# $_COOKIE is a super global variable, that contains the cookie and using this you can access your cookies on other pages as well.

?>
        ';highlight_string($code); ?></b><hr></b>
        <p>In general, A Cookie is also called HTTP Cookie which stores a small piece of data on your browser, to enhance your browsing experience.
        For example, lets say if you want to ban a specific user, you can give him a ban cookie that doesnt allow him to access your pages. SO in this way cookies work.
        But please dont unesscearily ban anyone if you are doing it on production :D . Also, you can access cookies from other pages as well. Also, dont use cookies to store username and password for privacy purposes.
        Read this documentation nessecarily.</p>
        <p>Tokens are standard, while sessions are implemented as needed by the server. Additionally, tokens dont need a session on the server. In case of JWT(JSON
        Web Token) also contain the information about the session, but now interaction involves multiple parties that may or may not trust one another. So, 
        you may trust the bank, but you may not trust the third-party app that you found on play store.</p>
        <p>Another difference is that, a token has a limited lifetime and a new token needs to be generated ones the old one is expired.
        A To ken can only provide access to a subset of data and  not the complete data. Most of the time tokens are sent using HTTP headers, beacause now there are many processes
        occuring outside the browser.</p>
        <p>Cookies are also sent as HTTP headers, but the browser handles them differently than the others.</p>
        <p>Sessions are stored on cookies, and helps user to perform his her tasks after proper authentication from the server side. They help to manage
        information across different pages.</p>
        <p>Session and token based approaches are widespread, but the token based approaches is used for Mobile Applications, while Websites use Session based approach.</p>


        <hr><a href="https://www.php.net/manual/en/reserved.variables.cookies"<button type="button" class="btn btn-danger" style="margin-left: 10px;">Documentation</button></a>
        
    </div><br>

    <h3>Session in PHP</h3>
      
      <div class="list-group-item list-group-item-info">
       <b><?php $code='
<?php

#PART 1 - Lets suppose this file has name session_begin.php
session_start();
$_SESSION[username"] = "user_id";
$_SESSION["password"] = "key";

?>
        ';highlight_string($code); ?><hr>
        <?php $code='
<?php

#PART 2 - Lets suppose this file has name session_get_data.php
session_start();
if(isset($_SESSION["username"]))
{
    echo $_SESSION["username"]." = Username";
    echo $_SESSION["password"]." = Password";
}

else{echp "Please check your code once again."}
#the above $_SESSION is a superglobal variable and we fetch the credentials via the $_SESSION.
session_unset(); #un-initialize the values in the variables.
session_destroy();

?>
        ';highlight_string($code); ?></b><hr>
        Once the session is active, you cans see the data written previously from file made in part-2, but if you havent initialised the superglobal variables in part-1
        it will generate error.
        
        <hr><a href="https://www.php.net/manual/en/reserved.variables.session"<button type="button" class="btn btn-danger" style="margin-left: 10px;">Documentation</button></a>
        
    </div><br>

    </div>
    

    </div>
        <br>

        <div class="list-group-item list-group-item-success">
                <h3>"You have made till here, for the next chapter follow this link --&gt; <a style="text-decoration: none;" href="./php104.php">PHP 104</a> "</h3>
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