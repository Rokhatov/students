<?php
$servername = "MySQL-8.0";
$username = "root";
$password = "";
$dbname = "ITLIVE";

TRY {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";

}catch(PDOException $error){
    echo $error->getMessage();
}
