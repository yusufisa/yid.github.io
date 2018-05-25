    <link rel="stylesheet" type="text/css" href="bs/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bs/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bs/css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="bs/css/bootstrap-theme.min.css">
<?php
include"baglan.php";
  if ($_GET) {
    $id=$_GET["id"];
    $guncelle= $vt->query("SELECT * FROM gunluk where  id = $id LIMIT 1 ")->fetch();
  }

 ?>

 <div class="container">
 <div class="row">
        <form action="#" method="POST">
              <table class="table table-bordereds ">
                <tr>
                  <td>id</td>
                  <td><input type="text" name="id" value="<?= $guncelle["id"]?>"></td>
                </tr>
                <tr>
                  <td>Tarih</td>
                  <td><input type="text" name="gun" value="<?= $guncelle["tarih"]?>"></td>
                </tr>
                <tr>
                  <td>Yaptırılan İş</td>
                  <td><input type="text" name="y_is" value="<?=$guncelle["yaptırılan_is"]?>"></td>
                </tr>
                <tr>
                  <td>Başlama Saati</td>
                  <td>
                     <input type="text" name="b_s" value="<?=$guncelle["baslama_saati"]?>">
                  </td>
                </tr>
                 <tr>
                  <td>Bitiş Saati</td>
                  <td>
          <input type="text" name="bts_s" value="<?=$guncelle["bitis_saati"]?>">
          </td>
                </tr>
         <tr>
                  <td>Görüş ve Düşünceler</td>
                  <td>
          <textarea name="gvd"><?=$guncelle["g_ve_d"]?></textarea>
          </td>
                </tr>
                <tr>
                  <td>İmza</td>
                    <td>
                     <input type="text" name="i" value="<?=$guncelle["imza"]?>">
                    </td>
                  </tr>
                 <tr>

                   <td rowspan="4">
                     <input type="submit" value="Kaydet" style="position: absolute; left: 617px;" class="btn btn-success" />
                  </td>
                </tr>
              </table>
       </form>
      </div>
  </div>
  <?php
  if ($_POST) 
  {

    $id=$_POST["id"];
    $gun=$_POST["gun"];
    $y_is=$_POST["y_is"];
    $b_s=$_POST["b_s"];
    $bts_s=$_POST["bts_s"];
    $gvd=$_POST["gvd"];
    $i=$_POST["i"];

      $x= $vt->prepare("UPDATE gunluk SET tarih=?, yaptırılan_is=?, baslama_saati=?, bitis_saati=? ,g_ve_d=? ,imza=? WHERE id=?");
      $y=$x->execute(array($gun,$y_is,$b_s,$bts_s,$gvd,$i,$id));
      echo "<a class='btn btn-primary' href='index.php'>"."Veriler güncellendi..Yönlendiriliyorsun.."."</a>";
      header("Refresh: 3; url=index.php");
  }
  ?>

