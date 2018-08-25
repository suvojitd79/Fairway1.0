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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fairway Pharmaceuticals | The Right choice </title>
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/Material+Icons.css">
    <link rel="stylesheet" href="./css/material.indigo-pink.min.css">
    <script defer src="./js/material.min.js"></script>
    <link rel="stylesheet" href="./css/material-design-iconic-font.min.css"/>
    <script src="./js/jquery.js"></script>
    <link rel="stylesheet" href="./css/user.css">

<style type="text/css">
        
#myInput2 {
  background-image: url('search_emp.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 20px 20px 12px 63px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
  background-size: 45px 45px;
}

#myTable2 {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable2 th, #myTable2 td {
  text-align: left;
  padding: 12px;
  border:1px solid #eee;
}

#myTable2 tr {
  border-bottom: 1px solid #ddd;
}

#myTable2 tr.header{

background-color: #A1BEB4;

}


#myTable2 tr:hover {
  background-color: #f1f1f1;
  cursor: pointer;
}

#myTable2 tr.header:hover{

background-color: #A1BEB4;

}


    </style>

</head>
<body style="background: linear-gradient(to right, #2bc0e4, #eaecc6);">
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
                <a class="mdl-navigation__link" href="userReport.php"><i class="zmdi zmdi-chart"></i>&nbsp;Report</a>
                <a class="mdl-navigation__link" href="backend/logout.php"><i class="zmdi zmdi-lock-open zmdi-hc-lg"></i>&nbsp;Logout</a>
        </nav>
    </div>
    <main class="mdl-layout__content">
        <div class="page-content"><!-- Your content goes here -->
            <center><h3 class="form-heading"><i class="zmdi zmdi-chart"></i>&nbsp;Your Report</h3></center>
                    
                    <div id="report_content" style="clear: both;" style="width: 80%;
                            position: relative;
                            margin:0 auto;
                            line-height: 1.4em;overflow-x:scroll;
                                overflow-y:hidden;">
            
                    </div>


    </div>
    </main>
</div>

            <script src="js/user.js"></script>



  <script type="text/javascript">
      
$(document).ready(function(){


    fetch_report();


        function fetch_report(){


          $.ajax({


            url:'backend/user_report.php',
            method:'POST',
            success:function(data){

                $('#report_content').html(data);


                }


               })  


                }

        setInterval(function(){fetch_report();},60000);        


                });

function mySearch2(){

    var input,filter,table,tr,td,i;

    input=document.getElementById('myInput2');
    filter=input.value.toUpperCase(); 
    table=document.getElementById('myTable2');
    tr=table.getElementsByTagName('tr');
      for(i=0;i<tr.length;i++){
        td = tr[i].getElementsByTagName('td')[0];
        if(td){
          if(td.innerHTML.toUpperCase().indexOf(filter)>-1)
              {
                tr[i].style.display="";

              }
           else{

                tr[i].style.display='none';

           }   


        }
     
      }


}




  </script>          







</body>
</html>