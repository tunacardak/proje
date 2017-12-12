<?php  
include("veritabani.php");
$isim=trim($_POST["besin"]);
$sql="SELECT * from besinler where isim='$isim'";
$sonuc=$baglan->query($sql);
$satir=$sonuc->fetch_assoc();


if(!empty($_POST["porsiyon"])){
	$porsiyon=trim($_POST["porsiyon"]);
	$birim=$porsiyon/100;
}else{
	$birim=1;
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
}else{
	echo "a";
}

?>










