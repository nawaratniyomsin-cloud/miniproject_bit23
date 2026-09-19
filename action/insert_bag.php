<?php

$brand = $_POST["brand"];
$size = $_POST["size"];
$bag_id = $_POST["bag_id"];

include "connect.php";

$sql = "INSERT INTO `bags`
        (`brand`,`size`, `bag_id`) 
        VALUES 
        ('$brand','$size','$bag_id')";

$result = mysqli_query($con, $sql);

if(!$result){
    echo "Error";
}else{
    header("location: ../index.php");
    exit;
}