<?php

session_start();

$con = mysqli_connect("localhost" , "root" , "" , "bag_shop");

$username = $_POST["username"];
$password= $_POST["password"];

$q = "SELECT * FROM user
        WHERE username = '$username'
        AND password = '$password'
        ";

        $result = mysqli_query($con,$q);

        $user = mysqli_fetch_assoc($result);

             // login ถูก

        if (mysqli_num_rows($result) > 0  ){
        
            $_SESSION['username'] = $user['username'];
            header("location: welcome.php");
            exit;

        }else{
            // login ผิด
            header("location: login.php");
            exit;
        }