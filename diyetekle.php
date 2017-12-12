<?php  
session_start();
$_SESSION["toplamPorsiyon"]=0;
$_SESSION["toplamEnerji"]=0;
$_SESSION["toplamKarbonhidrat"]=0;
$_SESSION["toplamProtein"]=0;
$_SESSION["toplamYag"]=0;
$_SESSION["besinid"]=0;
include("veritabani.php");
$sql="SELECT * from besinler";
$sql2="SELECT * from tarifler";
$sonuc=$baglan->query($sql);
$sonuc2=$baglan->query($sql2);
while($satir=$sonuc->fetch_assoc()){
	$besinisim[]=$satir["isim"];
}
while($satir=$sonuc2->fetch_assoc()){
	$tarifisim[]=$satir["isim"];
}

$json=json_encode(array_merge($besinisim,$tarifisim));

?>

<meta charset="utf-8" />
<link rel="icon" type="image/png" href="assets/img/favicon.ico">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>Light Bootstrap Dashboard by Creative Tim</title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<meta name="viewport" content="width=device-width" />
<!-- Bootstrap core CSS     -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
<!-- Animation library for notifications   -->
<link href="assets/css/animate.min.css" rel="stylesheet" />
<!--  Light Bootstrap Table core CSS    -->
<link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet" />
<!--  CSS for Demo Purpose, don't include it in your project     -->
<link href="assets/css/demo.css" rel="stylesheet" />
<!--     Fonts and icons     -->
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
<link rel="stylesheet" href="auto-complete.css">
</head>
<body>
	<?php include("menu.php") ?>
	<div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed"></nav>
		<div class="content">
			<div class="wrapper">
				<div class="col-md-8">
					<div class="card">

						<div class="header">
							<h4 class="title">Yeni Diyet Ekle</h4>
						</div>
						<div class="content" id="genel">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Diyet Adı</label>
								<div class="col-sm-7">
									<input type="text" class="form-control" name="diyetadi" placeholder="Diyet Adı" id="diyetadi" autofocus>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword3" class="col-sm-3 col-form-label">Porsiyon Adedi</label>
								<div class="col-sm-7">
									<input type="text" class="form-control" name="porsiyon" placeholder="Porsiyon Adedi" id="porsiyon">
								</div>
							</div>

							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">İçindekiler</label>
								<div class="col-sm-4">
									<input type="text" class="form-control col-sm-3" name="icindekiler" placeholder="İçindekiler" id="tamamla">									
								</div>
								<select class="btn btn-default dropdown-toggle col-sm-3" id="ogun">
									<option value="kahvalti">Kahvaltı</option>
									<option value="ara1"> Öğleden Önce - Ara Öğün</option>
									<option value="ogle">Öğle Yemeği</option>
									<option value="ara2"> Akşamdan Önce - Ara Öğün</option>
									<option value="aksam">Akşam Yemeği</option>
									<option value="ara3"> Yatmadan Önce - Ara Öğün</option>
								</select>
								<div class="col-sm-2">
									<button type="submit" id="ekle" class="btn btn-default">Ekle</button>								
								</div>

							</div>
							<form action="tarifkayit.php" method="post" id="araform">

								<div class="content table-responsive table-full-width">
									<table class="table table-hover table-striped">
										<thead>
											<tr>

												<th>öğün adı</th>
												<th>besin adı</th>
												<th>porsiyon</th>
												<th>enerji</th>
												<th>karbonhidrat</th>
												<th>protein</th>
												<th>yağ</th>
												<th>tür</th>
												<td></td>


											</tr>
										</thead>
										<tbody id="kahvalti" style="visibility: hidden;">
											<tr>
												<td rowspan="30">Kahvaltı</td>
											</tr>
										</tbody>
										<tbody id="ara1" style="visibility: hidden;">
											<tr>
												<td rowspan="30">Ara Öğün</td>
											</tr>
										</tbody>
										<tbody id="ogle" style="visibility: hidden;">
											<tr>
												<td rowspan="30">Öğle Yemeği</td>
											</tr>
										</tbody>
										<tbody id="ara2" style="visibility: hidden;">
											<tr>
												<td rowspan="30">Ara Öğün</td>
											</tr>
										</tbody>
										<tbody id="aksam" style="visibility: hidden;">
											<tr>
												<td rowspan="30">Akşam Yemeği</td>
											</tr>
										</tbody>
										<tbody id="ara3" style="visibility: hidden;">
											<tr>
												<td rowspan="30">Yatmadan Önce</td>
											</tr>
										</tbody>

									</table>
								</div>
							</form>

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
											<!-- <th>tür</th> -->



										</tr>
									</thead>
									
									<tbody id="tbltoplam">
										<td></td>
										<td id="tpor"><?php echo $_SESSION["toplamPorsiyon"] ?></td>
										<td id="tene"><?php echo $_SESSION["toplamEnerji"] ?></td>
										<td id="tkar"><?php echo $_SESSION["toplamKarbonhidrat"] ?></td>
										<td id="tpro"><?php echo $_SESSION["toplamProtein"] ?></td>
										<td id="tyag"><?php echo $_SESSION["toplamYag"] ?></td>
										<!-- <th>tür</th> -->



									</tbody>

								</table>
							</div>

							<div style="display: flex; justify-content: flex-end;">
								<button type="submit" id="genelekle" class="btn btn-default">Diyeti Kaydet</button>
							</div>
						</div>
					</form>

				</div> 
			</div> 
		</div> 
	</div><!-- content bitiş-->
