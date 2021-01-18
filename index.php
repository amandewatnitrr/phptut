<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        .logo-image{
            
            border-radius: 50%;
            overflow: visible;
            margin-top: -6px;
        }
    </style>
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

        
        <h1>PHP</h1>
        The PHP Hypertext Preprocessor (PHP) is a programming language that allows web developers to create dynamic content that interacts with databases.
        PHP is basically used for developing web based software applications. This tutorial helps you to build your base with PHP.
        <h3 class="my-3">Why to Learn PHP?</h3>
        PHP started out as a small open source project that evolved as more and more people found out how useful it was. Rasmus Lerdorf unleashed the first version of PHP way back in 1994.
        PHP is a MUST for students and working professionals to become a great Software Engineer specially when they are working in Web Development Domain. I will list down some of the key advantages of learning PHP:
        <ul class="list my-3 list-group-item shadow p-3 mb-5 bg-white rounded">
        <li class="list-group-item list-group-item-info"><p>PHP is a recursive acronym for "PHP: Hypertext Preprocessor".</p></li>
        <li class="list-group-item"><p>PHP is a server side scripting language that is embedded in HTML. It is used to manage dynamic content, databases, session tracking, even build entire e-commerce sites.</p></li>
        <li class="list-group-item list-group-item-info"><p>It is integrated with a number of popular databases, including MySQL, PostgreSQL, Oracle, Sybase, Informix, and Microsoft SQL Server.</p></li>
        <li class="list-group-item"><p>PHP is pleasingly zippy in its execution, especially when compiled as an Apache module on the Unix side. The MySQL server, once started, executes even very complex queries with huge result sets in record-setting time.</p></li>
        <li class="list-group-item list-group-item-info"><p>PHP supports a large number of major protocols such as POP3, IMAP, and LDAP. PHP4 added support for Java and distributed object architectures (COM and CORBA), making n-tier development a possibility for the first time.</p></li>
        <li class="list-group-item"><p>PHP is forgiving: PHP language tries to be as forgiving as possible.</p></li>
        <li class="list-group-item list-group-item-info"><p>PHP Syntax is C-Like.</p></li>
        </ul>
        <br>
        <h3>Characteristics of PHP</h3>
        <p>Five important characteristics make PHP's practical nature possible &minus;</p>
        <ul class="list my-3 list-group-item">
            <li class="list-group-item list-group-item-action">Simplicity</li>
            <li class="list-group-item list-group-item-action">Efficiency</li>
            <li class="list-group-item list-group-item-action">Security</li>
            <li class="list-group-item list-group-item-action">Flexibility</li>
            <li class="list-group-item list-group-item-action">Familiarity</li>
        </ul>
        <br>
        <h3 class="my-3">Applications of PHP</h3>
        <p>As mentioned before, PHP is one of the most widely used language over the web. I'm going to list few of them here:</p>
        <ul class="list list-group-item">
            <li class="list-group-item"><p>PHP performs system functions, i.e. from files on a system it can create, open, read, write, and close them.</p></li>
            <li class="list-group-item"><p>PHP can handle forms, i.e. gather data from files, save data to a file, through email you can send data, return data to the user.</p></li>
            <li class="list-group-item"><p>You add, delete, modify elements within your database through PHP.</p></li>
            <li class="list-group-item"><p>Access cookies variables and set cookies.</p></li>
            <li class="list-group-item"><p>Using PHP, you can restrict users to access some pages of your website.</p></li>
            <li class="list-group-item"><p>It can encrypt data.</p></li>
        </ul>
        <br>
        <h3 style="text-align:center;" class="my-3">PHP Setting Up Environment using XAMPP</h3>
        <iframe style="display: block; margin: auto;" width="100%" height="auto" src="https://www.youtube.com/embed/at19OmH2Bg4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <br>
        <h3 class="my-3">More on PHP Variables</h3>
        <ul class="list-group-item">
            <li class="list-group-item list-group-item-warning list-group-item-action">Variables are case sensitive.</li>
            <li class="list-group-item list-group-item-warning list-group-item-action">Variables in PHP start with a $ sign.</li>
            <li class="list-group-item list-group-item-warning list-group-item-action">Variable name can start with Alphabets or an underscore character only.</li>
            <li class="list-group-item list-group-item-warning list-group-item-action"">Variable name can be alpha-numeric.</li>
            <li class="list-group-item list-group-item-warning list-group-item-action">Cannot start with number and must not contain special character.</li>
            <br>
            <?php echo "Contributed by AkD..." ?>
        </ul>
        <br>
        <h3 class="my-3">Data types and working with Datatypes in PHP</h3>
        <br>
            PHP has a total of 7 type of variables, as mentioned here and some more in upcoming updates. In order to display the variables and some of the other statements using php_check_syntax
            we use 'echo' command, those who are familiar with programming this is similar to cout in C++, print() in python, etc. We can do it as:
        <br>
            <pre class="prettyprint notranslate list-group-item my-3">
                &lt;html&gt;

                &lt;head&gt;
                &lt;title&gt;Hello World&lt;/title&gt;
                &lt;/head&gt;
   
                &lt;body&gt;
                &lt;?php echo "Hello, World!";?&gt;
                &lt;/body&gt;

                &lt;/html&gt;
