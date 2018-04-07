<?php
// this page is using bootstrap in the html code to create
// a login form.  the php is simply grabbing everything 
// that is entered in username and password field

//                             host, username, password, database  
$connection = mysqli_connect('localhost', 'root', 'root', 'loginapp');
    if ($connection) {
        echo "We are connected";
    } else {
        die("Database connection failed");
    }
    
    $query = "SELECT * FROM users";
    
    
    $result = mysqli_query($connection, $query);
    
    if(!$result) {
        
        die('Query failed' . mysqli_error());
        
    }


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 
</head>
<body>
<div class="container">
   
    <div class="col-sm-6">
    <?php
    
    //while($row = mysqli_fetch_row($result)) {
    while($row = mysqli_fetch_assoc($result)) {
        
        ?>
        <pre>
        
        <?php
        print_r($row);
        ?>
        
        </pre>
        
        <?php
    }
       
       
    ?>           
    </div>
</div>
</body>
</html>