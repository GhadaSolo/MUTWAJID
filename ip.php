<?php
session_start();
// Must be run as root
$arp_scan = shell_exec('arp -a');

$arp_scan = explode("\n", $arp_scan);

 $matches;

 $x = 0;
foreach($arp_scan as $scan) {
	
    $x = $x +1;

	$matches = array();
	
    
    if($x == 4){

        $s = explode(" " , $scan);

        $a =  $s[2];

        $arr = '';

        for($i = 0 ; $i < strlen($a) ; $i++){

            
            if($i  == strlen($a)-1){

                
                $arr=$arr.'*';
            }else{
                $arr=$arr.$a[$i];
            }
        }
    }
    
   
}

$_SESSION['ip'] = $arr;

echo"<script> window.location.href='http://localhost:3000/test/test.php';</script>";