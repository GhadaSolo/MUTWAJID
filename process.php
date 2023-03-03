<?php

use function PHPSTORM_META\map;

session_start();

$mac = $_SESSION['mac'];

require_once '../function/function.php';

$conn = conn();

$q = "SELECT * FROM `mac`";

$r = mysqli_query($conn , $q);

$arr_mac = array();


while($s = mysqli_fetch_assoc($r)){
    $arr_mac[]= $s;
}

$q = "DELETE  FROM `connection_table`";

$r = mysqli_query($conn , $q);

foreach($mac as $k){

    foreach($arr_mac as $kk=> $v){

      
        if($v['mac'] == $k){

            $counter = $v['counter'] +1;

            $qq = "UPDATE `mac` SET `counter`='$counter' WHERE `id` ='$v[id]'";

            $rr = mysqli_query($conn , $qq);
            
        }}

        date_default_timezone_set('Asia/Riyadh');
        $date = date("h:i");


        $q = "INSERT INTO `connection_table` VALUES ('$k' , '$date' , null)";
    
        $r = mysqli_query($conn , $q);
 

    }


echo "<script> window.location.href='../index/adminhome.php';</script>";

?>  