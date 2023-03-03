<?php

    require_once("../function/function.php");

    $conn = conn();

    $name = $_POST['name'];
    $mac = $_POST['mac'];
    $d = $_POST['device'];

    $q ="INSERT INTO `mac` VALUES (null ,  '$mac' ,'$name' , '0', '$d')";

    $r = mysqli_query($conn , $q);

    echo"<script> alert('Employee was added successfully'); window.location.href='../index/adminHome.php';</script>";
?>