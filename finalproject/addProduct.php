<?php
session_start();
if(!isset( $_SESSION['adminName']))
{
  header("Location:admin.php");
}
include "../dbConnection.php";
$conn = getDatabaseConnection("otterstyle");

function getCategories() {
    global $conn;
    
    $sql = "SELECT catId, catName from category ORDER BY catName";
    
    $statement = $conn->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach ($records as $record) {
        echo "<option value='".$record["catId"] ."'>". $record['catName'] ." </option>";
    }
}

function getdept() {
    global $conn;
    
    $sql = "SELECT brandId, brandName from brand ORDER BY brandName";
    
    $statement = $conn->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach ($records as $record) {
        echo "<option value='".$record["brandId"] ."'>". $record['brandName'] ." </option>";
    }
}

if (isset($_GET['submitProduct'])) {
    $productName = $_GET['productName'];
    $productDescription = $_GET['productDescription'];
    $productImage = $_GET['productImage'];
    $productColor = $_GET['productColor'];
    $productGender = $_GET['productGender'];
    $productPrice = $_GET['productPrice'];
    $productSize = $_GET['productSize'];
    $catId = $_GET['catId'];
    $brandId = $_GET['brandId'];

    

    
    $sql = "INSERT INTO product
            ( `productName`, `productDescription`, `productImage`, `productColor`, `productGender`, `productPrice` , `productSize` , `catId` , `brandId` ) 
             VALUES ( :productName, :productDescription, :productImage, :color, :productGender ,:price, :productSize , :catId , :brandId )";
    
    $namedParameters = array();
    $namedParameters[':productName'] = $productName;
    $namedParameters[':productDescription'] = $productDescription;
    $namedParameters[':productImage'] = $productImage;
    $namedParameters[':color'] = $productColor;
    $namedParameters[':productGender'] = $productGender;
    $namedParameters[':price'] = $productPrice;
    $namedParameters[':productSize'] = $productSize;
    $namedParameters[':catId'] = $catId;
    $namedParameters[':brandId'] = $brandId;
    
    
   
    
    $statement = $conn->prepare($sql);
    $statement->execute($namedParameters);
}



?>
<!DOCTYPE html>
<html>
    <head>
        <title> Add a product </title>
    </head>
    <style>
        @import url("css/styles.css");
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <body>
        <nav class='navbar navbar-default - navbar-fixed-top'>
                <div class='container-fluid'>
                    <div class='navbar-header'>
                        <a class='navbar-brand' href='#'>Otterstyle Shop</a>
                    </div>
                    <ul class='nav navbar-nav'>
                    </ul>
                </div>
            </nav>
            <br /> <br /> <br />
        <h1> Add a product</h1>
        <form>
            Product name: <input type="text" name="productName"><br>
            Description: <textarea name="productDescription" cols = 50 rows = 4></textarea><br>
            Price: <input type="text" name="productPrice"><br>
            Size: <input type = "text" name="productSize"><br>
            Color: <input type="text" name="productColor"><br>
            Gender:<input type="text" name="productGender"><br>
            Category: <select name="catId">
                <option value="">Select One</option>
                <?php getCategories(); ?>
            </select> <br />
            Brand: <select name="brandId">
                <option value="">Select One</option>
                <?php getdept(); ?>
            </select> <br />
            
            Set Image Url: <input type = "text" name = "productImage"><br>
            <input type="submit" name="submitProduct" value="Add Product">
            
        </form>
        <form action="admin.php">
        <input type="submit" value="Return" />
        </form>
        
        <a href='https://docs.google.com/document/d/1WElbO4i5K2nO3tdmix8sa-eI9od8Bs3VHh8S6MGG-tc/edit?usp=sharing' target='_blank'>
             Link to Documentation!
         </a>
        
        <footer>
            CST 336. 2018&copy; Martinez<br/>
            <strong>Disclaimer:</strong> The information in this webpage is fictitious. <br/>
            <small>It is used for academic purposes only.</small>
            <br/>
            <img src="img/csumb-logo.png" alt="csumb logo photo"/>
            <br/>
        </footer>
    </body>
</html>