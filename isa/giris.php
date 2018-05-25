<?php session_start(); 
	if ($_POST) {
		
	$kadi=$_POST["kadi"];
	$sifre=$_POST["sifre"];
    if ($_SESSION["kullanici"] == $kadi && $_SESSION["sifre"] == $sifre) {
	include"baglan.php";
?>
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
</head>
<body>


	<div id="ust">

		

		<img src="img/logo.jpg" id="logo"> 
		<div id="menu">
			
			<ul>
				<li><a href="index.php">Anasayfa</a></li>
				<li><a href="proje.php">Proje</a></li>
				<li class="b">
					
					    <a><?php echo "Hoşgeldin , ".$_SESSION["kullanici"]; ?> </a>
				</li>
				<li>
					    <a href="cikis.php" style="color: red"><b>Çıkış yap</b></a>
				</li>
					  
				
		</div>
	</div>



	<div id="orta">
		
		<table class="table table-striped">
		  	<tr>
		  	<th></th>
		  	<th>id</th>
		  	<th>Tarih</th>
		  	<th>Yaptırılan iş</th>
		  	<th>Başlama Saati</th>
		  	<th>Bitiş saati</th>
		    <th>Görüş ve Düşünceler</th>
		  	<th>Eğitici Personel İmza</th>
		  	<th style="color: red">Update</th>
		  	<th style="color: red">Delete</th>
		  	<th class="btn btn-primary"><a href="ekle.php" style="color:white; text-decoration:none;" >Ekle</a></th>
		  	</tr>
		  	<?php 
		  		$veri = $vt -> query("SELECT * FROM gunluk order by id desc");
		  		$veri->execute();
		  		$veri = $vt->query("SELECT * FROM gunluk ORDER BY tarih  ASC");
		  		while ($row = $veri->fetch(PDO::FETCH_ASSOC)) {
	  			$tarih= $row["tarih"];
	  			$is= $row["yaptırılan_is"];
	  			$start= $row["baslama_saati"];
	  			$stop= $row["bitis_saati"];
	  			$gvd= $row["g_ve_d"]; 
	  			$id= $row["id"]; 
	  			$imza= $row["imza"]; 
		  	 ?>
		  	<tr>
		  		<td>//</td>
		  		<td><?php echo $id; ?></td>
		  		<td><?php echo $tarih; ?></td>
		  		<td><?php echo $is; ?></td>
		  		<td><?php echo $start; ?></td>
		  		<td><?php echo $stop; ?></td>
		  		<td><?php echo $gvd; ?></td>
		  		<td><?php echo $imza; ?></td>
		  		<td><a style="color: green" href="guncelle.php?id=<?php echo $row['id']?>">Güncelle</a></td>
		  		<td ><a style="color: red" href="temizle.php?id=<?php echo $row['id']?>">Temizle</a></td>
		  		<td>\\</td>
		  	</tr>
		  <?php } ?>
		  </table>
	</div>

	<div id="alt"><u>Yusuf İsa Dursun | Tüm hakları saklıdır ©</u></div>



<script src="bs/js/b.js" type="text/javascript"></script>
<script src="bs/js/bootstrap.js" type="text/javascript"></script>
<script src="bs/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>

<?php
}
else{
	echo "Yanlış giriş.. Birdaha dene.. 	"."<br>"."<br>"."<br>";
	echo 'Anasayfaya dönmek için <a href="index.php">tıkla</a>.<br>';
	}
}
 ?>
  
