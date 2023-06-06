<?php


print_r($_FILES);
// if($_SERVER["REQUEST_METHOD"] == "post" && isset($_FILES["image"]))
if(isset($_FILES["image"]))
{

    echo"inside if";
    $file = $_FILES["image"];

    if($file["error"]== UPLOAD_ERR_OK)
    {
        $store = "image/";

        $targetfile = $store.uniqid()."_".$file["name"];

        if(move_uploaded_file($file["tmp_name"],$targetfile))
        {
            $_SESSION["products"][] =
            [
                "image"=>$targetfile ,
                "price"=>$_POST["price"]
            ];
            echo "product uploaded successfully";
        }
        else
        {
            echo"failed to add product";
        }
       

    }
    else
    {
        echo "error aagaya upload ke time".$file["error"];
    }
}

?>