<?php
require_once('header.php');

// echo time();
if(isset($_REQUEST['save']))
{
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
setcookie("username",$_REQUEST['username'],time()+3600);
setcookie("email",$_REQUEST['email'],time()+3600);
setcookie("password",$_REQUEST['password'],time()+3600);
header("location:login.php");//it will redirect you to other page

}

?>

<div class="container mt-4">
<h1>Registration Page</h1>
<form action="" method="post">

<div class="col-md-4 mt-2">
    
    <input type="text" class="form-control"name="username"  placeholder="Enter Your username">
</div>
<div class="col-md-4 mt-2">
    <input type="email" class="form-control"name="email" placeholder="Enter Your email">
</div>
<div class="col-md-4 mt-2">
    <input type="password" class="form-control"name="password" placeholder="Enter Your password">
</div>
<div class="col-md-4 mt-2">
<button type="submit" class="btn btn-success" name="save">Submit</button>    
<button type="reset" class="btn btn-danger">Reset</button>    
</div>
</form>

</div>