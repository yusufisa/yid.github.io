<?php 
	
	try {
		$vt = new PDO("mysql:host=localhost;dbname=yusuf;charset=utf8","root","");
	} 
	catch (PDOException $e) 
	{
		echo $e->getmessage();
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Ekle</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="bs/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bs/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bs/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="bs/css/bootstrap-theme.min.css">
</head>
<body>

<div class="container" style="color:#fff;">     
<form method="post" action="index.php">   
  <table class="table table-condensed">
  		<tr>
  			<td>Tarih : </td>
  			<td>
  				<input type="date" name="t" class="r">
  			</td>
  		</tr>
  		<tr>
  			<td>Yaptırılan İş : </td>
  			<td>
  				<input type="text" name="yi" class="r">
  			</td>
  		</tr>
  		<tr>
  			<td>Başlama saati : </td>
  			<td>
  				<input type="time" name="bs" class="r">
  			</td>
  		</tr>
  		<tr>
  			<td>Bitiş saati : </td>
  			<td>
  				<input type="time" name="bts" class="r">
  			</td>
  		</tr>
  		<tr>
  			<td>Görüş ve Düşünceler : </td>
  			<td>
  				<textarea name="gvd" class="r" rows="5" cols="30"></textarea>
  			</td>
  		</tr>
  		<tr>
  			<td>İmza : </td>
  			<td>
  				<input type="text" name="i" class="r">
  			</td>
  		</tr>
  		<tr>
  			<td>
  				<input type="submit" value="Ekle" class="btn btn-success">
  			</td>
  			<td>
  				<input type="reset" value="Temizle" class="btn btn-primary">
  			</td>
  		</tr>
  </table>
  </form>
  <?php 
        if($_POST){
        
            $t        =    $_POST["t"];
            $yi    =    $_POST["yi"];
            $bs    =    $_POST["bs"];
            $bts    =    $_POST["bts"];
            $gvd    =    $_POST["gvd"];
            $i    =    $_POST["i"];
            
            $ekle        = $vt -> prepare("insert into gunluk (tarih,yaptırılan_is,baslama_saati,bitis_saati,g_ve_d,imza) values (?,?,?,?,?,?)");
			$ekle -> execute(array($t,$yi,$bs,$bts,$gvd,$i));
            
            if($ekle){
                echo "Başarılı Bir Şekilde Eklendi !";
            }else{
                echo "Bir Sorun Oluştu";
            }
        }
        

    ?>


</div>


<div id="alt"><u>Yusuf İsa Dursun | Tüm hakları saklıdır ©</u> <a href="index.php" class="btn btn-danger" style="text-decoration: none; color:white; position: absolute; margin-left: 816px; margin-top: 18px;">Anasayfa</a> </div>



<script src="bs/js/b.js" type="text/javascript"></script>
<script src="bs/js/bootstrap.js" type="text/javascript"></script>
<script src="bs/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>

