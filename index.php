<?php 
include("header.php");

$readUsers = $db->query("SELECT userId, userName, userSurname, userEmail FROM users");

?>

<div class="row justify-content-center">
  <div class="col-md-6">
    <a href="insert.php" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Veri Ekle</a>
  </div>
</div>
    <h3 class="text-center">Kullanıcıların Verileri 
      <?php 
      echo $_POST['name'];
      ?>
    </h3>
    <div class="table-responsive" style="background: #fff;">
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>Adı</td>
                <td>Soyadı</td>
                <td>E-Posta</td>
                <td>Şifre</td>
                <td>İşlem</td>
            </tr>
        </thead>
        <tbody>
          <?php while($user = $readUsers->fetch()) { ?>
            <tr>
                <td><?= $user['userName'] ?></td>
                <td><?= $user['userSurname'] ?></td>
                <td><?= $user['userEmail'] ?></td>
                <td><?= $user['userPassword']?></td>
                <td><a href="edit.php?userEdit=<?= $user['userId'] ?>" class="btn btn-primary" title="Veri Güncelle"><i class="fa fa-edit"></i></a> <a href="functions.php?kullaniciSil=<?= $user['userId'] ?>" class="btn btn-danger" title="Veri Sil">Kullanıcı Sil</a> </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>


    <?php include("footer.php") ?>
