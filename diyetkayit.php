<?php
session_start();

include("veritabani.php");
$idler=$_SESSION["besinid"];
$isimler=$_SESSION["besinadi"];
$idler=implode(";", $idler);
$isimler=implode(";", $isimler);
$tarifadi=$_POST["tarifadi"];
$tpor=$_POST["tpor"];
$tene=$_POST["tene"];
$tkar=$_POST["tkar"];
$tpro=$_POST["tpro"];
$tyag=$_POST["tyag"];	
$hazirlanisi=$_POST["hazirlanisi"];



$sql = "INSERT INTO tarifler (tarifadi,toplamporsiyon,toplamenerji,toplamkarbonhidrat,toplamprotein,toplamyag,idler,isimler,hazirlanisi)
VALUES ('$tarifadi' , '$tpor','$tene','$tkar','$tpro','$tyag', '$idler' ,'$isimler' , '$hazirlanisi')";

if ($baglan->connect_error) {
	die("bağlantı hatası: " . $baglan->connect_error);
} 

if ($baglan->query($sql) === TRUE) {
	$_SESSION["besinadi"]="";
} else {
	echo "Error: " . $sql . "<br>" . $baglan->error;
}

$baglan->close();
?>
