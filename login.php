<?php
// session_start();

// if(isset($_SESSION['designation']))
// {

// if($_SESSION['designation']=='admin')
// {

// header('Location:http://fairwaypharmaceuticlas.com/admin.php');
// exit();

// }

// if($_SESSION['designation']=='Regional Manager')
// {
// header('Location:http://fairwaypharmaceuticlas.com/rm.php');
// exit();

// }

// if($_SESSION['designation']=='Medical Representative')
// {
// header('Location:http://fairwaypharmaceuticlas.com/user.php');
// exit();

// }


// }



// if(!isset($_SESSION['toggle']))
// {

// $_SESSION['error']='';

// }
// else{

// unset($_SESSION['toggle']);

// }



// if(isset($_POST['login_submit']))
// {

// $email=strip_tags($_POST['email']);
// $password=filter_var(strip_tags($_POST['password']),FILTER_SANITIZE_EMAIL) ;

// $pdo = new PDO('mysql:host=107.180.50.162;dbname=fairPharmDB','fairPharmDBUser','h%XJQY-)J-E['); 
// $sql = "SELECT id,designation FROM employee where email=:email and password=:password";
// $stl=$pdo->prepare($sql);
// $stl->execute(array('email'=>$email,'password'=>$password));
// $row=$stl->fetch(PDO::FETCH_ASSOC);

// if(!$row)
// {
// $_SESSION['toggle']=1;  
// $_SESSION['error']='Please check your email or password!';
// header('Location:http://fairwaypharmaceuticlas.com/login.php');
// exit();
// }
// else{

// if($row['designation']=='admin')
// {

// $_SESSION['login_id']=$row['id'];
// $_SESSION['designation']='admin';
// header('Location:http://fairwaypharmaceuticlas.com/admin.php');
// exit();

// }

// if($row['designation']=='Regional Manager')
// {
// $_SESSION['login_id']=$row['id'];
// $_SESSION['designation']='Regional Manager';
// header('Location:http://fairwaypharmaceuticlas.com/rm.php');
// exit();

// }

// if($row['designation']=='Medical Representative')
// {
// $_SESSION['login_id']=$row['id'];
// $_SESSION['designation']='Medical Representative';
// header('Location:http://fairwaypharmaceuticlas.com/user.php');
// exit();

// }


// }


// }



?> 




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fairway Pharmaceuticals | The Right choice : Medicine Leading Company in India</title>
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/Material+Icons.css">
    <link rel="stylesheet" href="./css/material.indigo-pink.min.css">
    <script defer src="./js/material.min.js"></script>
    <link rel="stylesheet" href="./css/material-design-iconic-font.min.css"/>
    <link rel="stylesheet" href="./css/style.css">

