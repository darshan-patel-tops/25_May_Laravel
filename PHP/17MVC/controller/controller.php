<?php

require_once("model/model.php");

class controller extends model
{
    public $userurl = "http://localhost/Batches/25_May_Laravel/PHP/17MVC/assets/";
    public $adminurl = "http://localhost/Batches/25_May_Laravel/PHP/17MVC/assets/admins";

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
                case '/admin-dashboard':
                    require_once("view/admin/header.php");
                    // require_once("view/index.php");
                    require_once("view/admin/footer.php");
                    break;
                case '/admin/user':

                    $response = $this->select("users");
                    if(isset($_REQUEST['delete_btn']))
                    {
                            $this->delete($_REQUEST['delete_btn'],"users");
                        }
                        require_once("view/admin/header.php");
                        require_once("view/admin/allusers.php");
                        // require_once("view/index.php");
                        // print_r($_REQUEST);
                    echo "User Page";
                    require_once("view/admin/footer.php");
                    break;
                
                    case '/admin/update':
                        print_r($_REQUEST);
                        if(isset($_POST["update_btn"]))
                        {
                            echo "inside if";
                            $data = array(
                               "username" => $_REQUEST["username"],
                               "email" => $_REQUEST["email"],
                               "mobile" => $_REQUEST["mobile"],
                                "password" => $_REQUEST["password"],
                            );

                            $res = $this->update('users',$data,array("id"=>$_REQUEST['id']));

                            if($res["code"]=="1")
                            {
                                header("location:user");
                            }
                            else
                            {
                                echo "<script> alert('Error while inserting some data try again!!!!!')   </script>";
                            }
                        }

                        break;
                case '/admin/update-user':
                        // print_r($_REQUEST);
                        if(isset($_REQUEST['id']))
                        {
                                $data = $this->selectwhere("users",$_REQUEST);
                        }
                        // print_r($data);
                        // exit;
                        require_once("view/admin/header.php");
                        require_once("view/admin/edituser.php");
                        require_once("view/admin/footer.php");

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

                case '/login':

                    echo "<pre>";
                    // print_r($_REQUEST);
                    echo "</pre>";
                    $data = $_REQUEST;
                    $this->login($data);
                    require_once("view/login.php");
                    break;


                case '/register':

                    if(isset($_REQUEST["reg_button"]))
                    {
                        // echo "<pre>";
                        // print_r($_REQUEST);
                        // echo "</pre>";
                        $data = $_REQUEST;
                        $this->register($data);
                    }
                    require_once("view/register.php");
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