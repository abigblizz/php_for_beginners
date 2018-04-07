 <?php include "db.php"; ?>
 <?php

function showAllData() {
   global $connection;  // allows for $connection variable to be brought into function from db.php
       
   $query = "SELECT * FROM users"; 
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die('Query failed' . mysqli_error());
    }

    while ($row = mysqli_fetch_assoc($result)) {
        $id= $row['id'];
                  
        echo "<option value=''>$id</option>";
                  
    }
    
}