</head>
<body style="background: linear-gradient(to right, #00d2ff, #928dab);">
  <!-- Header Starts here -->
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <!-- Title -->
        <span class="mdl-layout-title">Fairway</span>
        <!-- Add spacer, to align navigation to the right -->
        <div class="mdl-layout-spacer"></div>
        <!-- Navigation. We hide it in small screens. -->
        <nav class="mdl-navigation mdl-layout--large-screen-only">
          <a class="mdl-navigation__link" href="index.html"><i class="zmdi zmdi-home zmdi-hc-lg"></i> Home</a>
          <a class="mdl-navigation__link" href="about.html"><i class="zmdi zmdi-globe zmdi-hc-lg"></i> About Us</a>
          <a class="mdl-navigation__link" href="products.html"><i class="zmdi zmdi-flower-alt zmdi-hc-lg"></i> Products</a>
          <a class="mdl-navigation__link" href="Contacts.html"><i class="zmdi zmdi-phone zmdi-hc-lg"></i> Contacts</a>
          <a class="mdl-navigation__link" href="login.php"><i class="zmdi zmdi-account zmdi-hc-lg"></i> Login</a>
        </nav>
      </div>
    </header>
    <div class="mdl-layout__drawer">
      <span class="mdl-layout-title">Fairway</span>
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="index.html"><i class="zmdi zmdi-home zmdi-hc-lg"></i> Home</a>
        <a class="mdl-navigation__link" href="about.html"><i class="zmdi zmdi-globe zmdi-hc-lg"></i> About Us</a>
        <a class="mdl-navigation__link" href="products.html"><i class="zmdi zmdi-flower-alt zmdi-hc-lg"></i> Products</a>
        <a class="mdl-navigation__link" href="contact.html"><i class="zmdi zmdi-phone zmdi-hc-lg"></i> Contacts</a> <hr/>
        <a class="mdl-navigation__link" href="login.php"><i class="zmdi zmdi-account zmdi-hc-lg"></i> My Account</a>       
      </nav>
    </div>
    <main class="mdl-layout__content">
      <div class="page-content"><!-- Your content goes here -->
     
        <div class="container">
        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
                <div class="mdl-tabs__tab-bar">
                    <a href="#login-panel" class="mdl-tabs__tab is-active"><i class="zmdi zmdi-account zmdi-hc-lg"></i>&nbsp;Login</a>
                    <a href="#newAccount-panel" class="mdl-tabs__tab"><i class="zmdi zmdi-account-add zmdi-hc-lg"></i>&nbsp; Create New Account</a>
                </div>
              
                <div class="mdl-tabs__panel is-active" id="login-panel">
                    <form action="<?=$_SERVER['PHP_SELF']?>" class="form-class" method="POST">
                        <p style="text-align: left;margin:20px 0px 10px 10px;"><?=$_SESSION['error']?></p>
                        <ul class="demo-list-icon mdl-list">
                                <li class="mdl-list__item">
                                  <span class="mdl-list__item-primary-content">
                                  <i class="material-icons mdl-list__item-icon">person</i>

                                    <input class="mdl-textfield__input" type="text" name="email" id="userName" placeholder="Email id" required autofocus>
                                    
                              </span>
                                </li>
                                <li class="mdl-list__item">
                                  <span class="mdl-list__item-primary-content">
                                  <i class="mdl-list__item-icon zmdi zmdi-edit zmdi-hc-lg"></i>

                                    <input class="mdl-textfield__input" type="password"  name="password" id="userPass" placeholder="Password" require>
                                   
                                </span>
                                </li>
                                <li class="mdl-list__item">   
                                  <!-- I am using this a tag, just to go to admin page fastly. Delete it once Login System will be activate and Use input below -->
                                  <input type="submit" name="login_submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect" value="Login">
                                  <span class="mdl-list__item-primary-content">
                                  <!-- <input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect" value="Login">  -->
                                </span>
                                </li>
                                <li class="mdl-list__item">
                                        <span class="mdl-list__item-primary-content">
                                          <button class="mdl-button mdl-js-button" style="display: none;"> Forgot Password ? </button>
                                      </span>
                                      </li>
                              </ul>
                    
                         </form>
                </div>



    <div class="mdl-tabs__panel" id="newAccount-panel">
        <form action="" class="form-class">
                    
            <ul class="demo-list-icon mdl-list">
                <li class="mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon">person</i>
        
                        <input class="mdl-textfield__input" type="text" id="fullName" placeholder="Full Name"/>
                                            
                    </span>
                </li>
                <li class="mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                        <i class="mdl-list__item-icon zmdi zmdi-phone zmdi-hc-lg"></i>
        
                        <input class="mdl-textfield__input" type="number" id="mobileNo" minlength="10" maxlength="10" placeholder="Mobile No. (10 Digit)">
                                           
                    </span>
                </li>
                <li class="mdl-list__item">
                        <span class="mdl-list__item-primary-content">
                            <i class="mdl-list__item-icon zmdi zmdi-email zmdi-hc-lg"></i>
            
                            <input class="mdl-textfield__input" type="email" id="email" placeholder="Email ID">
                                               
                        </span>
                </li>
                <li class="mdl-list__item">
                        <span class="mdl-list__item-primary-content">
                            <i class="mdl-list__item-icon zmdi zmdi-slideshare zmdi-hc-lg"></i>
            
                            <select class="mdl-textfield__input">
                                    <option disabled selected label="Looking For"></option>
                                    <option value="Medical Representative">Medical Representative (MR)</option>
                                    <option value="Data Operator">Data Operator</option>
                                    <option value="Retailership">Retailership</option>
                                    <option value="Distributorship">Distributorship</option>
                                    <option value="other">Other</option>

                             </select>
                                               
                        </span>
                </li>

                <li class="mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                        <input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect" value="Create Account"> 
                     </span>
                 </li>
               
            </ul>
                            
        </form>
    </div>
            
              </div>
            </div>





            <br><br><br><br><br><br>

    <footer class="mdl-mega-footer">
        <div class="mdl-mega-footer__middle-section container">
      
          <div class="mdl-mega-footer__drop-down-section">
            <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
            <h1 class="mdl-mega-footer__heading">Fairway Pharmaceuticals Pvt. Ltd.</h1>
            <ul class="mdl-mega-footer__link-list">
              <li><i class="zmdi zmdi-pin-drop zmdi-hc-lg"></i>&nbsp;&nbsp;Plot No.-2944, Near- Chuna Mandi,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Paharganj, New Delhi, India</li>
              <li><i class="zmdi zmdi-face zmdi-hc-lg">&nbsp;Mr Arvind Jain (Director)</i></li>
              <li><a href="phone:+91-9931708149"><i class="zmdi zmdi-phone zmdi-hc-lg">&nbsp;+91-99317 08149</i></a></li>
              <li><a href="mailto:india.fairway@gmail.com"><i class="zmdi zmdi-email zmdi-hc-lg">&nbsp;india.fairway@gmail.com</i></a></li>
              <li><i class="zmdi zmdi-gps-dot zmdi-hc-lg">&nbsp;PIN - 110055</i></li>
  
            </ul>
          </div>
      
          <div class="mdl-mega-footer__drop-down-section">
            <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
            <h1 class="mdl-mega-footer__heading">Quick Links </h1>
            <ul class="mdl-mega-footer__link-list">
              <li><a href="#call-to-action"><i class="zmdi zmdi-forward zmdi-hc-lg">&nbsp;Buy Medicine</i></a></li>
              <li><a href="#"><i class="zmdi zmdi-forward zmdi-hc-lg">&nbsp;All Products</i></a></li>
              <li><a href="#"><i class="zmdi zmdi-forward zmdi-hc-lg">&nbsp;About Us</i></a></li>
              <li><a href="#"><i class="zmdi zmdi-forward zmdi-hc-lg">&nbsp;Contact US</i></a></li>
              <li><a href="#"><i class="zmdi zmdi-forward zmdi-hc-lg">&nbsp;Privacy Policy</i></a></li>
              <li><a href="#"><i class="zmdi zmdi-forward zmdi-hc-lg">&nbsp;Site Map</i></a></li>            
            </ul>
          </div>
      
          <div class="mdl-mega-footer__drop-down-section">
            <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
            <h1 class="mdl-mega-footer__heading">Best Selling Products (Quarterly)</h1> 
            <ul class="mdl-mega-footer__link-list">
              <li><a href="#"><i class="zmdi zmdi-brightness-7 zmdi-hc-lg">&nbsp;Rebose-20 (Tablets)</i></a></li>
              <li><a href="#"><i class="zmdi zmdi-brightness-7 zmdi-hc-lg">&nbsp;Rebose-L (Capsules)  </i></a></li>
              <li><a href="#"><i class="zmdi zmdi-brightness-7 zmdi-hc-lg">&nbsp;Rebose-D (Capsules) </i></a></li>
              <li><a href="#"><i class="zmdi zmdi-brightness-7 zmdi-hc-lg">&nbsp;Rosek-Plus (Injection) </i></a></li>
              <li><a href="#"><i class="zmdi zmdi-brightness-7 zmdi-hc-lg">&nbsp;Rosek-200 ml (Syrup) </i></a></li>
              <li><a href="#"><i class="zmdi zmdi-brightness-7 zmdi-hc-lg">&nbsp;Skinax (Cream)</i></a></li>
            </ul>
          </div>
      
          <div class="mdl-mega-footer__drop-down-section"> 
            <center>
            <h1 class="mdl-mega-footer__heading">Stay Connected</h1>
            <div class="social">
              <a href="#" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored"><i class="zmdi zmdi-facebook"></i></a>
              <a href="#" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored"><i class="zmdi zmdi-twitter"></i></a>
              <a href="#" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored"><i class="zmdi zmdi-whatsapp"></i></a> 
              <a href="#" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored"><i class="zmdi zmdi-linkedin"></i></a>
              <a href="#" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored"><i class="zmdi zmdi-google-plus"></i></a>
              <a href="#" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored"><i class="zmdi zmdi-skype"></i></a> <hr>
              <p>Created by : <a href="www.softechinfra.com">Softechinfra</a></p>
              <p> &copy; 2018 All Rights Reserved.</p>
  
            </div>
          </center>
          </div>
      
        </div>
  
      </footer>
  

      
      
    
        <script type="text/javascript">
        
        
        
        
        </script>
        

      </div>
    </main>
  </div>
</body>
</html>