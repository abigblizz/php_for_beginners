<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
//regular array       position value pair
$number = [10, 20, 49];
print_r($number);
echo "<br>";   
echo $number[2] . "<br>";
//associative array   named key value pair
$names = ["first_name" => 'Edwin', "last_name" => 'Rodriguez'];
    
print_r($names);
echo "<br>";
echo $names['first_name'] . " " . $names['last_name'];
?>
</body>
</html>