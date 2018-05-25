<?php session_start();
	$_SESSION["kullanici"]="yusuf";
	$_SESSION["sifre"]="123";
 ?>
<div id="menu">
			
			<ul>
				<li><a href="index.php">Anasayfa</a></li>
				<li><a href="proje.php">Proje</a></li>
				
					<li class="a">
						<form action="giris.php" method="post">
						<input type="text" name="kadi" class="form-control" placeholder="Kullanıcı Adı Girin..">
					</li>
						<li class="a"><input type="text" name="sifre" class="form-control" placeholder="Şifre Girin.."></li>
						<button type="submit" class="btn btn-success" id="btn">Giriş</button>
				</form>
			</ul>

		</div>