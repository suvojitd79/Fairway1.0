<?php


session_start();

if(!isset($_SESSION['login_id']))
{
	header('Location:http://fairwaypharmaceuticlas.com/login.php');
	exit();

}




if(isset($_POST['travel_submit']))
{

if(trim($_POST['x1'])=='' || trim($_POST['x2'])=='' ||trim($_POST['x3'])=='' ||trim($_POST['x4'])=='')	
	   {

	   	$_SESSION['succ_travel']=1;
	   	header('Location:http://fairwaypharmaceuticlas.com/travel.php');
	   	exit();

		}
else{


$pdo = new PDO('mysql:host=107.180.50.162;dbname=fairPharmDB','fairPharmDBUser','h%XJQY-)J-E['); 

$sql="INSERT INTO travel_info(date_of_travel,from_,to_,distance,remarks,login_id) VALUES(:date_of_travel,:from_,:to_,:distance,:remarks,:login_id)";

$sqlm=$pdo->prepare($sql);

$sqlm->execute(array('date_of_travel'=>filter_var($_POST['x1'],FILTER_SANITIZE_STRING),'from_'=>$_POST['x2'],'to_'=>$_POST['x3'],'distance'=>$_POST['x4'],'remarks'=>$_POST['x5'],'login_id'=>$_SESSION['login_id']));

$_SESSION['succ_travel']=0;


header('Location:http://fairwaypharmaceuticlas.com/travel.php');
exit();

}




}





?>