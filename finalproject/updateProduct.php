<?php
    include '../dbConnection.php';
    
    $connection = getDatabaseConnection("otterstyle");
    
    function getCategories($catId) {
    global $connection;
    
    $sql = "SELECT catId, catName from category ORDER BY catName";
    
    $statement = $connection->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach ($records as $record) {
        echo "<option  ";
        echo ($record["catId"] == $catId)? "selected": ""; 
        echo " value='".$record["catId"] ."'>". $record['catName'] ." </option>";
    }
}
    
        function getbrand($brandId) {
    global $connection;
    
    $sql = "SELECT brandId, brandName from brand ORDER BY brandName";
    
    $statement = $connection->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach ($records as $record) {
        echo "<option  ";
        echo ($record["brandId"] == $brandId)? "selected": ""; 
        echo " value='".$record["brandId"] ."'>". $record['brandName'] ." </option>";
    }
}
    
    function getProductInfo()
    {
        global $connection;
        $sql = "SELECT * FROM product WHERE productId = " . $_GET['productId'];
    
        //echo $_GET["productId"];
        
        $statement = $connection->prepare($sql);
        $statement->execute();
        $record = $statement->fetch(PDO::FETCH_ASSOC);
        
        return $record;
    }
    
    
    if (isset($_GET['updateProduct'])) {
        
        //echo "Trying to update the product!";
        
        $sql = "UPDATE product
                SET productName = :productName,
                    productDescription = :productDescription,
                    productImage = :productImage,
                    productColor = :productColor,
                    productGender = :productGender,
                    productPrice = :price,
                    productSize = :productSize,
                    catId = :catId,
                    brandId = :brandId
                WHERE productId = :productId";
        $np = array();
        $np[":productName"] = $_GET['productName'];
        $np[":productDescription"] = $_GET['description'];
        $np[":productImage"] = $_GET['productImage'];
        $np[":productColor"] = $_GET['productColor'];
        $np[":productGender"] = $_GET['productGender'];
        $np[":price"] = $_GET['productPrice'];
        $np[":productSize"] = $_GET['productSize'];
        $np[":catId"] = $_GET['catId'];
        $np[":brandId"] = $_GET['brandId'];
        $np[":productId"] = $_GET['productId'];
                
        $statement = $connection->prepare($sql);
        $statement->execute($np);        

        
    }
    
    
    if(isset ($_GET['productId']))
    {
        $product = getProductInfo();
    }
    
    //print_r($product);
    
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Update Product </title>
        
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
                        <li><a href='admin.php'>Home</a></li>

                    </ul>
                </div>
            </nav>
            <br /> <br /> <br />
        <h1>Update Product</h1>
        
        <form>
            <input type="hidden" name="productId" value= "<?=$product['productId']?>"/>
            Product name: <input type="text" value = "<?=$product['productName']?>" name="productName"><br>
            Description: <textarea name="description" cols = 50 rows = 4><?=$product['productDescription']?></textarea><br>
            Color: <input typr="text" name="productColor" value= "<?=$product['productColor']?>"><br>
            Gender: <input typr="text" name="productGender" value= "<?=$product['productGender']?>"><br>
            Price: <input type="text" name="productPrice" value = "<?=$product['productPrice']?>"><br>
            Size: <input typr="text" name="productSize" value= "<?=$product['productSize']?>"><br>
            
    
            Category: <select name="catId">
                <option>Select One</option>
                <?php getCategories( $product['catId'] ); ?>
            </select> <br />
            
            Brand: <select name="brandId">
                <option>Select One</option>
                <?php getbrand( $product['brandId'] ); ?>
            </select> <br />
            
            Set Image Url: <input type = "text" name = "productImage" value = "<?=$product['productImage']?>"><br>
            <input type="submit" name="updateProduct" value="Update Product">
            
        </form>
        <form action="admin.php">
        <input type="submit" value="Return" />
        </form>
        
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