
<!doctype html>
<html lang="en">

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
    <div class="wrapper">
        
        <?php include("menu.php") ?>    
        <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
                <!--             <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Daasdshboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                                <p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-lg hidden-md"></b>
                                    <p class="hidden-lg hidden-md">
                                        5 Notifications
                                        <b class="caret"></b>
                                    </p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
                                <p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
                                        Dropdown
                                        <b class="caret"></b>
                                    </p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="#">
                                <p>Log out</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div> -->
        </nav>
        <div class="content">
            <div class="container-fluid">
                <form action="kayit.php" method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Hasta Bilgileri</h4>
                                </div>
                                <div class="content">
                                    
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Ad</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="ad" placeholder="Ad">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Soyad</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="soyad" placeholder="Soyad">
                                        </div>
                                    </div>
                                    <fieldset class="form-group">
                                        <div class="row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Cinsiyet</label>
                                            <!-- <legend class="col-form-legend col-sm-2">Radios</legend> -->
                                            <div class="col-sm-8">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="cinsiyet" id="inlineRadio1" value="kadin"> Kadın &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                    </label>
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="cinsiyet" id="inlineRadio2" value="erkek"> Erkek
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-4 col-form-label">Yaş</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="yas" placeholder="Yaş">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-4 col-form-label">Kilo</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="kilo" placeholder="Kilo">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-4 col-form-label">Boy</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="boy" placeholder="Boy">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-4 col-form-label">Meslek</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="meslek" placeholder="Meslek">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="container-fluid"> -->
                            <!-- <div class="row"> -->
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="header">
                                            <h4 class="title">Medikal Hikaye</h4>
                                        </div>
                                        <div class="content">
                                            <!-- <div class="col-md-12"> -->
                                                <div class="form-group">
                                                    <label>Tanı Koyulmuş Hastalıklar</label>
                                                    <textarea rows="5" class="form-control" placeholder="Tanı Koyulmuş Hastalıklar" name="tanilar"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Düzenli Kullanılan İlaçlar</label>
                                                    <textarea rows="5" class="form-control" placeholder="Düzenli Kullanılan İlaçlar" name="ilaclar"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Toplam Doğum Sayısı</label>
                                                    <input type="text" class="form-control" name="dogumsayisi" placeholder="Toplam Doğum Sayısı">
                                                </div>
                                                <!-- </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="header">
                                                <h4 class="title">Diyet Hikayesi</h4>
                                            </div>
                                            <div class="content">
                                                <!-- <div class="col-md-12"> -->
                                                    <div class="form-group">
                                                        <label>Alışılagelmiş Kilo</label>
                                                        <textarea rows="5" class="form-control" placeholder="Alışılagelmiş Kilo" name="alisilankilo"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Son 3 Aydaki Kilo Değişimi</label>
                                                        <textarea rows="5" class="form-control" placeholder="Son 3 Aydaki Kilo Değişimi" name="kilodegisimi"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Besin Alerjileri</label>
                                                        <input type="text" class="form-control" name="alerji" placeholder="Besin Alerjileri">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>En Sevdiği Besinler</label>
                                                        <input type="text" class="form-control" name="sevilenbesin" placeholder="En Sevdiği Besinler">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Hiç Sevmediği Besinler</label>
                                                        <input type="text" class="form-control" name="sevilmeyenbesin" placeholder="Hiç Sevmediği Besinler">
                                                    </div>
                                                    <!-- </div> -->
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- </div> -->
                                    <!-- </div> -->
                                </div>
                            </div>
                            <!-- ************* -->
                            <!-- ************* -->
                        </div>
                        <footer class="footer">
                            <div class="container-fluid">
                    <!-- <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav> -->
                <p class="copyright pull-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script> <a href="#">Şirket İsmi</a>
                </p>
            </div>
        </footer>
    </div>
</div>
</body>
<!--   Core JS Files   -->
<script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        demo.initChartist();

    // $.notify({
    //      icon: 'pe-7s-gift',
    //      message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

    //    },{
    //        type: 'info',
    //        timer: 4000
    //    });

});
</script>

</html>