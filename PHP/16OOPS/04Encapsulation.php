<?php


class mobile
{

    // Encapsulation means wrapping up the data in a single unit
    public function call()
    {
        echo "call<br>";
    }
    public function sms()
    {
        echo "sms<br>";
    }
    public function camera()
    {
        echo "camera<br>";
    }
    public function youtube()
    {
        echo "youtube<br>";
    }
}

$kuchbhi = new mobile;
$kuchbhi->call();
$kuchbhi->youtube();
$kuchbhi->sms();
$kuchbhi->camera();


?>