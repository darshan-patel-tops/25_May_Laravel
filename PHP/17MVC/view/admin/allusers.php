<?php

// echo "<pre>";
// print_r($response['data']);
// // exit;
// foreach($response['data'] as $user)
// {
//     echo $user->id."<br>";
//     echo $user->username."<br>";
//     echo $user->email."<br>";
//     echo $user->mobile."<br>";
//     echo $user->password."<br>";
//     echo $user->role."<br>";
// }
// echo "</pre>";


?>




<table class="table">
    <thead>


    <tr>
        <th scope="col">Id</th>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col">Mobile</th>
        <th scope="col">Role</th>
        <th scope="col">Action</th>
    </tr>
    </thead>

<tbody>
<?php   foreach($response['data'] as $user)
{
    ?>
<tr>
    <td><?php echo $user->id;?></td>
    <td><?php echo $user->username;?></td>
    <td><?php echo $user->email;?></td>
    <td><?php echo $user->password;?></td>
    <td><?php echo $user->mobile;?></td>
    <td><?php echo $user->role;?></td>
    <td>

    <form action="update-user" method="post">
            
        <a href="update-user">
            <button class="btn btn-sm btn-success" name="id" value="<?php echo $user->id; ?>" >Update</button>
        </a>
    
    </form>

    <form action="" method="post">
        <a href="">
            <button class="btn btn-sm btn-danger" name="delete_btn" value="<?php echo $user->id; ?>" >Delete</button>
        </a>
    </form>

    </td>
</tr>
<?php  }?>

</tbody>

</table>