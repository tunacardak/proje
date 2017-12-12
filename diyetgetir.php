<?php  
include("veritabani.php");
$baglan2 = new mysqli($host, $kadi, $sifre, $db);
$isim=trim($_POST["besin"]);
$sql="SELECT * from besinler where isim='$isim'";
$sonuc=$baglan->query($sql);
$satir=$sonuc->fetch_assoc();

$sql="SELECT * from tarifler where isim='$isim'";
$sonuc2=$baglan2->query($sql);
$satir2=$sonuc2->fetch_assoc();

// $toplamPorsiyon=0;
// $toplamEnerji=0;
// $toplamKarbonhidrat=0;
// $toplamProtein=0;
// $toplamYag=0;
if(!empty($_POST["porsiyon"])){
	$porsiyon=trim($_POST["porsiyon"]);
	$birim=$porsiyon/100;

}else{
	$birim=1;
}
if($satir2){
	$birim2=$porsiyon/$satir2["toplamporsiyon"];
}



if(mysqli_affected_rows($baglan)>0){
	$toplamPorsiyon=str_replace(",", ".", $satir["g"]);
	$toplamEnerji=str_replace(",", ".", $satir["enerji"]);
	$toplamKarbonhidrat=str_replace(",", ".", $satir["karbonhidrat"]);
	$toplamProtein=str_replace(",", ".", $satir["protein"]);
	$toplamYag=str_replace(",", ".", $satir["yag"]);
	?>
	<tr>
		<td><?php echo $satir["isim"]; ?></td>
		<td><?php echo ($birim*$toplamPorsiyon)." gr"; ?></td>
		<td><?php echo ($birim*$toplamEnerji)." kcal"; ?></td>
		<td><?php echo ($birim*$toplamKarbonhidrat)." g"; ?></td>
		<td><?php echo ($birim*$toplamProtein)." g"; ?></td>
		<td><?php echo ($birim*$toplamYag)." g"; ?></td>
		<td><?php echo $satir["grup"]; ?></td>
		<td><a href="#" class="sil" >Sil</a></td>
	</tr> 
	<?php 
}else if(mysqli_affected_rows($baglan2)>0){
	$toplamPorsiyon=str_replace(",", ".", $satir2["toplamporsiyon"]);
	$toplamEnerji=str_replace(",", ".", $satir2["toplamenerji"]);
	$toplamKarbonhidrat=str_replace(",", ".", $satir2["toplamkarbonhidrat"]);
	$toplamProtein=str_replace(",", ".", $satir2["toplamprotein"]);
	$toplamYag=str_replace(",", ".", $satir2["toplamyag"]);
	?>
	<tr>
		<td><?php echo $satir2["isim"]; ?></td>
		<td><?php echo ($birim2*$toplamPorsiyon)." gr"; ?></td>
		<td><?php echo round(($birim2*$toplamEnerji),2)." kcal"; ?></td>
		<td><?php echo round(($birim2*$toplamKarbonhidrat),2)." g"; ?></td>
		<td><?php echo round(($birim2*$toplamProtein),2)." g"; ?></td>
		<td><?php echo round(($birim2*$toplamYag),2)." g"; ?></td>
		<td></td>
		<td><a href="#" class="sil" >Sil</a></td>
	</tr> 
	<?php 
}else{
	echo "a";
}

?>










