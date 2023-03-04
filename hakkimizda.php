<?php require_once 'header.php';

$sql = "SELECT * FROM hakkimizda WHERE id=1";
$stmt = $baglan->prepare($sql);
$stmt->execute();
$hakkimizda = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Novena Firma</span>
          <h1 class="text-capitalize mb-5 text-lg">Hakkımızda</h1>

         
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section about-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h2 class="title-color">Hakkımızda</h2>
			</div>
			<div class="col-lg-8">
				<p><?php echo $hakkimizda['aciklama']; ?></p>
			</div>

			<div class="col-lg-4">
				<h3 class="title-color">Misyon</h3>
			</div>
			<div class="col-lg-8">
				<p><?php echo $hakkimizda['misyon']; ?></p>
			</div>

			<div class="col-lg-4">
				<h3 class="title-color">Vizyon</h3>
			</div>
			<div class="col-lg-8">
				<p><?php echo $hakkimizda['vizyon']; ?></p>
			</div>
		</div>

	
	</div>
</section>


<?php require_once 'footer.php'?>