</pre>
        <br>
        <div class="row my-3 list-group-item shadow p-3 mb-5 bg-white rounded">
            <div class="col-4 list-group-item shadow-lg p-3 mb-5 bg-white rounded">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active list-group-item-primary " id="list-int-list" data-bs-toggle="list" href="#list-int" role="tab" aria-controls="int">int</a>
                    <a class="list-group-item list-group-item-action list-group-item-secondary" id="list-string-list" data-bs-toggle="list" href="#list-string" role="tab" aria-controls="string">String</a>
                    <a class="list-group-item list-group-item-action list-group-item-success" id="list-float-list" data-bs-toggle="list" href="#list-float" role="tab" aria-controls="float">Float</a>
                    <a class="list-group-item list-group-item-action list-group-item-danger" id="list-boolean-list" data-bs-toggle="list" href="#list-boolean" role="tab" aria-controls="boolean">Boolean</a>
                    <a class="list-group-item list-group-item-action list-group-item-warning" id="list-object-list" data-bs-toggle="list" href="#list-object" role="tab" aria-controls="object">Object</a>
                    <a class="list-group-item list-group-item-action list-group-item-light" id="list-array-list" data-bs-toggle="list" href="#list-array" role="tab" aria-controls="array">Array</a>
                    <a class="list-group-item list-group-item-action list-group-item-dark" id="list-null-list" data-bs-toggle="list" href="#list-null" role="tab" aria-controls="null">NULL</a>
                </div>
            </div>
  
            <div class="col-8">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-int" role="tabpanel" aria-labelledby="list-int-list">Integers − are whole numbers, without a decimal point, like 4195.<br>The Sytax is $variable_name = 500;<?php $cost=500; echo "<br>$cost <-- the value 500 you are seeing here is a php integer variable containg number shown here."; ?></div>
                    <div class="tab-pane fade" id="list-string" role="tabpanel" aria-labelledby="list-string-list">Strings are sequences of characters, like 'PHP supports string operations.<br>The Sytax is $variable_name = "My name is Aman."; <?php $sentence="My name is Aman"; echo "<br>$sentence <-- the value, you are seeing here is a php string variable containg sentence shown here."; ?></div>
                    <div class="tab-pane fade" id="list-float" role="tabpanel" aria-labelledby="list-float-list">Float are umbers with decimal values.<br>The Sytax is $variable_name = 3.14;<?php $pi=3.14; echo "<br>$pi <-- the value 3.14 you are seeing here is a php float variable containg decimal number shown here."; ?></div>
                    <div class="tab-pane fade" id="list-boolean" role="tabpanel" aria-labelledby="list-boolean-list">Bool have only two possible values either true or false.<br>The Sytax is $variable_name = true;<?php $b=true; echo "<br>$b <-- the value true you are seeing here is a php boolean variable containg boolean value shown here."; ?></div>
                    <div class="tab-pane fade" id="list-object" role="tabpanel" aria-labelledby="list-object-list">Objects are instances of programmer-defined classes, which can package up both other kinds of values and functions that are specific to the class.<br>Objects will be discussed seprately over here.</div>
                    <div class="tab-pane fade" id="list-array" role="tabpanel" aria-labelledby="list-array-list">Arrays are named and indexed collections of other values.<br>The indexing of array starts from 0, i.e. if the array has 6 characters than it will have index from 0 to 5. For array of length 'n' the indexing is from 0 to n-1.<br>The Sytax is $variable_name = ("aman","shreya","Hritika",<br>"arnav","kritika","Keshav");<?php $names = array("aman","shreya","Hritika","arnav","kritika","Keshav"); echo "<br>$names[0], $names[1], $names[2], $names[3], $names[4], $names[5]<-- all the names you are seeing here is a php array variable of string type containg names shown here."; ?></div>
                    <div class="tab-pane fade" id="list-null" role="tabpanel" aria-labelledby="list-null-list">NULL is a special type that only has one value: NULL.</div>
                </div>
            </div>
        </div>
        <br>
        <h3 class="my-3"> Relevant Links</h3>
            <ul>
                <li class="list-group-item list-group-item-info list-group-item-action"><a style="text-decoration:none;" href="https://www.youtube.com/playlist?list=PLu0W_9lII9aikXkRE0WxDt1vozo3hnmtR" target="_blank" >Playlist for PHP tutorial</a></li>
                <li class="list-group-item list-group-item-light list-group-item-action"><a style="text-decoration:none;" href="https://www.tutorialspoint.com/php/php_tutorial.pdf" target="_blank" >PDF Notes for PHP: Download Link</a></li>
                <li class="list-group-item list-group-item-info list-group-item-action"><a style="text-decoration:none;" href="https://www.tutorialspoint.com/php/php_environment.htm" target="_blank" >PHP TutorialPoint</a></li>
            </ul>
            <br>
        <!--https://www.tutorialspoint.com/php/php_tutorial.pdf-->

        <h3 class="my-3">Some nessecary commands working with PHP are:</h3>
            <dl >
                <div class="list-group-item list-group-item-light">
                    <dt>var_dump($variable_name)</dt>
                    <dd>This command is used to view data type and the data stored within a variable.</dd>
                </div>

                <div class="list-group-item list-group-item-light">
                    <dt>strlen($string_variable_name)</dt>
                    <dd>
                                <b><?php $code = '<?php $string_var = "This command is used to view length of sting stored in sting variable.echo "$string_var and its length is"." ".strlen($string_var); ?>";';highlight_string($code); ?></b>
                                <br>Output: <?php $string_var = "This command is used to view length of sting stored in sting variable."; 
                                echo "$string_var and it's length is"." ".strlen($string_var); ?>
                    </dd>
                </div>

                <div class="list-group-item list-group-item-action list-group-item-warning">
                    <dt>Important sidenote</dt>
                    <dd>
                        <b>For example if we have a sentence as &lt;?php $var="aman"; echo "$var is a string and it's length is ".strlen($var)."."; ?&gt;
                        So, here it is visible that '.' concatenates the function returned by the value to the string being displayed. You can find This
                        thing being used in the code of the website for the strlen($string_variable_name) on Github.</b>
                    </dd>
                </div>

                <div class="list-group-item list-group-item-light">
                    <dt>str_word_count($string_variable_name)</dt>
                    <dd>
                        Here we are using PHP to show this how it works. Let's say that we have a string variable containg the string.
                        <br> "My name is aman.", Using PHP we will count the no. of words in the sentence. This has not been hardcoded and is clearly visible from the Github Repo.
                        Though it's pretty possible that when you will use inspect element you will find it different.<br>
                        Input: "My name is aman."<br>
                        <b><?php $code = '<?php $var="My name is Aman."; echo "The previous sentence has " . str_word_count($var) . " words."; ?>';highlight_string($code);?></b>
                        <br>Output: <?php $var="My name is Aman."; echo "The previous sentence has " . str_word_count($var) . " words."; ?>
                    </dd>
                </div>

                <div class="list-group-item list-group-item-light">
                    <dt>strrev($string_variable_name)</dt>
                    <dd>
                        Here we are using PHP to show this how it works. Let's say that we have a string variable containg the string.
                        <br> "My name is aman.", Using PHP we will reverse the sentence. This has not been hardcoded and is clearly visible from the Github Repo.
                        Though it's pretty possible that when you will use inspect element you will find it different.<br>
                        Input: "My name is aman."<br>
                        <b><?php $code = '<?php $var="My name is Aman."; echo "The reverse sentence is --> " . strrev($var); ?>';highlight_string($code);?></b>
                        <br>Output: <?php $var="My name is Aman."; echo "The reverse sentence is --> " . strrev($var); ?>
                    </dd>
                </div>

                <div class="list-group-item list-group-item-light">
                <dt>strpos($string_variable_name,<br>$word_you_want_to_find)</dt>
                    <dd>
                        Here we are using PHP to show this how it works. Let's say that we have a string variable containg the string.
                        <br> "My name is aman.", Using PHP we will reverse the sentence. This has not been hardcoded and is clearly visible from the Github Repo.
                        Though it's pretty possible that when you will use inspect element you will find it different.<br>
                        Input: "My name is aman."<br>
                        <b><?php $code = '<?php $var="My name is Aman."; $word="is"; echo "The word is located at ".strpos($var,$word)." index."; ?>';highlight_string($code);?></b>
                        <br>Output: <?php $var="My name is Aman."; $word="is"; echo "The word is located at ".strpos($var,$word)." index."; ?>
                    </dd>
                </div>

                <div class="list-group-item list-group-item-light">
                    <dt>str_replace($word_to_be_replaced,<br>$word_that_will_replace,<br>$string_from_which_word_is_replaced)</dt>
                    <dd>
                        Here we are using PHP to show this how it works. Let's say that we have a string variable containg the string.
                        <br> "My name is aman.", Using PHP we will replace a word in the sentence. This has not been hardcoded and is clearly visible from the Github Repo.
                        Though it's pretty possible that when you will use inspect element you will find it different.<br>
                        Input: "My name is aman."<br>
                        <b><?php $code = '<?php $var="My name is Aman"; $word="Aman"; $var=str_replace("Aman","Rohan",$var); echo "The sentence now is --> $var"; ?>';highlight_string($code);?></b>
                        <br>Output: <?php $var="My name is Aman"; $word="Aman"; $var=str_replace("Aman","Rohan",$var); echo "The sentence now is --> $var"; ?>
                    </dd>
                </div>

                <div class="list-group-item list-group-item-light">
                    <dt>str_repeat($string_variable_name,<br>$no_of_times_you_want_to_repeat)</dt>
                    <dd>
                        Here we are using PHP to show this how it works. Let's say that we have a string variable containg the string.
                        <br> "My name is aman.", Using PHP we will print the sentence 5 times, by writting just 1 command. This has not been hardcoded and is clearly visible from the Github Repo.
                        Though it's pretty possible that when you will use inspect element you will find it different.<br>
                        Input: "My name is aman."<br>
                        <b><?php $code = '<?php $var="My name is Aman."; $repeat=5; echo "<br>".str_repeat($var,$repeat); ?>';highlight_string($code);?></b>
                        <br>Output: <?php $var="My name is Aman."; $repeat=5; echo "<br>".str_repeat($var,$repeat); ?>
                    </dd>
                </div>

            </dl>

            <h6 class="my-3 list-group-item list-group-item-success">In order! To be successfull to learn any language read documentation. Link --><a href="https://www.tutorialspoint.com/php/php_environment.htm" target="_blank" style="text-decoration: none;">Documentation</a></h6>
            <br>
            <h3 class="my-3">Operators in PHP</h3>
            <dl class="my-1">
                <div class="list-group-item list-group-item-info">
                    <dt>1. Arithmetic</dt>
                    <dd>
                    +,-,/,*,%, these are all arithmetic operators.<br>
                    <b><?php $code = '
