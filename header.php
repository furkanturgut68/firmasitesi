<?php  
require_once 'admin/baglan.php';

$sql = "SELECT * FROM ayarlar WHERE id=1";
$stmt = $baglan->prepare($sql);
$stmt->execute();
$ayarlar = $stmt->fetch(PDO::FETCH_ASSOC); 

?>


<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title><?php echo $ayarlar['baslik']; ?></title>

  <meta name="description" content="<?php echo $ayarlar['aciklama']; ?>">
  <meta name="keywords" content="<?php echo $ayarlar['anahtarkelime']; ?>">
  <meta name="author" content="Novena Firma">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="plugins/icofont/icofont.min.css">
  <!-- Slick Slider  CSS -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body id="top">

<header>
	<div class="header-top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<ul class="top-bar-info list-inline-item pl-0 mb-0">
						<li class="list-inline-item"><a href="mailto:<?php echo $ayarlar['mailadres']; ?>"><i class="icofont-support-faq mr-2"></i><?php echo $ayarlar['mailadres']; ?></a></li>
						<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i><?php echo $ayarlar['adres']; ?> </li>
					</ul>
				</div>
				<div class="col-lg-6">
					<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
						<a href="tel:+23-345-67890" >
							<span>İletişim : </span>
							<span class="h4"><?php echo $ayarlar['telefon']; ?></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
		 	 <a class="navbar-brand" href="index.html">
			  	<img src="images/logo.png" alt="" class="img-fluid">
			  </a>

		  	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icofont-navigation-menu"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse" id="navbarmain">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="index.php">Anasayfa</a>
			  </li>
			   <li class="nav-item"><a class="nav-link" href="hakkimizda.php">Hakkımızda</a></li>

			   <?php 

$sql = "SELECT * FROM kategori order by kategori_sira ASC";
$stmt = $baglan->prepare($sql);
$stmt->execute();

while($kategoriler = $stmt->fetch(PDO::FETCH_ASSOC)){
	$katid= $kategoriler['id'];

?>

			    <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="department.html" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $kategoriler['kategori_baslik'] ?><i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown02">

						<?php 
						$id = $_GET["katid"];
						$sql = "SELECT * FROM altkategori WHERE kategori_id = :katid ORDER BY alt_sira";
						$stmt = $baglan->prepare($sql);
						$stmt->bindParam(":katid",$katid);
						$stmt->execute();

						while($altkategori = $stmt->fetch(PDO::FETCH_ASSOC)){

						?>
						<li><a class="dropdown-item" href="department.html"><?php echo $altkategori['alt_baslik'] ?></a></li>

						<?php }?>
					</ul>
			  	</li>

				<?php } ?>
				<li class="nav-item"><a class="nav-link" href="galeri.php">Galeri</a></li>
			   <li class="nav-item"><a class="nav-link" href="iletisim.php">İletişim</a></li>
			</ul>
		  </div>
		</div>
	</nav>
</header>