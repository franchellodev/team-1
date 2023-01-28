<?php 
include("header.php");

$readUsers = $db->query("SELECT * FROM veriler WHERE kullanici_id = ".$_GET['userEdit']."")->fetch();  /* ?? */

?>

<h3 class="text-center"> Kullanıcıyı Düzenle <i class="fa fa-user"></i></h3> 
<div class="row justify-content-center">
    
    <div class="col-md-6">
        <form action="functions.php" method="POST">
            <div class="form-group">
                <label for="">Firma Adı</label>
                <input type="text" name="Firma_Adi" class="form-control" value="<?= $readUsers['Firma_Adi'] ?>">
            </div>
            <div class="form-group">
                <label for="">Yönetici Ad-Soyad</label>
                <input type="text" name="Yönetici_Ad_Soyad" class="form-control" value="<?= $readUsers['Yönetici_Ad_Soyad'] ?>">
            </div>
            <div class="form-group">
                <label for="">Telefon</label>
                <input type="text" name="Telefon" class="form-control" value="<?= $readUsers['Telefon'] ?>">
            </div>
            <div class="form-group">
                <label for="">Mail</label>
                <input type="text" name="Mail" class="form-control" value="<?= $readUsers['Mail'] ?>">
            </div>
            <div class="form-group">
                <label for="">Adres</label>
                <input type="text" name="Adres" class="form-control" value="<?= $readUsers['Adres'] ?>">
            </div>
            <div class="form-group">
                <input type="hidden" name="kullanici_id" value="<?= $readUsers['kullanici_id'] ?>">
                <button type="submit" name="editUserForm" class="btn btn-primary text-center btn-block mt-5" value="1"><i class="fa fa-save"></i> Bilgileri Güncelle </button>
                <a href="index.php" class="btn btn-warning mt-3">Geri Dön</a>
            </div>
        </form>
    </div>
</div>


<?php 

include("footer.php");
?>