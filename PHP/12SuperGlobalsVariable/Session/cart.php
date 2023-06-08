<?php
require_once('header.php');
echo "<pre>";
// print_r($_SESSION['cartdata']);
echo "</pre>";

?>


<?php

if(isset($_SESSION['cartdata']))
{
    foreach($_SESSION['cartdata'] as $data)
    {
       ?>
       
        <tr>
            <td><?php echo $data['product']['price']?></td>
            <br>
        </tr>  
        <?php
    }?>
    <form action="" method="post">
        
        <button type="submit" name="cart">Empty Cart</button>
    </form>
    <?php
}

print_r($_SESSION['cartdata']);
?>

<h1>Cart Page</h1>


<?php

if(isset($_REQUEST['cart']))
{
    unset($_SESSION['cartdata']);
    header("location:product.php");
}


?>