<?php




class model
{

    public $connection;
    public function __construct()
    {
       
        try {
            $this->connection = new mysqli("localhost","root","","25_may_laravel");
            echo "success";
        } catch (\Throwable $th) {
            echo "Something went wrong";
        }
        
    }


    public function register()
    {
        echo "<pre>";
        print_r($_REQUEST);
        echo "</pre>";
    }



    public function select()
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


}


// $object = new model;
// $object->select();

?>