<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



    <form action="" method="post">
        <input type="text" name="username" id="username" placeholder="Enter Your Username" onblur="checkusername()">
        <input type="text" name="email" id="email" placeholder="Enter Your Email" >
    </form>



        <script>
            function checkusername()
            {
                // console.log("inside function");
                 check = document.getElementById("username").value
                 console.log(check);
            }




        </script>


</body>
</html>