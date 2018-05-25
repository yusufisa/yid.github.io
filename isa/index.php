<!DOCTYPE html>
<html>
<head>
	<title>Anasayfa</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="bs/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bs/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bs/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="bs/css/bootstrap-theme.min.css">
	<?php include"baglan.php"; ?>
</head>
<body>


	<div id="ust">

		<img src="img/logo.jpg" id="logo"> 
		<?php include"menu.php"?>
	</div>



	<div id="orta">
		
		<div id="veri_s" class="container-fluid table table-striped" >
			<div class="row">
				<div class="col-md-2"><b>Tarih</b></div>
				<div class="col-md-2"><b>Yaptırılan İş</b></div>
				<div class="col-md-2"><b>Başlama Saati</b></div>
				<div class="col-md-2"><b>Bitiş Saati</b></div>
				<div class="col-md-2"><b>Görüş ve Düşünceler</b></div>
				<div class="col-md-2"><b>Eğitici Personel İmza</b></div>
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------				
			</div>

		<?php 	$veri = $vt -> query("SELECT * FROM gunluk order by id desc LIMIT 20");
  		$veri->execute();

  		 $veri = $vt->query("SELECT * FROM gunluk ORDER BY tarih  ASC");

  		while ($row = $veri->fetch(PDO::FETCH_ASSOC)) {
  			$tarih= $row["tarih"];
  			$is= $row["yaptırılan_is"];
  			$start= $row["baslama_saati"];
  			$stop= $row["bitis_saati"];
  			$gvd= $row["g_ve_d"]; 
  			$imza= $row["imza"]; ?>
			<div class="row">
				<div class="col-xs-2 c"><?=$tarih?></div>
				<div class="col-xs-2 c"><?=$is?></div>
				<div class="col-xs-2 c"><?=$start?></div>
				<div class="col-xs-2 c"><?=$stop?></div>
				<div class="col-xs-2 c"><?=$gvd?></div>
				<div class="col-xs-2 c"><?=$imza?></div>
			</div>
________________________________________________________________________________________________________________
			<?PHP } ?>
			
		</div>

	</div>

	<div id="alt"><u>Yusuf İsa Dursun | Tüm hakları saklıdır ©</u></div>



<script src="bs/js/b.js" type="text/javascript"></script>
<script src="bs/js/bootstrap.js" type="text/javascript"></script>
<script src="bs/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
