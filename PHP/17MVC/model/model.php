<?php




class model
{

    public $connection;
    public function __construct()
    {
       
        try {
            $this->connection = new mysqli("localhost","root","","25_may_laravel");
            // echo "success";
        } catch (\Throwable $th) {
            echo "Something went wrong";
        }
        
    }

    public function login($data)
    {
        // print_r($data);


        if($data)
        {
            $sql = "select * from users where (email='$data[username]' or username = '$data[username]' or mobile = '$data[username]')
            and password = '$data[password]'";
            // echo $sql;
            $sqlex = $this->connection->query($sql);
            echo "<pre>";
            // print_r($sqlex);
                if($sqlex->num_rows>0)
                {
                    // echo "Success";

                    $fecthdata = $sqlex->fetch_object();
                    // print_r($fecthdata);
                        if($fecthdata->role == 1)
                        {
                            header("location:admin-dashboard");
                        }
                        else
                        {
                            header("location:home");

                        }
                }
                else
                {
                    echo "<script>alert('username or password is incorrect') </script>";
                }
        
        }
    }
    public function register($data)
    {
        // echo "<pre>";
        // print_r($_REQUEST);
        // echo "</pre>";
    
        if($data)
        {
            echo "<pre>";
            // echo "inside if";
            echo "<br>";
            // print_r($data);
            array_pop($data);
            // print_r(array_keys($data));
            $keysdata = implode(",",array_keys($data));
            $valuedata = implode("','",array_values($data));
            // echo $keysdata;
            echo "<br>";
            // echo $valuedata;
            echo "<br>";
            // $name = $_REQUEST['name'];
            // $password = $_REQUEST['password'];
            // $email = $_REQUEST['email'];
            // $mobile = $_REQUEST['mobile'];
            // $sql = "insert into user (name,password,email,mobile)" .
            // "values ('".$name . "','".$password."" . "','".$email."" . "','".$mobile."')";
            // // $value = "values ('".$name . "','".$password."" . "','".$email."" . "','".$mobile."')"  ;
            // echo $sql;
            
            echo "<br>";
            $SQL = "insert into users ($keysdata) VALUES ('$valuedata') ";
            // echo $SQL;

            // $query = $sql.$value;
            // echo $query;
            $this->connection->query($SQL); //this is how you perform query
            header("location:login");
            echo "</pre>";

        }
        else
        {
            // echo "No data found";
        }   
    
    }


    public function select($table)
    {
        // echo "<pre>";
        $sql = "SELECT * from $table";
        // echo $sql;

        $sqlex = $this->connection->query($sql);
        // print_r($sqlex);

        if($sqlex->num_rows>0)
        {
            while($fetch = $sqlex->fetch_object())
            {
                $fetchdata[] = $fetch;
            }
            $response["code"] = "1";
            $response["status"] = "success";
            $response["data"] = $fetchdata;
        }
        else
        {
            $response["code"] = "0";
            $response["status"] = "Fail";
            $response["data"] = 0;

        }
        // print_r($response);
        return $response;
        // exit;
    }

    public function selectusers()
    {
        echo "<br>";
        $sql = "select * from users";
        echo $sql;
        
        echo "<br>";
        $sqlex = $this->connection->query($sql);
        print_r($sqlex);

        if($sqlex->num_rows>0)
        {   
            echo "<pre>";
            // print_r($sqlex->fetch_object());
            print_r($sqlex->fetch_all());
            echo "</pre>";
        }
        else
        {
            echo "no data found";
        }
    }

public function delete($id,$tbl)
{
    // echo $id;
    // echo $tbl;
    // exit;

    $sql = "DELETE FROM $tbl WHERE id = $id";
    $this->connection->query($sql);
    header("location:user");
}
}


// $object = new model;
// $object->select();

?>