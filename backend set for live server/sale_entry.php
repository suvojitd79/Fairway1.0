<?php

session_start();

if(!isset($_SESSION['login_id']))
{
header('Location:http://fairwaypharmaceuticlas.com/login.php');
exit();

}

if(isset($_POST['sale_entry']))
{
	$field1=$_POST['fields1'];
	$field2=$_POST['fields2'];
	$field3=$_POST['fields3'];
	$field4=$_POST['fields4'];

	$x = count($field1);
	

	for($i=0;$i<$x;$i++) {
		
		if(trim($field2[$i])=='' || trim($field3[$i])=='' || trim($field1[$i])=='')
		{
			$_SESSION['sale_error']=1;
			header('Location:http://fairwaypharmaceuticlas.com/saleEntry.php');
			exit();

		}


	}


$pdo = new PDO('mysql:host=107.180.50.162;dbname=fairPharmDB','fairPharmDBUser','h%XJQY-)J-E['); 

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

for($i=0;$i<$x;$i++)
	{

$sql = "INSERT INTO sale_entry(user_id,date_of_issue,medicine_name,quantity,remarks) 
	VALUES(:user_id,:date_of_issue,:medicine_name,:quantity,:remarks)";

$sqlm=$pdo->prepare($sql);

$sqlm->execute(array('user_id'=>$_SESSION['login_id'],'date_of_issue'=>$field1[$i],'medicine_name'=>$field2[$i],'quantity'=>$field3[$i],'remarks'=>$field4[$i]));

	}



$_SESSION['sale_error']=0;
header('Location:http://fairwaypharmaceuticlas.com/saleEntry.php');
exit();



}


?>