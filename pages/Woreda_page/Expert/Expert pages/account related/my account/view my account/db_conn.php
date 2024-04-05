<?php 

$sName = "localhost";
$uName = "id20965444_root";
$pass = "@Stephen12#xampp";
$db_name = "id20965444_fms";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}