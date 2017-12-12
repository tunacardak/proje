<?php 
session_start();

// $sql = "INSERT INTO tarifler (tarifadi,toplamporsiyon,toplamenerji,toplamkarbonhidrat,toplamprotein,idler)
// VALUES ('".$_POST["tarifadi"]."', '".$_POST["toplamporsiyon"]."', '".$_POST["toplamenerji"]."', '".$_POST["toplamkarbonhidrat"]."', '".$_POST["toplamprotein"]."', '".$idler"')";
// if(!empty($_SESSION["besinid"])){

// }else{
// 	$_SESSION["besinid"]=array();
// }
// $isim=$_POST['besin'];
// array_push($_SESSION["besinid"], $isim);

// print_r($_SESSION["besinid"]);

// print_r($_SESSION["besinadi"]);
$idler=implode(";", $_SESSION["besinadi"]);
echo $idler;
// session_destroy();
?>