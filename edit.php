<?php 
include("header.php");

$readUsers = $db->query("SELECT * FROM users WHERE userId = ".$_GET['userEdit']."")->fetch();

?>

<h3 class="text-center">Kullanıcı Düzenle <i class="fa fa-user"></i></h3> 
<div class="row justify-content-center">
    
    <div class="col-md-6">
        <form action="functions.php" method="POST">
            <div class="form-group">
                <label for="">Ad</label>
                <input type="text" name="userName" class="form-control" value="<?= $readUsers['userName'] ?>">
            </div>
            <div class="form-group">
                <label for="">Soyad</label>
                <input type="text" name="userSurname" class="form-control" value="<?= $readUsers['userSurname'] ?>">
            </div>
            <div class="form-group">
                <label for="">E-Posta</label>
                <input type="text" name="userEmail" class="form-control" value="<?= $readUsers['userEmail'] ?>">
            </div>
            <div class="form-group">
                <label for="">Parola</label>
                <input type="text" name="userPassword" class="form-control" value="<?= $readUsers['userPassword'] ?>">
            </div>
            <div class="form-group">
                <input type="hidden" name="userId" value="<?= $readUsers['userId'] ?>">
                <button type="submit" name="editUserForm" class="btn btn-primary text-center btn-block mt-5" value="1"><i class="fa fa-save"></i> Kullanıcı Güncelle</button>
                <a href="index.php" class="btn btn-warning mt-3">Geri Dön</a>
            </div>
        </form>
    </div>
</div>


<?php 

include("footer.php");
?>