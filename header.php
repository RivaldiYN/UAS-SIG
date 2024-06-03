<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SIG PEMETAAN DAN ANALISIS KERAWANAN BENCANA ALAM DI INDONESIA</title>
	<link rel="icon" href="assets/img/logoSIG.png">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
		integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- QGIS -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<link rel="stylesheet" href="css/leaflet.css">
	<link rel="stylesheet" href="css/L.Control.Locate.min.css">
	<link rel="stylesheet" href="css/qgis2web.css">
	<link rel="stylesheet" href="css/fontawesome-all.min.css">
	<link rel="stylesheet" href="css/leaflet-search.css">
	<link rel="stylesheet" href="css/leaflet-control-geocoder.Geocoder.css">

	<!-- maps Tambahan awal -->
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
		integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />

	<!-- maps tambahan akhir -->

	<style>
		#map {
			/* width: 1066px; */
			/* height: 548px; */
			width: 100%;
			height: 480px;
		}

		#map2 {
			/* width: 1066px; */
			/* height: 548px; */
			width: 100%;
			height: 350px;
		}
	</style>
</head>

<body>
	<header id="header">
		<div class="header-top">
			<div class="container">
				<div class="row align-items-center">
				</div>
			</div>
		</div>
		<div class="container main-menu">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="index.php"><img src="assets/img/logoSIG.png" width="60px" height="60px" alt=""
							title="" /></a>
				</div>
				<nav id="navbarToggleExternalContent">
					<ul class="nav-menu">
						<li><a href="index.php">Home</a></li>
						<li><a href="data_hotspot.php">Data Bencana</a></li>
						<li><a href="data_SDGs.php">SDG's</a></li>
						<li><a href="admin/login.php">Login Admin</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>