<?php

session_start();
if(!isset( $_SESSION['adminName']))
{
  header("Location:index.php");
}
include '../../dbConnection.php';
$conn = getDatabaseConnection("ottermart");

function displayAllProducts(){
    global $conn;
    $sql="SELECT * FROM om_product";
    $statement = $conn->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    //print_r($records);

    return $records;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Admin Main Page </title>
        
            <style>
        @import url("css/style.css");
        form {
                display: inline;
            }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <script>
            
            function confirmDelete() {
                
                return confirm("Are you sure you want to delete it?");
                
            }
            
        </script>
        
    </head>
    <body>


        
        <h1> Admin Main Page </h1>
        
        <h3> Welcome <?=$_SESSION['adminName']?>! </h3>
        
        <br />
        <form action="addProduct.php">
            <input type="submit" name="addproduct" value="Add Product"/>
        </form>
        
        <form action="logout.php">
            <input type="submit"  value="Logout"/>
        </form>
        
        <br /> <br />
        <strong> Products: </strong> <br />
        
        <?php $records=displayAllProducts();
        echo "<table class = 'table'>";
            foreach($records as $record) {
                 echo "<td>";
                echo "[<a href='updateProduct.php?productId=".$record['productId']."'>Update</a>]";
                //echo "[<a href='deleteProduct.php?productId=".$record['productId']."'>Delete</a>]";
                echo "</td>";
                echo"<td>";
                echo "<form action='deleteProduct.php' onsubmit='return confirmDelete()'>";
                echo "<input type='hidden' name='productId' value= " . $record['productId'] . " />";
                echo "<input type='submit' value='Remove'>";
                
                echo "</form>";
                echo "</td>";
                echo "<td>";
                
                echo $record['productName'];
                echo '<br>';
                echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
        
        ?>
        
        <footer>
            CST 336. 2018&copy; Martinez<br/>
            <strong>Disclaimer:</strong> The information in this webpage is fictitious. <br/>
            <small>It is used for academic purposes only.</small>
            <br/>
            <img src="img/csumb-logo.png" alt="csumb logo photo"/>
            <br/>
            <img id="veri" src="img/buddy_verified.png" alt="buddy check"/>
        </footer>

    </body>
</html>