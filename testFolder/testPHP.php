<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p style="color: hotpink; font-size: 25px;">This is an html in a php file</p>
</body>
</html>

<script>
alert("This is a Javascript inside the PHP file");
</script>
<?php echo"This is a php tag"?>

<?php

//Everything here becomes PHP for a comment

/*Another comment
another comment 
multiple line comment*/

echo "This is a PHP text";

echo 45;

echo "<p>This is an HTML paragraph</p>";

?>
<?php
/*What are variables
Values = Text/String or <numberor int*/
$name =     "Rebecca";
$age =      32;
$country =  Ireland;
$password = '1234';
$minLenofPassword = 4;

if(strlen($password) < $minLenofPassword){
    echo "Your Password does not meet the length requirement";
}else{
    echo "Your name is " . $name . ",your password meets the requirements, you are from " . $country . " and you are " . $age .
" years old.";
}








