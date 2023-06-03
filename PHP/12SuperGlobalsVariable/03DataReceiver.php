<?php

// $_GET['usernam']

//isset (it checks wheather it exists or not)

echo "<pre>";

if(isset($_GET['button']))
{
    echo"<br>";
    echo"<br>";
    echo"get method<br>";
    print_r($_GET);
    echo $_GET['username']."<br>";
    echo $_GET['password']."<br>";
    echo $_GET['email']."<br>";
}

//Get Method is not secure to send sensitive data (Sehad Ke liye hanikarak hai)
//It will show data only from url
//It has restriction
//1. File Cannot Be sent
//2. Limitation of Character


if(isset($_POST['button']))
{
    echo"<br>";
    echo"<br>";
    echo"post method<br>";
    echo"<br>";
    print_r($_POST);
    // echo $_POST['username']."<br>";
    // echo $_POST['password']."<br>";
    // echo $_POST['email']."<br>"; 
}
//Post Method is safe secure and you can send sensitive data
//Database limit is equal to the post method
//File Can only be sent through post method(Html Wali)

if(isset($_REQUEST['button']))
{
    echo"<br>";
    echo"<br>";
    echo"request method<br>";
    echo"<br>";
    print_r($_REQUEST);
    // echo $_REQUEST['username']."<br>";
    // echo $_REQUEST['password']."<br>";
    // echo $_REQUEST['email']."<br>"; 
}

print_r($_FILES);

print_r($GLOBALS);
echo "</pre>";





?>

<h1>Input Form:</h1>

<form action="" method="post" enctype="multipart/form-data">
<!-- <form action="" method="post"> -->

    <!-- <input type="text" name="username" id="username" placeholder="Enter Your Username"> -->
    <input type="email" name="email" placeholder="Enter Email">
    <input type="password" name="password" placeholder="Enter Your Password">
    <input type="file" name="file">
    <button type="submit" name="button">Submit</button>

</form>