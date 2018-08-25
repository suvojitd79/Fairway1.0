<?php  


session_start();


$pdo = new PDO('mysql:host=107.180.50.162;dbname=fairPharmDB','fairPharmDBUser','h%XJQY-)J-E['); 

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$sql = "SELECT * FROM employee WHERE designation=:designation AND status=:status";

$sqlm = $pdo->prepare($sql);

$sqlm->execute(array('designation'=>'Medical Representative','status'=>'Active'));

$rows = $sqlm->fetchAll();

$output='<option disabled selected>Name: Email of the Supplier </option>';



foreach ($rows as $key) {
	
	$output.='<option value='.$key['email'].'>'.$key['name'].'-'.$key['email'].'</option>';

}


echo $output;






?>                         