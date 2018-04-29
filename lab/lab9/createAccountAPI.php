<?php

include '../../dbConnection.php';

$conn = getDatabaseConnection("c9");

$username = $_GET['username'];
$fistName = $_GET['firstName'];
$lastName = $_GET['lastName'];
$zipCode = $_GET['zipCode'];
$password = sha1($_GET['password']);


if ( isset($_GET['password']) && isset($_GET['zipCode']) && isset($_GET['lastName']) && isset($_GET['firstName']) && isset($_GET['firstName'])){
//&& isset($_GET['username']) && isset($_GET['firstName']) && isset($_GET['lastName'])) {
    //$sql2 = "INSERT INTO lab9_user
                //( `firstName`, `lastName`, `zipCode`, `username`, `password`) 
                // VALUES ( :firstName, :lastName, :zipCode, :username, :password)";
                 
    $sql2 = "INSERT INTO lab9_user (username, firstName, lastName, password, zipCode) VALUES 
    (:username, :firstName, :lastName, :password, :zipCode)";
                 
    $np = array();
    $np[':firstName'] = $firstName;
    $np[':lastName'] = $lastName;
    $np[':zipCode'] = $zipCode;
    $np[':username'] = $username;
    $np[':password'] = $password;
    
    $stmt = $conn->prepare($sql2);
    //$stmt->execute($np);
    
        $params = array(
        ":username" => $username,
        ":lastName" => $lastName,
        ":firstName" => $firstName,
        ":password" => $password,
        ":zipCode" => $zipcode
    );
    
    echo "true";
}
?>