<?php 
    $a=2; $b=7;
    echo "Sum = ".($a + $b)."<br>";
    echo "Subtraction = ".($a - $b)."<br>";
    echo "Multiplication = ".($a * $b)."<br>";
    echo "Division = ".($a / $b)."<br>";
    echo "Modulous = ".($a % $b)."<br>";
?>';highlight_string($code);?></b><br>
                        Output: <br><?php 
                            $a=2; $b=7;
                            echo "Sum = ".($a + $b)."<br>";
                            echo "Subtraction = ".($a - $b)."<br>";
                            echo "Multiplication = ".($a * $b)."<br>";
                            echo "Power a^b = ".($a ** $b)."<br>";
                            echo "Division = ".($a / $b)."<br>";
                            echo "Modulous = ".($a % $b)."<br>";
                        ?>
                    </dd>
                </div>

                <div class="list-group-item list-group-item-light">
                    <dt>2. Logical</dt>
                    <dd>
                    and, or,not these are all arithmetic operators.<br>
                    <b><?php $code = '
<?php 
    $a=true; $b=false;
    echo "a and b = ".var_dump($a and $b)."<br>";
    echo "a or b = ".var_dump($a or $b)."<br>";
    echo "not a = ".var_dump(!$a)."<br>";
?>';highlight_string($code);?></b><br>
                        Output: <br><?php 
                            $a=true; $b=false;
                            echo "= a and b".var_dump($a and $b)."<br>";
                            echo "= a or b".var_dump($a or $b)."<br>";
                            echo "= not a".var_dump(!$a)."<br>";
                        ?>
                    </dd>
                </div>

                <div class="list-group-item list-group-item-info">
                    <dt>2. Comparison and Assignment</dt>
                    <dd>
                    <,>,<>,= all these are assignment operators.<br>
                    <b><?php $code = '
