<?php
require_once('header.php');



?>

<?php

if(isset($_SESSION['cartdata']))
{
    foreach($_SESSION['cartdata'] as $data)
    {
       ?>
        <tr>
            <td><?php echo $data['price']?></td>
        </tr>       
       <?php
    }
}

?>

<h1>Cart Page</h1>