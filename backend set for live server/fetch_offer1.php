<?php

session_start();
ob_start();
date_default_timezone_set("Asia/kolkata");


$pdo = new PDO('mysql:host=107.180.50.162;dbname=fairPharmDB','fairPharmDBUser','h%XJQY-)J-E['); 


$sql="SELECT * FROM medicine_free ORDER BY id ASC";

//echo strtotime('2018-08-15')+86400-time();

$stl=$pdo->prepare($sql);

$stl->execute();

$row=$stl->fetchAll();


$answer='';	



	foreach ($row as $key) {
		
		// $answer.='	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 profile box-small">
		// 					<div class="img-box">
		// 						<img  src="backend/upload_image/medicine123.jpg"  class="img-responsive" id="img1">
							
		// 					</div>
		// 					<h1 style="background:#2DB1FF;color:#000;padding:5px;">Offer: '.$key['title'].'</h1><br>
		// 					<h2 style="background:#2DB1FF;color:#000;">Product :'.$key['product'].'</h2><br>
		// 					<h2 style="background:#2DB1FF;color:#000;">Quantity: '.$key['quantity'].'</h2><br>
		// 					<h2 style="background:#2DB1FF;color:#000;">Free medicine: '.$key['free'].'</h2>
		// 					<button type="button" class="btn btn-success">valid till: '.$key['validity'].'</button>

		// 				</div>

					
		// 			';

		$answer.='<div class="column1">
				    <div class="card1">
				      <img src="backend/upload_image/medicine123.jpg"  style="width:100%;">
				      <div class="container1">
				        <h5>Offer: '.$key['title'].'</h5>
				        <h4 class="title1">Product :'.$key['product'].'</h4>
				        <p>Quantity: '.$key['quantity'].'</p>
				        <p>Free: '.$key['free'].'</p>
				        <p style="background:#EB3D00;color:#F2F2F0;border-radius:3px;width:40px;padding:3px;">New!</p>
				        <p><button class="button1">valid till :'.$key['validity'].'</button></p>
				      </div>
				    </div>
				  </div>';			
				





	}



echo $answer;



?>