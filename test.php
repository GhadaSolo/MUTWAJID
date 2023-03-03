<?php

session_start();
$arr = array();

$ip = $_SESSION['ip'];
$n =  "nmap -sn $ip";

$nmap = shell_exec("$n");


$nmap = explode("MAC Address:", $nmap);

$x = 0;
foreach($nmap as $scan){

    $x++;
    if($x == 1){
        continue;
    }
    $mac =  $scan[1].$scan[2].$scan[3].$scan[4].$scan[5].$scan[6].$scan[7].$scan[8].$scan[9].$scan[10].$scan[11].$scan[12].$scan[13].$scan[14].$scan[15].$scan[16].$scan[17];


    $arr[] = $mac;
}

$_SESSION['mac'] = $arr;

echo"<script> window.location.href='http://localhost/xampp/mutawajid/test/process.php';</script>";

?>