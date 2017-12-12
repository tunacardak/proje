<?php  
session_start();
$_SESSION["toplam"]=true;
// $_SESSION["besinid"]=array();
include("veritabani.php");
$baglan2 = new mysqli($host, $kadi, $sifre, $db);

if(!empty($_SESSION["besinid"])){

}else{
	$_SESSION["besinid"]=array();
}
if(!empty($_SESSION["besinadi"])){

}else{
	$_SESSION["besinadi"]=array();
}
if(!empty($_SESSION["ogun"])){

}else{
	$_SESSION["ogun"]=array();
}

if(!empty($_POST["besin"])){
	$isim=trim($_POST["besin"]);

	if(!empty($_POST["porsiyon"])){
		$porsiyon=trim($_POST["porsiyon"]);
		$birim=$porsiyon/100;
	}else{
		$birim=1;
	}

	$sql="SELECT * from besinler where isim='$isim'";
	$sonuc=$baglan->query($sql);
	$satir=$sonuc->fetch_assoc();

	$sql="SELECT * from tarifler where isim='$isim'";
	$sonuc2=$baglan2->query($sql);
	$satir2=$sonuc2->fetch_assoc();
	if($satir2){
		$birim2=$porsiyon/$satir2["toplamporsiyon"];
	}

	if(mysqli_affected_rows($baglan)>0){

		$_SESSION["toplamPorsiyon"]+=(str_replace(",", ".", $satir["g"]))*$birim;
		$_SESSION["toplamEnerji"]+=(str_replace(",", ".", $satir["enerji"]))*$birim;
		$_SESSION["toplamKarbonhidrat"]+=(str_replace(",", ".", $satir["karbonhidrat"]))*$birim;
		$_SESSION["toplamProtein"]+=(str_replace(",", ".", $satir["protein"]))*$birim;
		$_SESSION["toplamYag"]+=(str_replace(",", ".", $satir["yag"]))*$birim;
		$besinid=$satir["id"];
		$besinadi=$satir["isim"];
	// echo ".".$besinid.".";
		$toplamPorsiyon=$_SESSION["toplamPorsiyon"];
		$toplamEnerji=$_SESSION["toplamEnerji"];
		$toplamKarbonhidrat=$_SESSION["toplamKarbonhidrat"];
		$toplamProtein=$_SESSION["toplamProtein"];
		$toplamYag=$_SESSION["toplamYag"];

		array_push($_SESSION["besinid"], $besinid);
		array_push($_SESSION["besinadi"], $besinadi);
		?> 
		<div class="content table-responsive table-full-width" id="toplam">
			<table class="table table-hover table-striped">
				<thead>
					<tr>
						<th>toplam</th>
						<th>porsiyon</th>
						<th>enerji</th>
						<th>karbonhidrat</th>
						<th>protein</th>
						<th>yağ</th>
					</tr>
				</thead>
				<tbody>
					<td></td>
					<td id="tpor"><?php echo $toplamPorsiyon ?></td>
					<td id="tene"><?php echo number_format($toplamEnerji,1) ?></td>
					<td id="tkar"><?php echo number_format($toplamKarbonhidrat,1) ?></td>
					<td id="tpro"><?php echo number_format($toplamProtein,1) ?></td>
					<td id="tyag"><?php echo number_format($toplamYag,1) ?></td>
				</tbody>
			</table>
		</div>
		<?php 
	}else if(mysqli_affected_rows($baglan2)>0){
		$_SESSION["toplamPorsiyon"]+=(str_replace(",", ".", $satir2["toplamporsiyon"]))*$birim2;
		$_SESSION["toplamEnerji"]+=(str_replace(",", ".", $satir2["toplamenerji"]))*$birim2;
		$_SESSION["toplamKarbonhidrat"]+=(str_replace(",", ".", $satir2["toplamkarbonhidrat"]))*$birim2;
		$_SESSION["toplamProtein"]+=(str_replace(",", ".", $satir2["toplamprotein"]))*$birim2;
		$_SESSION["toplamYag"]+=(str_replace(",", ".", $satir2["toplamyag"]))*$birim2;
		$besinid=$satir2["id"];
		$besinadi=$satir2["isim"];
	// echo ".".$besinid.".";
		$toplamPorsiyon=$_SESSION["toplamPorsiyon"];
		$toplamEnerji=$_SESSION["toplamEnerji"];
		$toplamKarbonhidrat=$_SESSION["toplamKarbonhidrat"];
		$toplamProtein=$_SESSION["toplamProtein"];
		$toplamYag=$_SESSION["toplamYag"];

		array_push($_SESSION["besinid"], $besinid);
		array_push($_SESSION["besinadi"], $besinadi);
		?> 
		<div class="content table-responsive table-full-width" id="toplam">
			<table class="table table-hover table-striped">
				<thead>
					<tr>
						<th>toplam</th>
						<th>porsiyon</th>
						<th>enerji</th>
						<th>karbonhidrat</th>
						<th>protein</th>
						<th>yağ</th>
					</tr>
				</thead>
				<tbody>
					<td></td>
					<td id="tpor"><?php echo $toplamPorsiyon ?></td>
					<td id="tene"><?php echo number_format($toplamEnerji,1) ?></td>
					<td id="tkar"><?php echo number_format($toplamKarbonhidrat,1) ?></td>
					<td id="tpro"><?php echo number_format($toplamProtein,1) ?></td>
					<td id="tyag"><?php echo number_format($toplamYag,1) ?></td>
				</tbody>
			</table>
		</div>
		<?php 
	}
}

