<?php 

include("header.php");

?>
<h3 class="text-center">Yeni Kullanıcı Kaydı <i class="fa fa-user"></i></h3> 
<div class="row justify-content-center">
    
    <div class="col-md-6">
        <form action="functions.php" method="POST">
            <div class="form-group">
                <label for="">Ad</label>
                <input type="text" name="userName" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Soyad</label>
                <input type="text" name="userSurname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">E-Posta</label>
                <input type="text" name="userEmail" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Parola</label>
                <input type="password" name="userPassword" class="form-control" required>
            </div>
            <div class="form-group">
                <button type="submit" name="newUserForm" class="btn btn-primary text-center btn-block mt-5" value="1"><i class="fa fa-save"></i> Kullanıcı Kaydet</button>
                <a href="index.php" class="btn btn-warning mt-3">Geri Dön</a>
            </div>
        </form>
    </div>
</div>


<?php 

include("footer.php");
?>