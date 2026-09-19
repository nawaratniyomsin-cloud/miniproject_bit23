<?php

$id = $_GET["id"];

include "connect.php";

$sql = "DELETE FROM bags WHERE bag_id = '$id'";

$result = mysqli_query($con, $sql);

if(!$result){
    echo "Error";
}else{
    header("location: ../manage_bag.php");
    exit;
}