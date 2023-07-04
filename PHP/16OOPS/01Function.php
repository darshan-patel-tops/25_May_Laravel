<?php

//User Defined Function
//System Defined Function or Pre-Defined Function
//int main() is a udf

function call()
{
    echo "called<br>";
}

call();
// call();
// call();
// call();


echo "<br>";


function addition($a,$b) //parameter is the one we receive
{
    echo $a+$b;
    $name1="Raj";
    $name2="Deep";
    echo $name1;
    echo $name2;
}
$a = 18;
$b = 16;
$z = 100;
$x = 200;
addition($a,$b); //arguement is the one we send
echo "<br>";
addition($x,$z); //arguement is the one we send
echo "<br>";
addition(78,45); //arguement is the one we send
echo "<br>";
addition(7,9); //arguement is the one we send

?>