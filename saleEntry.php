<?php


// session_start();


// if(!isset($_SESSION['login_id']))
// {

// header('Location:http://fairwaypharmaceuticlas.com/login.php');
// exit();

// }

// $pdo = new PDO('mysql:host=107.180.50.162;dbname=fairPharmDB','fairPharmDBUser','h%XJQY-)J-E['); 


// $sql="SELECT name from employee WHERE id=:id";

// $sqlm=$pdo->prepare($sql);

// $sqlm->execute(array('id'=>$_SESSION['login_id']));

// $row=$sqlm->fetch();

// $_SESSION['user_name']=$row['name'];



// if(isset($_SESSION['sale_error'])){
        


//         if($_SESSION['sale_error']==1)
//         {

//             echo "<script>alert('Warning!!!  All the fields must be filled');</script>";

//         }

//         if($_SESSION['sale_error']==0)
//         {

//             echo "<script>alert('Data has been added!');</script>";

//         }


//         unset($_SESSION['sale_error']);

//     }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fairway Pharmaceuticals | Sale Entry : Medical Representative - (M.R.) </title>
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/Material+Icons.css">
    <link rel="stylesheet" href="./css/material.indigo-pink.min.css">
    <script defer src="./js/material.min.js"></script>
    <link rel="stylesheet" href="./css/material-design-iconic-font.min.css"/>
    <link rel="stylesheet" href="./css/components.css">
    <script src="./js/jquery.js"></script>
    <link rel="stylesheet" href="./css/user_entry.css">

  <!-- Include jQuery Popup Overlay -->
  <script src="./js/jquery-popup-overlay.js"></script>


</head>
<body style="  background: linear-gradient(to right, #22c1c3, #ffc0cb);">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
        <!-- Title -->
        <span class="mdl-layout-title">Fairway</span>
        <span style="position: absolute;top:40px;">Hello <?=$_SESSION['user_name']?>!</span>
        <!-- Add spacer, to align navigation to the right -->
        <div class="mdl-layout-spacer"></div>
        <!-- Navigation. We hide it in small screens. -->
        <nav class="mdl-navigation mdl-layout--large-screen-only">
            <a class="mdl-navigation__link" href="user.php"><i class="zmdi zmdi-card-giftcard"></i>&nbsp;Running Offers</a>
            <a class="mdl-navigation__link" href="saleEntry.php"><i class="zmdi zmdi-hospital"></i>&nbsp;Sale Entry</a>
            <a class="mdl-navigation__link" href="travel.php"><i class="zmdi zmdi-car"></i>&nbsp;Travel Detail</a>
            <a class="mdl-navigation__link" href="userReport.php"><i class="zmdi zmdi-chart"></i>&nbsp;Report</a>
            <a class="mdl-navigation__link" href="backend/logout.php"><i class="zmdi zmdi-lock-open zmdi-hc-lg"></i>&nbsp;Logout</a>
        </nav>
        </div>
         </header>
        <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">Fairway</span>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="user.php"><i class="zmdi zmdi-card-giftcard"></i>&nbsp;Running Offers</a>
            <a class="mdl-navigation__link" href="saleEntry.php"><i class="zmdi zmdi-hospital"></i>&nbsp;Sale Entry</a>
            <a class="mdl-navigation__link" href="travel.php"><i class="zmdi zmdi-car"></i>&nbsp;Travel Detail</a>
            <a class="mdl-navigation__link" href="userReport.php"><i class="zmdi zmdi-chart"></i>&nbsp;Report</a> <hr>
            <a class="mdl-navigation__link" href="backend/logout.php"><i class="zmdi zmdi-lock-open zmdi-hc-lg"></i>&nbsp;Logout</a>
        </nav>
        </div>
<main class="mdl-layout__content">
<div class="page-content"><!-- Your content goes here -->

    <center><h3 class="form-heading"><i class="zmdi zmdi-hospital"></i>&nbsp;Sale Entry</h3></center>
    


    <form action="backend/sale_entry.php" method="POST">
    <div class="sale-form">
    
    <div class="form-container">
            <span class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text"  id="issueDate" name="fields1[]">
                <label class="mdl-textfield__label" for="issueDate">Date of Issue</label>
            </span> <br>
           
            <span class="mdl-textfield mdl-js-textfield">
                     <label for="">Stockist Name :</label>
                    <select class="mdl-textfield__input" id="supplierName" name="x3">
                    </select>
            </span> <br>
        </div> 


            <div class="mdl-grid" id="danamic">

                <div class="mdl-cell mdl-cell--6-col mdl-cell--3-col-phone">
                    <label for="">Medicine Name :</label>
                    <select class="mdl-textfield__input" name="fields2[]">
                        <option value="Rebose-20 (Tablets)">Rebose-20 (Tablets)</option>
                        <option value="Rebose-L (Capsules)">Rebose-L (Capsules)</option>
                        <option value="Rebose-D (Capsules)">Rebose-D (Capsules)</option>
                        <option value="Rosek-Plus (Injection)">Rosek-Plus (Injection)</option>
                        <option value="Rosek-200 ml (Syrup)">Rosek-200 ml (Syrup)</option>
                        <option value="Skinax (Cream)">Skinax (Cream)</option>
                    </select>
                </div>
                <div class="mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
                <span class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="number" id="price" name="" placeholder="Price (&#8377;)">             
                </span>   
                </div>
                <div class="mdl-cell mdl-cell--2-col mdl-cell--2-col-phone" style="padding-bottom:10px;">
                    <span class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="number" id="receipt" placeholder="Receipt/Pur (Qty)"  name="fields3[]" onkeypress="return isNumber(event)" >
                    </span> 
                </div>
                <div class="mdl-cell mdl-cell--2-col mdl-cell--2-col-phone">
                    <span class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="number" id="sale" placeholder="Issue / Sales (Qty)" name="">
                    </span> 
                </div>
                    
            </div>   
         
        </div>  
       
        <input type="submit" name="sale_entry" id="sale_entry" style="display: none;">

        

            <center>
            <button id="addButton" class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
                    <i class="material-icons">add</i></button> 
            <button id="delete" class="mdl-button mdl-js-button mdl-button--icon" style="color: orangered">
                    <i class="material-icons">clear</i></button> <br>
                     <br>
        </center>
       
        <div class="form-container">
                <span class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="remarks" name="">
                    <label class="mdl-textfield__label" for="remarks">Remarks</label>
                </span>
        <div>
    
        <center>  <button onclick="saleSubmit()" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"> Submit </button></center>
    
        </form>  


<dialog class="mdl-dialog" id="sale-dialog">
    <h4 class="my-dialog-title">Verify the Data before hit Enter</h4>
    <div class="mdl-dialog__content">
        Date of Sale :<p class="displayData" id="date-D"></p>
    </div>
    <div class="mdl-dialog__actions">
        <button type="button" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab close"><i class="material-icons">clear </i></button>                    
        <button type="button" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored" id="store_data"><i class="material-icons">done_outline</i></button>
     </div>
</dialog>

</div>
</main>
</div>

         
            
            <script src="js/user_entry.js"></script>
  
  

        
</div>

</div>
</main>
</div>





      <script type="text/javascript">




        $('#store_data').click(function(){


            $('#sale_entry').click();


            });





function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}





  </script>
</body>
</html>