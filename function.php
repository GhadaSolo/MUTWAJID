<?php 

function conn(){

    $conn = mysqli_connect('localhost' , 'root' , '' , 'mutawajid');

    return $conn;
}

function all_employe(){

    $conn = conn();

    $q = "SELECT * FROM `mac`";

    $r = mysqli_query($conn , $q);

    $arr = array();

    while($s = mysqli_fetch_assoc($r)){
        $arr[] = $s;
    }

    return $arr;
}


function all_mac(){

    $conn = conn();

    $q = "SELECT * FROM `connection_table`";

    $r = mysqli_query($conn , $q);

    $num = mysqli_num_rows($r);
    $arr_total = array($num);

    $arr = array();

    while($s = mysqli_fetch_assoc($r)){
        $arr[] = $s;
    }

    $arr_total[] = $arr;
    return $arr_total;

}

function inc_counter($id , $c){

    $c = $c+1;
    $conn = conn();

    $q = "UPDATE `mac` SET `counter` = '$c'  WHERE `id`='$id'";

    $r = mysqli_query($conn , $q);

}


function isfound(){

    $conn = conn();

    $q = "SELECT * from `connection_table`";

    $r = mysqli_query($conn , $q);

    $arr = array();

    while($s =  mysqli_fetch_assoc($r)){
        $arr[] = $s;
    }

    return $arr;
}
          

?>