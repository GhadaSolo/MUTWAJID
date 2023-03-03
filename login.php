<?php
    session_start();
    require_once("../function/function.php");

    $conn = conn();


    $email = $_POST['email'];

    $pass = $_POST['pass'];

    $q = "SELECT * FROM `user` WHERE `email`='$email' AND `pass`='$pass'";

    $r = mysqli_query($conn , $q);


    if(mysqli_num_rows($r) > 0){

        
        $s = mysqli_fetch_assoc($r);
        $_SESSION['user'] = $email;
        $_SESSION['username'] = $s['username'];
        echo "<script>window.location.href='../index/hello.php';</script>";
    }
    else{
        
        echo"<script> alert('Invailed');
            window.location.href='../index/login.html';
        </script>";
    }
?>