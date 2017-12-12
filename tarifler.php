<?php 
include("veritabani.php");
$sql="SELECT id,tarifadi,toplamenerji from tarifler";
$sonuc=$baglan->query($sql);
// $satir=$sonuc->fetch_assoc();
?>
<html>
<head>
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
							<h4 class="title">Tarif Listesi</h4>
						</div>
						<div class="content table-responsive table-full-width">
							<table class="table table-hover table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>Tarif Adı</th>
										<th>Toplam Kalori</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									$no=1;
									while ( $satir=$sonuc->fetch_assoc()) { 
										?>
										<tr>
											<td><a href="tarifdetay.php?id=<?php echo $satir["id"] ?>"><?php echo $no++; ?></a></td>
											<td><a href="tarifdetay.php?id=<?php echo $satir["id"] ?>"><?php echo $satir["tarifadi"] ?></a></td>
											<td><a href="tarifdetay.php?id=<?php echo $satir["id"] ?>"><?php echo $satir["toplamenerji"]." " ?>kcal</a></td>
										</tr>
										<?php }
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	</html>