<?php


class mobile
{
    //Class consists of data member and member function only
    //it consists of variables and functions

   public $variable = 1;  //Data Member
    public function call() //Member Function
    {
        echo "call<br>";
    }

    public function sms()
    {
        echo "sms<br>";
    }
    public function music()
    {
        echo "music<br>";
    }
    public function youtube()
    {
        echo "Youtube<br>";
    }
}



// call();
$object = new mobile;

//Type Hinting
$object->call();
$object->sms();
$object->music();
$object->youtube();






?>