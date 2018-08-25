<?php

// session_start();

// if(isset($_SESSION['unable_pro']))
// {
    
//     if($_SESSION['unable_pro']==1)
//             {
                
//                 echo "<script type='text/javascript'>alert('Plese fill out all the fields!');</script>";
                

//             }

//     if($_SESSION['unable_pro']==0)
//             {
                
                
//                 echo "<script type='text/javascript'>alert('Product offer has been created successfully!');</script>";

//             }        


//             unset($_SESSION['unable_pro']);

// }


// if(isset($_SESSION['unable_pro_med']))
// {
    
//     if($_SESSION['unable_pro_med']==1)
//             {
                
//                 echo "<script type='text/javascript'>alert('Plese fill out all the fields!');</script>";
                

//             }

//     if($_SESSION['unable_pro_med']==0)
//             {
                
                
//                 echo "<script type='text/javascript'>alert('Medicine offer has been created successfully!');</script>";

//             }        


//             unset($_SESSION['unable_pro_med']);

// }




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fairway Pharmaceuticals | The Right choice </title>
    <link rel="stylesheet" href="./css/Material+Icons.css">
    <link rel="stylesheet" href="./css/material.indigo-pink.min.css">
    <script defer src="./js/material.min.js"></script>
    <link rel="stylesheet" href="./css/material-design-iconic-font.min.css"/>
    <link rel="stylesheet" href="css/components.css">

</head>
<body style="background: linear-gradient(to right, #77a1d3, #79cbca, #e684ae);">
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
                <a class="mdl-navigation__link" href="logout.php"><i class="zmdi zmdi-lock-open zmdi-hc-lg"></i> Logout</a>
              </nav>
            </div>
          </header>
          <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Fairway</span>
            <nav class="mdl-navigation">
              <a class="mdl-navigation__link" href="admin.php"><i class="zmdi zmdi-home zmdi-hc-lg"></i>&nbsp;Dashboard</a>
              <a class="mdl-navigation__link" href="addOffer.php"><i class="zmdi zmdi-cake zmdi-hc-lg"></i>&nbsp;Add Offer </a>
              <a class="mdl-navigation__link" href="createEmployee.php"><i class="zmdi zmdi-account-add zmdi-hc-lg"></i>&nbsp;Creat Employee</a>
              <a class="mdl-navigation__link" href="reports.php"><i class="zmdi zmdi-chart zmdi-hc-lg"></i>&nbsp;Reports</a> <hr/>
              <a class="mdl-navigation__link" href="backend/logout.php"><i class="zmdi zmdi-lock-open zmdi-hc-lg"></i>&nbsp;Logout</a>
            </nav>
          </div>
          <main class="mdl-layout__content">
            <div class="page-content">
              <center> <h4 class="form-heading">Add Offer</h4> </center>
              <div class="form-container">

                  <form action="backend/add_offer.php" method="POST" enctype="multipart/form-data">

                  <span class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text"  id="offerTitle" name="x1">
                    <label class="mdl-textfield__label" for="offerTitle">Title of the Offer</label>
                    </span> <br>
                    <span class="mdl-textfield mdl-js-textfield">
                      <select class="mdl-textfield__input" id="medicineName-1" name="x2">
                        <option disabled selected>Offer Valid on</option>
                        <!-- join Name of Product and Unit of the product and show here  -->
                        <option value="Rebose-20 (Tablets)">Rebose-20 (Tablets)</option>
                        <option value="Rebose-L (Capsules)">Rebose-L (Capsules)</option>
                        <option value="Rebose-D (Capsules)">Rebose-D (Capsules)</option>
                        <option value="Rosek-Plus (Injection)">Rosek-Plus (Injection)</option>
                        <option value="Rosek-200 ml (Syrup)">Rosek-200 ml (Syrup)</option>
                        <option value="Skinax (Cream)">Skinax (Cream)</option>

                      </select>
                </span> <br>
              
                  <label class="" for="offerImage">Offer Image</label>                              
                    <span class="mdl-textfield mdl-js-textfield">
                    <input class="mdl-textfield__input" type="file"  accept="image/*" id="offerImage" name="x3">
                  </span> <br>
                  <span class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <input class="mdl-textfield__input" type="number"  id="quantity" name="x8">
                      <label class="mdl-textfield__label" for="quantity">On Sale of (Quantity) </label>
                  </span> <br>
                  <span class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="number"  id="freeMedicine" name="x9">
                    <label class="mdl-textfield__label" for="freeMedicine">Number of Medicine Free </label>
                </span> <br>

                  <span class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <textarea name="x4" class="mdl-textfield__input" type="text" rows= "3" id="description" ></textarea>
                      <label class="mdl-textfield__label" for="description">Offer's Description</label>
                      </span> <br>

                  <label for="validity">Validity : </label> 
                  <span class="mdl-textfield mdl-js-textfield">
                    <input class="mdl-textfield__input" type="date"  id="validity" name="x5">
                    </span><br> <br>

                  <span class="mdl-textfield mdl-js-textfield"> 
                    <button onclick="productOffer()" type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Create New Offer</button>      
                  </span> 
                <input type="submit" name="pro_offer" style="display: none;" id="pro_offer">

                  </form>
                  
            


                </div> 



                  <dialog class="mdl-dialog" id="product-offer-dialog">
                      <h4 class="my-dialog-title">Product Free Offer </h4>
                      <div class="mdl-dialog__content">
                          Title of the Offer :<p class="displayData" id="offerTitle-P"></p>
                          Offer Valid on :<p class="displayData" id="productName-P"></p>
                          Offer Image :<span style="width: 100px; height: 100px;" id="offerImage-P"> </span> <br>
                          On Sale of (Quantity) :<p class="displayData" id="quantity-P"></p>
                          Number of Medicine Free :<p class="displayData" id="freeMedicine-P"></p>
                          Offer Discribtion :<p class="displayData" id="offerDiscription-P"></p>
                          Validity upto :<p class="displayData" id="validity-P"></p> 
                      </div>
                      <div class="mdl-dialog__actions">
                          <button type="button" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab close"><i class="material-icons">clear </i></button>                    
                          <button type="button" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored" id="pro_click"><i class="material-icons">done_outline</i></button>
                       </div>
                  </dialog>
              

            </div>
        </main>
       </div>

            <script src="js/components.js"></script>

<script type="text/javascript">
    
   document.getElementById("pro_click").onclick = function () {

        document.getElementById("pro_offer").click();

        
        
    };



        document.getElementById("pro_click_med").onclick = function () {

        document.getElementById("med_offer").click();

        
        
    };



// code for - Offer section dialog box
function productOffer(){
    var dialog = document.getElementById('product-offer-dialog');
    dialog.showModal();
    if (! dialog.showModal) {
        dialogPolyfill.registerDialog(dialog);
      };
    dialog.querySelector('.close').addEventListener('click', function() {
        dialog.close()});
    
    document.getElementById('offerTitle-P').innerHTML = document.getElementById("offerTitle").value;
    document.getElementById('productName-P').innerHTML = document.getElementById("medicineName-1").value;  
    document.getElementById('offerImage-P').innerHTML = document.getElementById("offerImage").value;  
    document.getElementById('quantity-P').innerHTML = document.getElementById("quantity").value;     
    document.getElementById('freeMedicine-P').innerHTML = document.getElementById("freeMedicine").value;    
    document.getElementById('offerDiscription-P').innerHTML = document.getElementById("description").value;     
    document.getElementById('validity-P').innerHTML = document.getElementById("validity").value; 
};


        



</script>

</body>
</html>