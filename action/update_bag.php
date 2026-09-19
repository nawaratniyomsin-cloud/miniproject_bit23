<?php

$brand = $_POST["brand"];
$size = $_POST["size"];
$bag_id = $_POST["bag_id"];


include "connect.php";

$sql = "UPDATE `bags` 
        SET
        `brand`='$brand',
        `size`='$size'
        WHERE bag_id = '$bag_id' ";

        echo $sql;

$result = mysqli_query($con, $sql);

if(!$result){
    echo "Error";
}else{
    header("location: ../manage_bag.php");
    exit;
}