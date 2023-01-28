<?php 
include("header.php");

$readUsers = $db->query("SELECT kullanici_id, Firma_Adi, Yönetici_Ad_Soyad, Telefon, Mail, Adres FROM veriler");

?>

<!DOCTYPE html>
<html>
  
<head>

    <style>
        
        .white-btn {
            background-color:cornsilk;
            color:black;
            border: none; 
            transform:translateY(70px) translateX(360px);    
            margin-top:30px;
        }
        
        table, th, td {
            border: 1px solid white;
            border-collapse: collapse;
        }
        th, td {
            background-color: #FFF8DC;
        }
        
        h1 {
            font-family: monospace;
            text-align: center;
        }
        
        h4 {
            font-family: monospace;
            text-align: center;
        }
      
        .table-responsive {
            border: 1px solid white;
        }
    </style>
</head>
<body>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <a href="insert.php" class="btn btn-primary white-btn float-right"><i class="fa fa-plus"></i> Veri Ekle</a>
        </div>
    </div>
    <h1 class="text-center"> <b> HOŞGELDİNİZ </b>
      <?php 
      echo $_POST['username'];
      ?>
    </h1>
  
      <h4 class ="text-center">Firma Bilgileri
      </h4>
      
      <div class="table-responsive">
    <table class="table table-bordered"  >
        <thead>
            <tr>
                <td>Id </td>
                <td>Fİrma Adı</td>
                <td>Yönetici Ad-Soyad</td>
                <td>Telefon</td>
                <td>Mail</td>
                <td>Adres</td>
                <td>İşlem</td>
            </tr>
        </thead>
        <tbody>
        <?php while($user = $readUsers->fetch()) { ?>
            <tr>
                <td><?=$user['kullanici_id']?></td>
                <td><?= $user['Firma_Adi'] ?></td>
                <td><?= $user['Yönetici_Ad_Soyad'] ?></td>
                <td><?= $user['Telefon'] ?></td>
                <td><?= $user['Mail']?></td>
                <td><?= $user['Adres']?></td>
                 <td>
                   <a href="edit.php?userEdit=<?= $user['kullanici_id'] ?>" class="btn btn-primary" title="Bilgileri Güncelle"> Düzenle</a> 
                   <a href="functions.php?kullaniciSil=<?= $user['kullanici_adi'] ?>" class="btn btn-danger" title="Veri Sil">Sil</a>
                 </td> 
            </tr>
            <?php } ?>

        </tbody>
    </table>
    </div>
</body>
</html>




    <?php include("footer.php") ?>
