<?php

require_once("model/model.php");

class controller extends model
{

    public function __construct()
    {
        parent::__construct();
        if(isset($_SERVER['PATH_INFO']))
        {
            // $this->select();
            
            echo " <pre>";
            // echo "inside if";
            // print_r($_SERVER);
            // print_r(getenv());
            echo " </pre>";
            switch($_SERVER['PATH_INFO'])
            {
                case '/home':
                    require_once("view/header.php");
                    require_once("view/index.php");
                    require_once("view/footer.php");
                    break;

                case '/contact':
                    require_once("view/header.php");
                    require_once("view/contact.php");
                    require_once("view/footer.php");
                    break;

                case '/about':
                    require_once("view/header.php");
                    // require_once("view/about.php");
                    echo "<h1>About page</h1>";
                    require_once("view/footer.php");
                    break;


            }


        }
        else
        {
            header("location:home");
        }


    }
}
$object =  new controller;
?>