<?php

// session_start();

// if(!isset($_SESSION['login_id']) || !isset($_SESSION['designation']) || $_SESSION['designation']!='admin')
// {

// header('Location:http://fairwaypharmaceuticlas.com/login.php');
// exit();

// }







// if(isset($_SESSION['duplicate']))
// {

// echo "<script type='text/javascript'>alert('User with that email already exists!');</script>";
// unset($_SESSION['duplicate']);

// }

// if(isset($_SESSION['unable']))
// {
    
//     if($_SESSION['unable']==1)
//             {
                
//                 echo "<script type='text/javascript'>alert('Name, email or password cant be empty!');</script>";
                

//             }

//     if($_SESSION['unable']==0)
//             {
                
                
//                 echo "<script type='text/javascript'>alert('Employee has been created successfully!');</script>";

//             }        


//             unset($_SESSION['unable']);

// }






?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fairway Pharmaceuticals | The Right choice </title>
    <script src="./js/jquery.js"></script>
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/Material+Icons.css">
    <link rel="stylesheet" href="./css/material.indigo-pink.min.css">
    <script defer src="./js/material.min.js"></script>
    <link rel="stylesheet" href="./css/material-design-iconic-font.min.css"/>
    <link rel="stylesheet" href="./css/components.css">

</head>
<body style="background: linear-gradient(to right, #93EDC7,#dae2f8)">
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
                <header class="mdl-layout__header">
                  <div class="mdl-layout__header-row">
                    <!-- Title -->
                    <span class="mdl-layout-title">Fairway</span>
                    <!-- Add spacer, to align navigation to the right -->
                    <div class="mdl-layout-spacer"></div>
                    <!-- Navigation. We hide it in small screens. -->
                    <nav class="mdl-navigation mdl-layout--large-screen-only">
                      <a class="mdl-navigation__link" href="admin.php"><i class="zmdi zmdi-home zmdi-hc-lg"></i> Dashboard</a>
                      <a class="mdl-navigation__link" href="addOffer.php"><i class="zmdi zmdi-cake zmdi-hc-lg"></i> Add Offer </a>
                      <a class="mdl-navigation__link" href="createEmployee.php"><i class="zmdi zmdi-account-add zmdi-hc-lg"></i> Creat Employee</a>
                      <a class="mdl-navigation__link" href="reports.php"><i class="zmdi zmdi-chart zmdi-hc-lg"></i> Reports</a>
                      <a class="mdl-navigation__link" href="backend/logout.php"><i class="zmdi zmdi-lock-open zmdi-hc-lg"></i> Logout</a>
                    </nav>
                  </div>
                </header>
                <div class="mdl-layout__drawer">
                  <span class="mdl-layout-title">Fairway</span>
                  <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="admin.php"><i class="zmdi zmdi-home zmdi-hc-lg"></i>&nbsp;Dashboard</a>
                    <a class="mdl-navigation__link" href="addOffer.php"><i class="zmdi zmdi-cake zmdi-hc-lg"></i>&nbsp;Add Offer </a>
                    <a class="mdl-navigation__link" href="createEmployee.php"><i class="zmdi zmdi-account-add zmdi-hc-lg"></i>&nbsp;Create Employee</a>
                    <a class="mdl-navigation__link" href="reports.php"><i class="zmdi zmdi-chart zmdi-hc-lg"></i>&nbsp;Reports</a> <hr/>
                    <a class="mdl-navigation__link" href="backend/logout.php"><i class="zmdi zmdi-lock-open zmdi-hc-lg"></i>&nbsp;Logout</a>
                  </nav>
                </div>
                <main class="mdl-layout__content">
                  <div class="page-content">
                    <center> <h4 class="form-heading">Create New Employee / (User)</h4> </center>
                    <div class="form-container">


                            <form action="backend/create_emp.php" method="POST" enctype="multipart/form-data">
                                        <span class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text" id="eName"  name="x1">
                                            <label class="mdl-textfield__label" for="eName">Employee Name</label>
                                        </span> <br>
                                        <span class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <select class="mdl-textfield__input" id="designation" value=" " name="x2">
                                                <option disabled selected>Designation</option>
                                                <option value="Regional Manager">Regional Manager</option>
                                                <option value="Medical Representative">Medical Representative</option>
                                                <option value="Offer Visitor">Offer Visitor</option>
                                            </select>
                                        </span> <br>
                                        <span class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input class="mdl-textfield__input" type="number"  id="mobileNo" value=" " name="x3">
                                                <label class="mdl-textfield__label" for="mobileNo">Mobile Number (10 Digits)</label>
                                        </span> <br>
                                        <span class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input class="mdl-textfield__input" type="email"  id="email"   name="x4">
                                                <label class="mdl-textfield__label" for="email">Email Id</label>
                                        </span> <br>
                                        <span class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input class="mdl-textfield__input" type="password" id="password"  name="x5">
                                                <label class="mdl-textfield__label" for="password">Create Password</label>
                                        </span> <br>
                                        <span class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input class="mdl-textfield__input" type="text"  id="address" value=" " name="x6">
                                                <label class="mdl-textfield__label" for="address">Address</label>
                                        </span> <br>
                                        <span class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input class="mdl-textfield__input" type="text"  id="district"  value=" " name="x7">
                                                <label class="mdl-textfield__label" for="district">District</label>
                                        </span> <br>
                                        <span class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input class="mdl-textfield__input" type="number"  id="aadhar" value=" " name="x8">
                                                <label class="mdl-textfield__label" for="aadhar">Aadhar Card Number</label>
                                        </span> <br>
                                        <label class="" for="offerImage">Upload Any ID :</label>                              
                                        <span class="mdl-textfield mdl-js-textfield">
                                        <input class="mdl-textfield__input" type="file"  accept="image/*" id="idImage" value=" " name="x9">
                                        </span> <br>
                                        <span class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                <input class="mdl-textfield__input" type="text"  id="remarks" value=" " name="x10">
                                                <label class="mdl-textfield__label" for="remarks">Remarks (if any)</label>
                                        </span> <br> <br>
                                        <span class="mdl-textfield mdl-js-textfield"> 
                                               <button onclick="newUser()" type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Create New User</button>
                                        </span> 

                                       <input type="submit" name="store_data" style="display: none;" id="store_data"> 

                            
                            </form>





                    </div>


                    <dialog class="mdl-dialog">
                        <h4 class="my-dialog-title">Verify New User data </h4>
                        <div class="mdl-dialog__content">
                                Employee Name :<p class="displayData" id="showEmployeeName"></p>
                                Designation :<p class="displayData" id="showDesignation"></p>
                                Mobile Number :<p class="displayData" id="showMobileNo"></p>
                                Email Id :<p class="displayData" id="showEmail"></p>
                                Password :<p class="displayData" id="showPassword"></p> 
                                Address :<p class="displayData" id="showAddress"></p> 
                                District :<p class="displayData" id="showDistrict"></p> 
                                Aadhar Card No. :<p class="displayData" id="showAadhar"></p> 
                                Uploaded Id :<span class="displayData" id="showID"></span> <br>
                                Remarks :<p class="displayData" id="showRemarks"></p> 
                        </div>
                                <div class="mdl-dialog__actions">
                                <button type="button" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab close"><i class="material-icons">clear </i></button>                    
                                <button type="button" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored emp_click" id="emp_click"><i class="material-icons">done_outline</i></button>
                                </div>
                        </dialog>
                    


                </div>
                </main>
            </div>

            <script src="js/components.js"></script>





<script type="text/javascript">
    
document.getElementById("emp_click").onclick = function () {


        document.getElementById("store_data").click();

        
        
    };


</script>








</body>
</html>