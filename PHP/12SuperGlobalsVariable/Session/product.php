<?php
require_once('header.php');
echo "<pre>";
// print_r($_SESSION);

if (isset($_REQUEST['add'])) 
{
    print_r($_REQUEST);

    // if (!isset($_SESSION['cartdata'])) {
    //     $_SESSION['cartdata'][] = array();
    // }

    $productData = array("product" => array("price" => $_REQUEST['price']));

    $_SESSION['cartdata'][] = $productData;

    print_r($_SESSION['cartdata']);
}
echo "</pre>";
if (isset($_SESSION["products"])) 
{
    $products = $_SESSION["products"];

    foreach ($products as $product) 
    {
        ?>
        <form action="" method="post">

            <?php
            echo '<div class="mx-auto" style="width: 200px;" mt-5>';
            echo '<img src="' . $product["image"] . '" alt="product image" height="100px" width="100px">';
            echo '<p>product price:' . $product["price"] . '</p>';
            echo "<input name='price' type='hidden' value='" . $product['price'] . "'>";
            echo '<button type="submit" class="btn btn-sm btn-primary" name="add">Add To Cart</button>';
            echo '</div>';
            ?>

        </form>
        <?php
    }
} 
else 
{
    echo "no product available";
}
?>
