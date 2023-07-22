<?php
require_once('header.php');
if (isset($_SESSION['UserInformation'])) {
    header("location:index.php");
    exit(); // Stop further execution
}
echo "<pre>";
print_r($_COOKIE);   
if(isset($_REQUEST['save']))
{
    if($_COOKIE['username']== $_REQUEST['username'] && $_COOKIE['password']==$_REQUEST['password'])
    {
        $_SESSION['UserInformation']=
        array($_REQUEST['username'],$_REQUEST['password']);
        header("location:index.php");//it will redirect you to other page
        echo "success";
    }
    else
    {
        echo "try again or inavalid username or password";
    }
}
echo "</pre>";

?>

<div class="container mt-4">
<h1>Login Page</h1>
<form action="" method="post">

<div class="col-md-4 mt-2">
    
    <input type="text" class="form-control"name="username"  placeholder="Enter Your username">
</div>
<!-- <div class="col-md-4 mt-2">
    <input type="email" class="form-control"name="email" placeholder="Enter Your email">
</div> -->
<div class="col-md-4 mt-2">
    <input type="password" class="form-control"name="password" placeholder="Enter Your password">
</div>
<div class="col-md-4 mt-2">
<button type="submit" class="btn btn-success" name="save">Submit</button>    
<button type="reset" class="btn btn-danger">Reset</button>    
</div>
</form>

</div>