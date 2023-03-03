<?php 

    $title ='about';
?>
<html>

<head>
<title>Mutawajid System | About Mutawajid</title>
<link rel="icon" type="image/png"  href="..\img\logo4.png" />
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist//css//bootstrap.min.css">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../Login_v1/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    

 
 
    <!--===============================================================================================-->
    
    <link rel="stylesheet" type="text/css" href="../Login_v1/css/main.css">
    <!--===============================================================================================-->
    
    <link rel="stylesheet" type="text/css" href="../Login_v1/css/main.css">
    <style>
        .modal-backdrop{
            width: 0px;
        }
        </style>
</head>

<body>


    <div class="container-login100" >
        <div class="wrap-login100" style="padding: 0px 120px 40px 95px;">
        <div class="row d-flex">
        
          

        <ul>
        
        
        
    <div class="app-content-header">
         <div class="container-login100" >
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

<li>
<li>
         
     
        </ul>
                
                         
        
                    </div>
        <div class="row">
        <h1 class="app-content-headerText text-center">  
        <h1 class="text-center"> <img src="../img/logo.png" width="280" height="280" alt="">
        </h1>
            
            <hr class=" container">
            <h6 class=" text-center px-9 ">
            <i> <b>It is an Automatic Attendance System that uses Wi-Fi technology to 
                <br>record employees' attendance as well as their absence duration </pr></pr></b></i></h6>
                <li> <i>Supervised By : Dr.Fatima Alakeel </li></i>
            <ul class=" text-center ">
                <li><i> Reem Almutairi 438925905</li></i>
                <li><i> Ghada Sultan 438925900 </li></i>
                <li> <i>Atheer Bajukhaif 439925933</li></i>
                <li> <i>Nuwaier Alotaibi 439925659 </li></i>
                <li> <i>Hanan Alotaibi 439925459</li></i>
                <li> <i>Shahad Alrasheed 438925914</li></i>
                </ul>
        </div>
        
    </div>
    
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>
</body>

</html>