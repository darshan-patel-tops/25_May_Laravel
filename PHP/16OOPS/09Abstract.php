<?php



abstract class abstractclass
{
    abstract function pleaseusethis();
    public function functionname()
    {
        echo "Called function<br>";
    }


}

class inherited extends abstractclass
{
    public function pleaseusethis()
    {
        echo "okay";
    }
    function calling()
    {
        echo "calling <br>";
    }
}

$object = new inherited;

$object->pleaseusethis();



//when abstract method is declared you must have to use that in your child class or inherited class
?>