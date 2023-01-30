<?php 

include("header.php");

?>
<h3 class="text-center"> Yeni Kullanıcı Kaydı <i class="fa fa-user"></i></h3> 
<div class="row justify-content-center">
    
    <div class="col-md-6">
        <form action="functions.php" method="POST">
        <div class="form-group">
                <label for="">Id</label>
                <input type="text" name="kullanici_id" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Firma Adı</label>
                <input type="text" name="Firma_Adi" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Yönetici Ad-Soyad</label>
                <input type="text" name="Yönetici_Ad_Soyad" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Telefon</label>
                <input type="text" name="Telefon" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Mail</label>
                <input type="text" name="Mail" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Adres</label>
                <input type="text" name="Adres" class="form-control" required>
            </div>
            <div class="form-group">
                <button style="background-color:cornsilk" type="submit" name="newUserForm" class="btn btn-primary text-center btn-block mt-5" value="1"><i class="fa fa-save" style="color:black;"> </i>
                    <span style="color:black">Kullanıcıyı Kaydet</span>
                </button>
                <a href="index.php" style="background-color: #FFF8DC;border:none" class="btn btn-warning mt-3">Geri Dön</a>
            </div>
        </form>
    </div>
</div>


<?php 

include("footer.php");
?>