<?php
// session_start();
require_once('header.php');
echo"<pre>";
if(isset($_REQUEST['add']))
{
    // print_r($_REQUEST);
    $_SESSION['cartdata'][] = array("product"=>array("price"=>$_REQUEST['price']));
    print_r($_SESSION['cartdata']);
}
// print_r($_SESSION);
echo"</pre>";
if(isset($_SESSION["products"]))
{
    $products = $_SESSION["products"];


    foreach($products as $product)
    {
        ?>
        <div class="card" style="width: 18rem;">
  <img src="image/647f041f9b3b0_max-saeling--uUtFs3ChP4-unsplash (1).jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->

    <form action="" method="post">
        <input type="text" name="price" value="50000">
        <input type="submit" name="add">

    </form>
  </div>
</div>
<?php
    }

}
else
{
    echo "no product available";
}
?>

<!-- <h1>Product Page</h1> -->

