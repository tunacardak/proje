<?php 
$host = "localhost";
$kadi = "root";
$sifre = "";
$db = "proje";

$baglan = new mysqli($host, $kadi, $sifre, $db);
$baglan->Set_charset("utf8");
 ?>