<?php 
include("header.php");

$readUsers = $db->query("SELECT Firma_Adi, Yönetici_Ad-Soyad, Telefon, Mail, Adres FROM veriler");

?>

<!DOCTYPE html>
<html>
<head>
    <style>
        .white-btn {
            background-color:cornsilk;
            color:black;
            border: none;
        }
    </style>
</head>
<body>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <a href="insert.php" class="btn btn-primary white-btn float-right"><i class="fa fa-plus"></i> Veri Ekle</a>
        </div>
    </div>
</body>
</html>

    <h1 class="text-center" style="font-family:monospace;" > <b> HOŞGELDİNİZ </b>
      <?php 
      echo $_POST['name'];
      ?>
    </h1>
  
      <h4 class ="text-center" style="font-family:monospace;">Firma Bilgileri
      </h4>
      <html>
<head>
  <style>
    table, th, td {
      border: 1px solid white;
      border-collapse: collapse;
    }
    th, td {
      background-color: #FFF8DC
;
    }
  </style>
</head>
<body>
   <div class="table-responsive" style="border: 1px solid white;">
    <table class="table table-bordered"  >
        <thead>
            <tr>
                <td>Fİrma Adı</td>
                <td>Yönetici Ad-Soyad</td>
                <td>Telefon</td>
                <td>Mail</td>
                <td>Adres</td>
            </tr>
        </thead>
        <tbody>
          <?php while($user = $readUsers->fetch()) { ?>
            <tr>
                <td><?= $user['Firma_Adi'] ?></td>
                <td><?= $user['Yönetici_Ad-Soyad'] ?></td>
                <td><?= $user['Telefon'] ?></td>
                <td><?= $user['Mail']?></td>
                <td><?= $user['Adres']?></td>
                <td><a href="edit.php?userEdit=<?= $user['kullanici_id'] ?>" class="btn btn-primary" title="Bilgileri Güncelle"><i class="fa fa-edit"></i></a> <a href="functions.php?kullaniciSil=<?= $user['userId'] ?>" class="btn btn-danger" title="Veri Sil">Kullanıcı Sil</a> </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
</body>
</html>



    <?php include("footer.php") ?>
