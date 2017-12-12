<?php 
include("veritabani.php");
$sayfa=$_GET["id"];
$sql="SELECT * from hastalar where id=$sayfa";
$sonuc=$baglan->query($sql);
$satir=$sonuc->fetch_assoc();
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
                            <h4 class="title">Hasta Bilgileri</h4>
                        </div>
                        <div class="content">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Ad</label>
                                <div class="col-sm-8">
                                    <?php echo $satir["ad"]; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-4 col-form-label">Soyad</label>
                                <div class="col-sm-8">
                                    <?php echo $satir["soyad"]; ?>
                                </div>
                            </div>
                            <fieldset class="form-group">
                                <div class="row">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">Cinsiyet</label>
                                    <!-- <legend class="col-form-legend col-sm-2">Radios</legend> -->
                                    <div class="col-sm-8">
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="cinsiyet" id="inlineRadio1" value="kadin" checked="<? if ($satir['cinsiyet'] == 'kadin'){ echo 'checked'; } ?>"> Kadın &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="cinsiyet" id="inlineRadio2" value="erkek" checked="<? if ($satir['cinsiyet'] == 'erkek'){ echo 'checked'; } ?>"> Erkek
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">Yaş</label>
                                <div class="col-sm-8">
                                    <?php echo $satir["yas"]; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">Kilo</label>
                                <div class="col-sm-8">
                                    <?php echo $satir["kilo"]; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">Boy</label>
                                <div class="col-sm-8">
                                    <?php echo $satir["boy"]; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">Meslek</label>
                                <div class="col-sm-8">
                                    <?php echo $satir["meslek"]; ?>
                                </div>
                            </div>
                        </div>
                        <div class="header">
                            <h4 class="title">Medikal Hikaye</h4>
                        </div>
                        <div class="content">
                            <!-- <div class="col-md-12"> -->
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Tanı Koyulmuş Hastalıklar</label>
                                    <div class="col-sm-8">
                                        <?php echo $satir["tanilar"]; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">düzenli kullanılan ilaçlar</label>
                                    <div class="col-sm-8">
                                        <?php echo $satir["ilaclar"]; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">Doğum Sayısı</label>
                                    <div class="col-sm-8">
                                        <?php echo $satir["dogumsayisi"]; ?>
                                    </div>
                                </div>
                                <!-- </div> -->
                            </div>
                            <div class="header">
                                <h4 class="title">Diyet Hikayesi</h4>
                            </div>
                            <div class="content">
                                <!-- <div class="col-md-12"> -->
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Alışılagelmiş Kilo</label>
                                        <div class="col-sm-8">
                                            <?php echo $satir["alisilankilo"]; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">SON 3 AYDAKI KILO DEĞIŞIMI</label>
                                        <div class="col-sm-8">
                                            <?php echo $satir["kilodegisimi"]; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Besin alerjileri</label>
                                        <div class="col-sm-8">
                                            <?php echo $satir["alerji"]; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">en sevilen besinler</label>
                                        <div class="col-sm-8">
                                            <?php echo $satir["sevilenbesin"]; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">en sevilmeyen besinler</label>
                                        <div class="col-sm-8">
                                            <?php echo $satir["sevilmeyenbesin"]; ?>
                                        </div>
                                    </div>
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- content bitiş-->
            </div>
        </body>