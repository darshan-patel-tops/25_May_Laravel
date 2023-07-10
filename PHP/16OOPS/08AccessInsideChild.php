<?php


class inherit1
{
    public $water = "water<br>";
    protected $juice = "juice<br>";

    private $black_water = "black_water<br>";

    // $water1 = "water1";
    function accessinsideparent()
    {
        // echo $water1;
        echo "inside parent<br>";
        //Whenever we want to access any data member and member function we use '$this->'
        echo $this->water;
        echo $this->juice;
        echo $this->black_water;
    }
}

class inehrit2 extends inherit1
{
    function accessinsidechild()
    {
        echo "inside child<br>";
        echo $this->water;
        echo $this->juice;
        echo $this->black_water;
        }
}

// $object = new inherit1;
// $object->access();
$object =  new inehrit2;
$object->accessinsideparent();
// $object->accessinsidechild();




?>