</div> 

<script src="auto-complete.min.js"></script>
<script>
	var demo1 = new autoComplete({
		selector: '#tamamla',
		minChars: 1,
		source: function(term, suggest){
			term = term.toLowerCase();
			var choices = <?php echo $json.";"; ?>
			var suggestions = [];
			for (i=0;i<choices.length;i++)
				if (~choices[i].toLowerCase().indexOf(term)) suggestions.push(choices[i]);
			suggest(suggestions);
		}
	});


</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>

		// $("#genelekle").click(function(){  
		// 	event.preventDefault();      
		// 	$.post("tarifkayit.php", $("#frmgenel").serialize(), function(data) {
		// 		console.log(data);
		// 	});
		// });

		$("#ekle").click(function(){
			deneme();
		});
		$("#genelekle").click(function(){
			kaydet();
		});
		function numarami(n) {
			if(n!=""){
				return !isNaN(parseFloat(n)) && isFinite(n);
			}else if(n==""){
				return true;
			}
		}
		function deneme(){
			var girilen=$("#tamamla").val();
			var porsiyon=$("#porsiyon").val();

			if(porsiyon>0){
				if(girilen!=""){
					var g = "besin=" + girilen+"&porsiyon="+porsiyon;
					$.ajax({
						type: "POST",
						url: "diyetgetir.php",
						data: g,
						success: function(h) {
							if ($.trim(h)=="a") {
								console.log("."+$.trim(h)+".");
								$.notify({
									icon: "pe-7s-cloud-upload",
									message: "Lütfen geçerli bir besin ismi girin"
								},
								{
									type: "danger",
									delay: 1500,
									placement: {
										from: "top",
										align: "center"
									}

								});
								$("#tamamla").val("");
								$("#tamamla").focus();

							}else {
								if($("#ogun").val()=="kahvalti"){
									$("#kahvalti").append(h);
									$("#kahvalti").css({"visibility":"visible"});
								}else if($("#ogun").val()=="ogle"){
									$("#ogle").append(h);
									$("#ogle").css({"visibility":"visible"});
								}else if($("#ogun").val()=="ogle"){
									$("#ogle").append(h);
									$("#ogle").css({"visibility":"visible"});
								}else if($("#ogun").val()=="aksam"){
									$("#aksam").append(h);
									$("#aksam").css({"visibility":"visible"});
								}else if($("#ogun").val()=="ara1"){
									$("#ara1").append(h);
									$("#ara1").css({"visibility":"visible"});
								}else if($("#ogun").val()=="ara2"){
									$("#ara2").append(h);
									$("#ara2").css({"visibility":"visible"});
								}else if($("#ogun").val()=="ara3"){
									$("#ara3").append(h);
									$("#ara3").css({"visibility":"visible"});
								}



								// $("#araform tbody").append(h);
								
								// $("#porsiyon").val("");
								// $("#tamamla").val("");
								// $("#porsiyon").focus();

							}
						}
					})	

					$.ajax({
						type: "POST",
						url: "besintoplam.php",
						data: g,
						success: function(t) {
							if ($.trim(t)=="a") {
								console.log("."+t+";.");
							} else {
								$("div#toplam").html(t);
							}
						}
					})
					

					
				}else{
					// alert("!"+girilen+"!");
					$("#tamamla").focus();
					$.notify({
						icon: "pe-7s-cloud-upload",
						message: "Lütfen bir besin ismi girin"
					},
					{
						type: "danger",
						delay: 1500,
						placement: {
							from: "top",
							align: "center"
						}

					});
					$("#tamamla").val("");
					// $("#porsiyon").val("");
					// $("#porsiyon").focus();


				}





			}else{
				$.notify({
					icon: "pe-7s-cloud-upload",
					message: "Lütfen geçerli bir miktar girin"
				},
				{
					type: "danger",
					delay: 1500,
					placement: {
						from: "top",
						align: "center"
					}

				});
				$("#porsiyon").focus();
			}
			


		}

		function sil(){
			var silinecek = $(this).closest("td").siblings(":nth-child(2)").html();
			var porsiyon = $(this).closest("td").siblings(":nth-child(2)").html();
			console.log(porsiyon);
			porsiyon=porsiyon.replace(/\D/g,'');
			// $(".sil").closest().parent().siblings(":nth-child(1)").next().css({"color": "red", "border": "2px solid red"});
			var g="silinecek="+silinecek+"&porsiyon="+porsiyon;
			$.ajax({
				type: "POST",
				url: "besintoplam.php",
				data: g,
				success: function(t) {
					if (t == "hata" || $.trim(t)=="a") {
						alert("eklerken bi hata olustu")
					} else {
						$("div#toplam").html(t)
					}
				}
			})
		}


		function kaydet(){

			var tarifadi=$("#tarifisim").val();
			if(tarifadi==""){
				$.notify({
					icon: "pe-7s-cloud-upload",
					message: "Lütfen bir tarif ismi girin"
				},
				{
					type: "danger",
					delay: 1500,
					placement: {
						from: "top",
						align: "center"
					}

				});
				$("#tarifisim").focus();
				

			}else if($("#tpor").html()=="0"){
				$.notify({
					icon: "pe-7s-cloud-upload",
					message: "Lütfen tarife bir besin ekleyin"
				},
				{
					type: "danger",
					delay: 1500,
					placement: {
						from: "top",
						align: "center"
					}

				});
				$("#porsiyon").focus();

			}


			else{
				var tpor=$("#tpor").html();
				var tene=$("#tene").html();
				var tkar=$("#tkar").html();
				var tpro=$("#tpro").html();
				var tyag=$("#tyag").html();
				var hazirlanisi=$("#hazirlanisi").val();


				var g="isim="+diyetadi+"&tpor="+tpor+"&tene="+tene+"&tkar="+tkar+"&tpro="+tpro+"&tyag="+tyag+"&hazirlanisi="+hazirlanisi;
				$.ajax({
					type: "POST",
					url: "tarifkayit.php",
					data: g,
					success: function(t) {
						if (t == "hata" || $.trim(t)=="a") {
							alert("eklerken bi hata olustu")
						} else {
							$.notify({
								icon: "pe-7s-cloud-upload",
								message: "Tarifiniz başarıyla kaydedildi"
							},
							{
								type: "success",
								delay: 1500,
								placement: {
									from: "top",
									align: "center"
								}

							});
							document.getElementById("genelekle").disabled = true;
							// $('#genelekle').attr("disabled", true);
							
							setInterval(function() {
								window.location.reload(true);

							}, 1500);

						}
					}
				})
			}
		}
		

		$('#tamamla').keyup(function(e){
			if(e.keyCode == 13)
			{
				deneme();
			}
		});

		$('#araform').on('click', '.sil', function(){
			event.preventDefault();
			var silinecek = $(this).closest("td").siblings(":nth-child(1)").html();
			var porsiyon = $(this).closest("td").siblings(":nth-child(2)").html();
			// console.log(porsiyon);
			porsiyon=porsiyon.replace(/\D/g,'');
			// console.log(porsiyon);
			// $(".sil").closest().parent().siblings(":nth-child(1)").next().css({"color": "red", "border": "2px solid red"});
			var g="silinecek="+silinecek+"&porsiyon="+porsiyon;
			$.ajax({
				type: "POST",
				url: "besintoplam.php",
				data: g,
				success: function(t) {
					if (t == "hata" || $.trim(t)=="a") {
						alert("eklerken bi hata olustu")
					} else {
						$("div#toplam").html(t)
					}
				}
			})
			$(this).closest ('tr').remove ();
			 // $(this).closest("td").siblings(":nth-child(2)").css({"color": "red", "border": "2px solid red"});
			});

		</script>

	</body>
	<script src="assets/js/bootstrap-notify.js"></script>
	</html>
