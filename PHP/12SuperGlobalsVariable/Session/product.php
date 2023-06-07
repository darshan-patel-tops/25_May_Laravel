<?php
// session_start();
require_once('header.php');
echo"<pre>";
if(isset($_REQUEST['add']))
{
    print_r($_REQUEST);
}
// print_r($_SESSION);
echo"</pre>";
if(isset($_SESSION["products"]))
{
    $products = $_SESSION["products"];


    foreach($products as $product)
    {
    ?>
        <form action="" method="post">

            <?php
        echo '<div  class="mx-auto" style="width: 200px;" mt-5>';
        echo '<img src="'.$product["image"].'"alt="product image" height="100px" width="100px">';
        echo '<p>product price:'. $product["price"].'</p>';
        echo "<input name='price' type=hidden value= ".$product['price'] .">";
        echo '<button type="submit" class="btn btn-sm  btn-primary" name="add"> Add To Cart <button>';
        // echo"";
        echo '</div>';
    }?>

    </form>
<?php 

}
else
{
    echo "no product available";
}
?>

<!-- <h1>Product Page</h1> -->

