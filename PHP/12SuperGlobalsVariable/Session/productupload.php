<?php


require('header.php');
// print_r($_FILES);

?>

<form action="productupload.php" method="post" enctype="multipart/form-data">

<input type="file" name="image">
<input type="text" name="price">
<button type="submit" name="save" class="btn btn-danger">Save</button>

</form>

<?php

echo"<pre>";
print_r($_FILES);
// if($_REQUEST["save"] && isset($_FILES["image"]))
if(isset($_FILES["image"]))
{
    
    // echo"inside if";
    $file = $_FILES["image"];
    
    if($file["error"]== UPLOAD_ERR_OK)
    {
        $store = "image/";
        
        $targetfile = $store.uniqid()."_".$file["name"];
        // move_uploaded_file()
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

print_r($_SESSION);

echo"</pre>";
?>