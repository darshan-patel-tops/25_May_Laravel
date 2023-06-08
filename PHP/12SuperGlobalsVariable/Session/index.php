<?php

// require('header.php');//so it will bring pages as many times as you request in require
// require('header1.php');//it will terminate the script 
// require('header.php');
// require('header.php');

// require_once('header.php'); // it will only bring file one time 
// require_once('header.php');//will terminate script
// require_once('header1.php');
// require_once('header32.php');


// include('header1.php');//it will bring pages as many times as you call it
// include('header1.php'); // even if there is error then it will give warning then carry on
// include('header.php');
// include('header.php');

// include_once('header1.php');//it will only bring file one time
// include_once('header1.php');//will generate warning and carry on
// include_once('header.php');
// include_once('header.php');


require_once('header.php');

echo "<pre>";
print_r($_SESSION);
echo "</pre>";
// echo "Welcome $_SESSION[UserInformation][username]";
print_r("Welcome ".$_SESSION['UserInformation'][0] . " And Your Password is". $_SESSION['UserInformation'][1]);
?>




<h1>Home Page</h1>

<!-- CRUD -->
<!-- 1 create
2 read
3 update
4 delete -->