<?php
    include '../../dbConnection.php';
    $conn = getDatabaseConnection("ottermart");
    $productId = $_GET['productId'];
    
        function displayCategories(){
        global $conn;
        
          
        
       $sql = "SELECT * FROM `om_product`
            NATURAL JOIN om_purchase 
            WHERE productId = $productId";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        
        echo $records[0]['productName'] . "<br>";
        echo "<img src='" . $records[0]['productImage'] . "' width='200' /><br/>";
        
        foreach($records as $record){
        
        echo "Purchase Date: " . $record["purchaseDate"] . "<br />";
        echo "Unit Price: " . $record["unitPrice"] . "<br />";
        echo "Quantity: " . $record["quantity"] . "<br />";
        
        }
     



?>




<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>

    </body>
</html>