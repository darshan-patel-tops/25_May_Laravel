<?php


$name = array("a"=>"Peter","z"=>"Thor","c"=>"Iron Man","q"=>"Captain");
$age = array("a"=>21,"z"=>100,"o"=>2000,"c"=>55);

//Length should be Equal
$newarray = (array_combine($name,$age));
print_r($newarray);
echo "<br>";
print_r(array_merge($name,$age));
//It will overwrite the last value
?>