if(!empty($_POST["silinecek"])){
	$silinecek=trim($_POST["silinecek"]);

	if(!empty($_POST["porsiyon"])){
		$porsiyon=trim($_POST["porsiyon"]);
		$birim=$porsiyon/100;
	}else{
		$birim=1;
	}
	
	$sql="SELECT * from besinler where isim='$silinecek'";
	$sonuc=$baglan->query($sql);
	$satir=$sonuc->fetch_assoc();

	$silinecekid=$satir["id"];
	if(mysqli_affected_rows($baglan)>0){
		$_SESSION["toplamPorsiyon"]-=(str_replace(",", ".", $satir["g"]))*$birim;
		$_SESSION["toplamEnerji"]-=(str_replace(",", ".", $satir["enerji"]))*$birim;
		$_SESSION["toplamKarbonhidrat"]-=(str_replace(",", ".", $satir["karbonhidrat"]))*$birim;
		$_SESSION["toplamProtein"]-=(str_replace(",", ".", $satir["protein"]))*$birim;
		$_SESSION["toplamYag"]-=(str_replace(",", ".", $satir["yag"]))*$birim;

		$toplamPorsiyon=$_SESSION["toplamPorsiyon"];
		$toplamEnerji=$_SESSION["toplamEnerji"];
		$toplamKarbonhidrat=$_SESSION["toplamKarbonhidrat"];
		$toplamProtein=$_SESSION["toplamProtein"];
		$toplamYag=$_SESSION["toplamYag"];
		?> 
		<div class="content table-responsive table-full-width" id="toplam">
			<table class="table table-hover table-striped">
				<thead>
					<tr>
						<th>toplam</th>
						<th>porsiyon</th>
						<th>enerji</th>
						<th>karbonhidrat</th>
						<th>protein</th>
						<th>yağ</th>
					</tr>
				</thead>
				<tbody>
					<td></td>
					<td id="tpor"><?php echo $toplamPorsiyon ?></td>
					<td id="tene"><?php echo number_format($toplamEnerji,1) ?></td>
					<td id="tkar"><?php echo number_format($toplamKarbonhidrat,1) ?></td>
					<td id="tpro"><?php echo number_format($toplamProtein,1) ?></td>
					<td id="tyag"><?php echo number_format($toplamYag,1) ?></td>
				</tbody>
			</table>
		</div>
		<?php 

	}else if(mysqli_affected_rows($baglan2)>0){
		$_SESSION["toplamPorsiyon"]-=(str_replace(",", ".", $satir["toplamporsiyon"]))*$birim;
		$_SESSION["toplamEnerji"]-=(str_replace(",", ".", $satir["toplamenerji"]))*$birim;
		$_SESSION["toplamKarbonhidrat"]-=(str_replace(",", ".", $satir["toplamkarbonhidrat"]))*$birim;
		$_SESSION["toplamProtein"]-=(str_replace(",", ".", $satir["toplamprotein"]))*$birim;
		$_SESSION["toplamYag"]-=(str_replace(",", ".", $satir["toplamyag"]))*$birim;

		$toplamPorsiyon=$_SESSION["toplamPorsiyon"];
		$toplamEnerji=$_SESSION["toplamEnerji"];
		$toplamKarbonhidrat=$_SESSION["toplamKarbonhidrat"];
		$toplamProtein=$_SESSION["toplamProtein"];
		$toplamYag=$_SESSION["toplamYag"];
		?> 
		<div class="content table-responsive table-full-width" id="toplam">
			<table class="table table-hover table-striped">
				<thead>
					<tr>
						<th>toplam</th>
						<th>porsiyon</th>
						<th>enerji</th>
						<th>karbonhidrat</th>
						<th>protein</th>
						<th>yağ</th>
					</tr>
				</thead>
				<tbody>
					<td></td>
					<td id="tpor"><?php echo $toplamPorsiyon ?></td>
					<td id="tene"><?php echo number_format($toplamEnerji,1) ?></td>
					<td id="tkar"><?php echo number_format($toplamKarbonhidrat,1) ?></td>
					<td id="tpro"><?php echo number_format($toplamProtein,1) ?></td>
					<td id="tyag"><?php echo number_format($toplamYag,1) ?></td>
				</tbody>
			</table>
		</div>
		<?php 
		
	}


	if (($silinecekid = array_search($silinecekid, $_SESSION["besinid"])) !== false) {
		unset($_SESSION["besinid"][$silinecekid]);
	}
	// print_r($_SESSION["besinid"]);
}

?>







