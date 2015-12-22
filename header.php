<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Data Kependudukan</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Admin Panel Template">
<meta name="author" content="Westilian: Kamrujaman Shohel">
<!-- styles -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/jquery-ui-1.8.16.custom.css" rel="stylesheet">
<link href="css/jquery.jqplot.css" rel="stylesheet">
<link href="css/prettify.css" rel="stylesheet">
<link href="css/elfinder.min.css" rel="stylesheet">
<link href="css/elfinder.theme.css" rel="stylesheet">
<link href="css/fullcalendar.css" rel="stylesheet">
<link href="js/plupupload/jquery.plupload.queue/css/jquery.plupload.queue.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/icons-sprite.css" rel="stylesheet">
<link id="themes" href="css/themes.css" rel="stylesheet">
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="css/ie/ie7.css" />
<![endif]-->
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="css/ie/ie8.css" />
<![endif]-->
<!--[if IE 9]>
<link rel="stylesheet" type="text/css" href="css/ie/ie9.css" />
<![endif]-->
<!--fav and touch icons -->
<link rel="shortcut icon" href="ico/favicon.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
<!-- Shared on MafiaShare.net  --><!-- Shared on MafiaShare.net  --></head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner top-nav">
    <div class="container-fluid">
      <div class="branding">
        <div class="logo"> <a href="index.php"><img src="img/logodesa.png" width="168" height="40" alt="Logo"></a> </div>
      </div>
      <ul class="nav pull-right">
        <li class="dropdown search-responsive"><a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="nav-icon magnifying_glass"></i><b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li class="top-search">
              <form action="#" method="get">
                <div class="input-prepend"> <span class="add-on"><i class="icon-search"></i></span>
                  <input type="text" id="searchIcon">
                </div>
              </form>
            </li>
          </ul>
        </li>
        <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#">admint</a>
          </ul>
        </li>
      </ul>
      <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <div class="nav-collapse collapse">
        <ul class="nav">
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="sidebar">
  <ul class="side-nav accordion_mnu collapsible">
    <li><a href="index.php"><span class="white-icons computer_imac"></span> Beranda</a></li>

    <li><a href="#"><span class="white-icons list"></span> Data Pindah</a>
      <ul class="acitem">
        <li><a href="form-pindah-penduduk.php"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Tambah Data</a></li>
        <li><a href="table-pindah-penduduk.php"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Lihat Data</a></li>
        
      </ul>
    </li>

    <li><a href="#"><span class="white-icons list"></span> Data Datang</a>
      <ul class="acitem">
        <li><a href="form-penduduk.php"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Tambah Data</a></li>
        <li><a href="table-data-datang.php"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Lihat Data</a></li>
        
      </ul>
    </li>

    <li><a href="#"><span class="white-icons list"></span> Data Penduduk</a>
      <ul class="acitem">
        <li><a href="table-penduduk.php"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Lihat Data</a></li>
        
      </ul>
    </li>
  </ul>

  
</div>