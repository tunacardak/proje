<?php
include("veritabani.php");

$sql = "INSERT INTO hastalar (ad,soyad,cinsiyet,yas,kilo,boy,meslek,tanilar,ilaclar,dogumsayisi,alisilankilo,kilodegisimi,alerji,sevilenbesin,sevilmeyenbesin)
VALUES ('".$_POST["ad"]."', '".$_POST["soyad"]."', '".$_POST["cinsiyet"]."', '".$_POST["yas"]."', '".$_POST["kilo"]."', '".$_POST["boy"]."', '".$_POST["meslek"]."', '".$_POST["tanilar"]."', '".$_POST["ilaclar"]."', '".$_POST["dogumsayisi"]."', '".$_POST["alisilankilo"]."', '".$_POST["kilodegisimi"]."', '".$_POST["alerji"]."', '".$_POST["sevilenbesin"]."', '".$_POST["sevilmeyenbesin"]."')";

if ($baglan->connect_error) {
    die("bağlantı hatası: " . $baglan->connect_error);
} 

if ($baglan->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $baglan->error;
}

$baglan->close();
?>