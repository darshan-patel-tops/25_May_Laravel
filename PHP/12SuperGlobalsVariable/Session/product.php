<?php
// session_start();
require_once('header.php');
echo"<pre>";
print_r($_SESSION);
echo"</pre>";
if(isset($_SESSION["products"]))
{
    $products = $_SESSION["products"];


    foreach($products as $product)
    {
        echo '<div class="product">';
        echo '<img src="'.$product["image"].'"alt="product image" height="100px" width="100px">';
        echo '<p>product price:'. $product["price"].'</p>';
        // echo"";
        echo '</div>';
    }


}
else
{
    echo "no product available";
}
?>

<!-- <h1>Product Page</h1> -->