<?php
    $a=5; $b=9;
    echo "a > b = ".($a > $b)."<br>";
    echo "a < b = ".($a < $b)."<br>";
    echo "a <> b <-- not equal = ".($a <> $b)."<br>";
?>';highlight_string($code);?></b><br>
                        Output: <br><?php 
                            $a=5; $b=9;
                            echo "a > b = ".($a > $b)."<br>";
                            echo "a < b = ".($a < $b)."<br>";
                            echo "a <> b <-- not equal = ".($a <> $b)."<br>";
                        ?>
                    </dd>
                </div>

            </dl>
            <h4 class="my-3 list-group-item list-group-item-danger">In PHP!!! You will not get any ouput if it's a false case. So, don't worry.</h4>
            <dl class="my-1">
                <div class="list-group-item list-group-item-info">
                    <dt>Conditional Statements --> if, else, elseif</dt>
                    <dd>
                    if, else and elseif are conditional statements in PHP. It's like a block of code that get's executed when a particular condition occurs. You will 
                    understand better through examples. We can define conditions for if and elseif but else has no condition. It get's executed when there is no case condition being 
                    met.<br>
                    <b><?php $code = '
<?php 
    $a=2; $b=7;
    if($a > $b){echo "a is greater than b.<br>";}
    elseif($a < $b){echo "b is greater than a.<br>";}
    else{echo "a equals b.<br>";}
