<?php
// this page is using bootstrap in the html code to create
// a login form.  the php is simply grabbing everything 
// that is entered in username and password field
if(isset($_POST['submit'])) {
    
//echo "yes we got it";
$username = $_POST['username'];
$password = $_POST['password'];
//                             host, username, password, database  
$connection = mysqli_connect('localhost', 'root', 'root', 'loginapp');
    if ($connection) {
        echo "We are connected";
    } else {
        die("Database connection failed");
    }
    
    $query = "INSERT INTO users(username, password)";
    $query .= "VALUES('$username','$password')";
    
    $result = mysqli_query($connection, $query);
    
    if(!$result) {
        
        die('Query failed' . mysqli_error());
        
    }
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
      <form action="login_create.php" method="post">
          <div class="form-group">
          <label for="username">Username</label>
              <input type="text" name="username" class="form-control">
          </div>
          
          <div class="form-group">
          <label for="password">Password</label>
              <input type="password" name="password" class="form-control">
          </div>
          
          <input class="btn btn-primary" type="submit" name="submit" value="Submit">
          
      </form>
       
       
   </div>
</div>
</body>
</html>