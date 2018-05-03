<?php

 include '../dbConnection.php';
    
 $connection = getDatabaseConnection("otterstyle");
    
 $sql = "DELETE FROM product WHERE productId =  " . $_GET['productId'];
 $statement = $connection->prepare($sql);
 $statement->execute();
 
 header("Location: admin.php");
?>