?>';highlight_string($code);?></b><br>
                        Output: <br><?php 
                            $a=2; $b=7;
                            if($a > $b){echo "a is greater than b.<br>";}
                            elseif($a < $b){echo "b is greater than a.<br>";}
                            else{echo "a equals b.<br>";}
                        ?>
                    </dd>
                </div>

                <div class="list-group-item list-group-item-light">
                    <dt>Conditional Statements --> Switch</dt>
                    <dd>
                    Switch Statements are also conditional statements in PHP. It's like a block of code that get's executed when a particular condition occurs during fall of 
                    through of the falling case of matching case. You will understand better through examples. <br>
                    <b><?php $code = '
<?php
    $d = date("D");
         
    switch ($d){
    case "Mon":
        echo "Today is Monday";
        break;

    case "Tue":
        echo "Today is Tuesday";
        break;

    case "Wed":
        echo "Today is Wednesday";
        break;

    case "Thu":
        echo "Today is Thursday";
        break;

    case "Fri":
        echo "Today is Friday";
        break;

    case "Sat":
        echo "Today is Saturday";
        break;

    case "Sun":
        echo "Today is Sunday";
        break;

    default:
        echo "Wonder which day is this ?";
            }
?>';highlight_string($code);?></b><br>
                        Output: <br><?php
                                        $d = date("D");
         
                                        switch ($d){
                                            case "Mon":
                                                echo "Today is Monday";
                                                break;
            
                                            case "Tue":
                                                echo "Today is Tuesday";
                                                break;
            
                                            case "Wed":
                                                echo "Today is Wednesday";
                                                break;
            
                                            case "Thu":
                                                echo "Today is Thursday";
                                                break;
            
                                            case "Fri":
                                                echo "Today is Friday";
                                                break;
            
                                            case "Sat":
                                                echo "Today is Saturday";
                                                break;
            
                                            case "Sun":
                                                echo "Today is Sunday";
                                                break;
            
                                            default:
                                                echo "Wonder which day is this ?";
                                                    }
                                    ?>
                    </dd>
                </div>

            </dl>
            <br><br>

            <!-- Button trigger modal -->
            <div class="list-group-item list-group-item-danger shadow-lg p-3 mb-5 bg-white rounded"><h3>Loops in PHP</h3>(click on the button to view details.)
            <hr>
            <button type="button" style="margin: 5px;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">While Loop</button>
            <button type="button" style="margin: 5px;" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal2">For Loop</button>
            <button type="button" style="margin: 5px;" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal3">Do While Loop</button>
            <button type="button" style="margin: 5px;" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal4">For each Loop</button>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">While Loop</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <b>Code:<br><?php $code = '
