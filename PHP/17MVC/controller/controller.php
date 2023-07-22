<?php


class controller
{
    public function __construct()
    {
        require_once("view/header.php");
        require_once("view/contact.php");
        require_once("view/footer.php");
    }
}
$object =  new controller;
?>