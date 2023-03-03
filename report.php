<html>

<head>
<title>Mutawajid System | Report </title>
<link rel="icon" type="image/png"  href="..\img\logo4.png" />
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist//css//bootstrap.min.css">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
  
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../Login_v1/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../Login_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../Login_v1/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../Login_v1/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../Login_v1/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../Login_v1/css/util.css">
    <link rel="stylesheet" type="text/css" href="../Login_v1/css/main.css">
    <!--===============================================================================================-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Advent+Pro:ital,wght@1,900&display=swap');
        h1 {
            font-family: 'Advent Pro', sans-serif;
        }
        
        h4 {
            font-family: sans-serif;
        }
    </style>

    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">

</head>

<body>


<div class="app-content-header">
<div class="container-login100" >
    
    <div class="row"  >
        
<?php   
 
require_once "../function/function.php";
$employe = all_employe();

$all_mac = all_mac();

$title='';

?>

<html>

<head>
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist//css//bootstrap.min.css">
    <link rel="stylesheet" href="../css/adminHome.css">
    
    <link rel="stylesheet" type="text/css" href="../Login_v1/css/main.css">
    <style>
        .modal-backdrop{
            width: 0px;
        }
    </style>
</head>


<body class="light">
        <div class="limiter overflow-scroll">

            <div class="wrap-login100">
            <div class="row d-flex">
        
          

        <ul>
        
        <li>
    <a href="./login.php" class="  ">Logout</a>
</li>
<li>
    <a href="./hello.php" class="  ">Home</a>
</li>
<li>
    <a href="./about2.php" class="  ">About</a>
</li>


<li>
    
<a href="" class=" " data-bs-toggle="modal" data-bs-target="#add">Add Employee</a>

            <div class="modal" id="add">
                                <div class=" modal-dialog">
                                    <div class=" modal-content">
                                        <div class=" modal-header">
                                            <h3>Add a new employee</h3>
                                            <button class=" close"></button>
                                        </div>
                                        <div class=" modal-body">
                                            <form action="../process/add_employee.php" method="post">
                                            <div class="  my-3">       
                        <label for="">Employee's Name:</label>
        <input type="text" name="name" placeholder="Please Enter The Employee's Full Name:" class=" form-control" id="">
                                                </div>

                                                <div class="  my-3 ">
                                                <label for="device" class=" text-start">Employee's Device: </label>
                                            
                                                <select  name="device"  class="form-control"  id="">
                                                    <option value="" disabled selected>Please Select an Accepted Device: </option>
                                                        <option value="IPhone X / PRO / XR">IPhone X / PRO / XR</option>
                                                        <option value="Huawei Nova / Honor / Mate">Huawei Nova / Honor / Mate</option>
                                                        <option value="Nokia G / C">Nokia G / C</option>
                                                        <option value=" Galaxy Note / Galaxy S "> Galaxy Note / Galaxy S </option>
                                                        <option value="vivo X "> vivo X </option>
                                                        <option value="Google Pixel "> Google Pixel  </option>
                                                        

                                                    </select>
                                                
                                                    </div>

                                                    <div class="  my-3"> 
                                        <label for="">Employee Device's MAC address:</label>
                                        <input type="text" name="mac" placeholder="Please Enter Device's MAC Address: " class=" form-control" id="">
                                                </div>
                                                                <div class="container-login100-form-btn">
                                                                <button class="login100-form-btn">  Add </button></div>
                                                

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
</li>
<li>
<a href="../index/adminHome.php" class="  ">Attendance List</a>

</li><li>
    <a href="./report.php" class="  ">Preview Report</a>
</li>
     

     
        </ul>
                
                         
        
                    </div>
            <div class="app-content-header">
                <h6 class="app-content-header">  
                <img src="..\img\logo.png" width="190" height="160" alt="">
           <span class="mx-2" style="width: 1px;height:10vh;border:1px solid #86bfd4;"></span>
          <li> Number of connected Devices : 
           <?php echo$all_mac[0]; ?> <br> Date: <?php echo  date("d.m.y");  ?></h6>
                
                
                

            </div>
            <div class="app-content-actions">
             
            </div>
          

           
            <table class=" table text-center">
                    <thead>
                        <tr>
                            <th>Employee's Name</th>
                            <th>Connection Start Time</th>
                            <th>Device</th>
                         
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                        
                        $arr = all_employe();
                        foreach($arr as $k => $v){
                        
                            if($v['counter'] <= 3){
                                $statue = "Absent";
                            }else if($v['counter'] == 4){
                                    $statue = "Absent for 4 Hours";
                            }else if($v['counter'] == 5){
                                    $statue = "Absent for 3 Hours";
                            }else if($v['counter'] == 6){
                                    $statue = "Absent for 2 Hours";
                            }else if($v['counter'] == 7){
                                    $statue = "Absent for 1 Hour";
                            }else if($v['counter']){
                                $statue = "Full-time Attending";
                            }
                            $isfound = isfound();
                            $time = 'N/A';
                            foreach($isfound as $kk => $vv){

                                if($v['mac'] == $vv['attendance_mac']){

                                        $time = $vv['attendance_dtime'];
                            }
                            }
                        echo"<tr>
                            <td>$v[name]</td>
                            <td>$time</td>
                            <td>$v[device]</td>
                          
                            <td>
                            $statue
                            </td>
                        </tr>";}?>
                    </tbody>
                </table>
        <div class=" ">
       
            
        </div>
   
   
    <script src="../js/adminHome.js"></script>
    <script src="../bootstrap-5.0.2-dist//js//bootstrap.bundle.js"></script>

    
   
</body>

</html>
        <div class=" ">
       
            
            <button class="btn btn-primary btn-sm float-start mt-5 btn-lg" onclick="print()">Print</button>
            
            
        </div>
   
        <script>
            window.parent();
        </script>
   
    <script src="../js/adminHome.js"></script>
    <script src="../bootstrap-5.0.2-dist//js//bootstrap.bundle.js"></script>

    
</body>

</html>