<?php


if(isset($_POST['credentials'])) {
    
$username = $_POST['username']; 
$password = $_POST['password'];

//echo $username . " " . $password;
$names = ["Edwin", "Student", "Peter", "Mohad", "Jane", "Tom"];  
$minimum = 5;
$maximum = 10;
    
  if(strlen($username) < $minimum) {
    
    echo "Username has to be longer than five characters";
  }

  if(strlen($username) > $maximum) {
    
    echo "Username can not be longer than ten characters";
  }

  if(!in_array($username,$names)) {
    
    echo "Sorry you are not allowed";
      
  } else {
      
    echo "Welcome";  
  } 
    
    
}



?>