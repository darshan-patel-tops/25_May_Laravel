<?php


$username = "mohammed";
$password = "m@acg@692";
echo "<br>";
echo $username;
echo "<br>";
echo $password;
echo "<br>";
echo "<br>";

echo md5($password); // it is a one way encryption
echo "<br>";
// echo md5($enc);

echo "<br>";
echo "<br>";
echo base64_encode($username);
echo "<br>";
echo base64_decode("bW9oYW1tZWQ=");
// openssl_encrypt($username);
echo "<br>";
echo base64_encode($password);
echo "<br>";
echo base64_decode("bUBhY2dANjky");

?>