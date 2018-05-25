<?php 

	include"baglan.php";
	$id=$_GET["id"];
	$sil=$vt->prepare("DELETE FROM gunluk where id=?");
	$sil->execute(array($id));
	if ($sil) {
		echo "Kayıt Başarıyla Silindi.."."<br>"."<br>";
	}
	else
	{
		echo "Bir sorun oluştu..";
	}
 ?>
Geri dönmek için<a style="color:red;" href="index.php">Tıklayın..</a>.
