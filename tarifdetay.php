<?php 
include("veritabani.php");
$sayfa=$_GET["id"];
$sql="SELECT * from tarifler where id=$sayfa";
$sonuc=$baglan->query($sql);
$satir=$sonuc->fetch_assoc();
session_start();



?>
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
                            <h4 class="title">Tarif Detay</h4>
                        </div>
                        <div class="content">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tarif Adı</label>
                                <div class="col-sm-8">
                                    <?php echo $satir["tarifadi"]; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-4 col-form-label">Toplam Porsiyon</label>
                                <div class="col-sm-8">
                                    <?php echo $satir["toplamporsiyon"]; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-4 col-form-label">Toplam Enerji</label>
                                <div class="col-sm-8">
                                    <?php echo $satir["toplamenerji"]; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-4 col-form-label">Toplam Karbonhidrat</label>
                                <div class="col-sm-8">
                                    <?php echo $satir["toplamkarbonhidrat"]; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-4 col-form-label">Toplam Protein</label>
                                <div class="col-sm-8">
                                    <?php echo $satir["toplamprotein"]; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-4 col-form-label">Toplam Yağ</label>
                                <div class="col-sm-8">
                                    <?php echo $satir["toplamyag"]; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">İçerdiği Besinler</label>
                                <div class="col-sm-8">
                                    <?php echo  $satir["isimler"] ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-4 col-form-label">Hazırlanışı</label>
                                <div class="col-sm-8">
                                    <?php echo $satir["hazirlanisi"]; ?>
                                </div>
                            </div>
                            
                        </div>

                    </div>
                </div>
            </div>
        </div><!-- content bitiş-->
    </div>
</body>