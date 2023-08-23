<?php

echo "<pre>";
print_r($response['data']);
// exit;
foreach($response['data'] as $user)
{
    echo $user->id."<br>";
    echo $user->username."<br>";
    echo $user->email."<br>";
    echo $user->mobile."<br>";
    echo $user->password."<br>";
    echo $user->role."<br>";
}
echo "</pre>";


?>