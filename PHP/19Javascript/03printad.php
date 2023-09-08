<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<div id="name"></div>

<div id="info"></div>

<p>PHP is a general-purpose scripting language geared 
    towards web development. It was originally created by Danish-Canadian programmer 
    Rasmus Lerdorf in 1993 and released in 1995. The PHP reference implementation is now produced by the PHP Group.</p>

<br>
<br>
<br>
<br>

<div id="course_info"></div>


<script>



name = "Mohammed"
course = "PHP"

document.getElementById("name").innerHTML = "<h1>Welcome <br> "+name+" <br> bye</h1>";

document.getElementById("info").innerHTML = "Hello "+ name + " Your Course is : "+ course

// document.getElementById("course_info").innerHTML = "PHP is a general-purpose scripting language geared " +name


// document.getElementById("course_info").innerHTML = 'PHP is a general-purpose scripting language geared 
// towards web development. It was originally created by Danish-Canadian programmer 
// Rasmus Lerdorf in 1993 and released in 1995. The PHP reference implementation is 
// now produced by the PHP Group.'

document.getElementById("course_info").innerHTML = `PHP is a general-purpose scripting language geared 
towards web development. It was originally created by Danish-Canadian programmer 
Rasmus Lerdorf in 1993 and rele"""""" '''''''''  ased in 1995. The PHP reference implementation is 
now produced by the PHP Group.    student name is : ${name} and his course is : ${course}`







</script>
    
</body>
</html>