<?php 
    $a = 0;
    while($a < 5)
        {
            echo ($a+1)."<br>";
            $a+=1;
        }
?>';highlight_string($code);?></b><br>
                <hr>
                Output: <br><?php $a = 0; while($a < 5) {echo ($a+1)."<br>";$a+=1;}?>
                <hr>while(condition){/* Statements */} loop allows you to repeatatively perform or iterate over a set of statements continuously as long as the given condition is met and braks the loop as 
                the condition in () turns false. It is an entry controlled loop.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">For Loop</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <b>Code:<br><?php $code = '
<?php 
    for($i=0; $i<5;$i++)
        {
            echo ($i+1)."<br>";
        }
?>';highlight_string($code);?></b><br>
                <hr>
                Output: <br><?php for($i=0; $i<5;$i++){ echo ($i+1)."<br>"; }?>
                <hr>for(variable_initialisation;condition for limit value of variable;increment/decrement_value_by){/* Statements */} loop allows you to repeatatively perform or iterate over a set of statements continuously
                untill the specified limit of variable is not reached. As the limit is reached loop gets terminated. It is an entry controlled loop.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Do While Loop</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <b>Code:<br><?php $code = '
<?php 
    $a = 0;
    do{
        echo ($a+1)."<br>";
        $a+=1;
        }while($a < 5)
?>';highlight_string($code);?></b><br>
                Output: <br><?php $a = 0; do{ echo ($a+1)."<br>"; $a+=1; }while($a < 5)?>
                <hr>do{/* Statements */} loop allows you to repeatatively perform or iterate over a set of statements continuously as long as the given condition is met and braks the loop as 
                the condition in () turns false, but there's a difference i.e. the loop runs at least once even if the condition is not met, i.e. it is checked after 1st loop is completed. It is a exit controlled loop.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">For each Loop</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <b>Code:<br><?php $code = '
<?php 
    $arr=array("Aman","Kritika","Chotti","Arnav"); 
    foreach ($arr as $value)
        { echo "$value <br>"; } 
?>';highlight_string($code);?></b><br>
                Output: <br><?php $arr=array("Aman","Kritika","Chotti","Arnav"); foreach ($arr as $value){ echo "$value <br>"; } ?>
                <hr>foreach(iterating variable as main_variable){/* Statements */} loop allows you to repeatatively perform or iterate over a set of statements continuously
                untill the specified limit of variable is not reached. As the end is reached loop gets terminated. It is an entry controlled loop.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
            </div>
            <br>
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
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
</body>
</html>