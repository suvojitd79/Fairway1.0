<?php

session_start();


if(isset($_POST['pro_offer']))
{


if(trim($_POST['x1'])=='' || trim($_POST['x2'])=='' ||trim($_FILES["x3"]["tmp_name"])=='' ||trim($_POST['x4'])=='' ||trim($_POST['x5'])=='')
{

$_SESSION['unable_pro']=1;
header('Location:http://fairwaypharmaceuticlas.com/addOffer.php');
exit();

}


$title=$_POST['x1'];
$name=$_POST['x2'];
$image=$_FILES["x3"]["tmp_name"];
$description=$_POST['x4'];
$validity=$_POST['x5'];
$extension = strtolower(pathinfo($_FILES["x3"]["name"], PATHINFO_EXTENSION));

$target_dir = "upload_image/";

$target=$target_dir.uniqid().'.'.$extension;

copy($_FILES["x3"]["tmp_name"], $target);

$image=$target;

$pdo = new PDO('mysql:host=107.180.50.162;dbname=fairPharmDB','fairPharmDBUser','h%XJQY-)J-E['); 


$sql = "INSERT INTO product_free(title,product,image,description,validity) VALUES(:title,:product,:image,:description,:validity)";


$stm=$pdo->prepare($sql);

$stm->execute(array('title'=>$title,'product'=>$name,'image'=>$image,'description'=>$description,'validity'=>$validity));

$_SESSION['unable_pro']=0;

header('Location:http://fairwaypharmaceuticlas.com/addOffer.php');
exit();

}



if(isset($_POST['med_offer']))
{


if(trim($_POST['x6'])=='' || trim($_POST['x7'])=='' ||trim($_POST['x8'])=='' ||trim($_POST['x9'])=='' ||trim($_POST['x10'])=='')
{

$_SESSION['unable_pro_med']=1;
header('Location:http://fairwaypharmaceuticlas.com/addOffer.php');
exit();

}



$title=$_POST['x6'];
$product=$_POST['x7'];
$sale=$_POST['x8'];
$free=$_POST['x9'];
$validity=$_POST['x10'];




$pdo = new PDO('mysql:host=107.180.50.162;dbname=fairPharmDB','fairPharmDBUser','h%XJQY-)J-E['); 


$sql = "INSERT INTO medicine_free(title,product,quantity,free,validity) VALUES(:title,:product,:quantity,:free,:validity)";


$stm=$pdo->prepare($sql);

$stm->execute(array('title'=>$title,'product'=>$product,'quantity'=>$sale,'free'=>$free,'validity'=>$validity));

$_SESSION['unable_pro_med']=0;
header('Location:http://fairwaypharmaceuticlas.com/addOffer.php');
exit();



  
}


?>