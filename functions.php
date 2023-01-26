<?php 
include("db.php");

if(isset($_POST['newUserForm'])) {
    
    $readCurrentData = $db->query("SELECT * FROM veriler WHERE Firma_Adi = '".$_POST['Firma_Adi']."' AND Yönetici_Ad-Soyad = '".$_POST['userSurname']."'")->fetch();
    if(count($readCurrentData)>1) echo "Böyle bir kullanıcı bulunmakta.";
    else echo "Bilgiler Eklendi";
    return 0;

    $newUserInsert = $db->prepare("INSERT INTO veriler SET Firma_Adi = ?, Yönetici_Ad-Soyad = ?, Telefon = ?, Mail = ?, Adres= ?");
    $newUserInsert->execute(array($_POST['Firma_Adi'], $_POST['Yönetici_Ad-Soyad'], $_POST['Telefon'], $_POST['Mail'], $_POST['Adres']));
    echo "Bilgiler kaydedildi.";

}


if(isset($_GET['kullaniciSil'])) {
    $userDelete = $db->query("DELETE FROM veriler WHERE kullanici_id = ".$_GET['kullaniciSil']."");   /* ??? */
    header("Location: index.php");
    
}

if(isset($_POST['editUserForm'])) {
    $editUserInsert = $db->prepare("UPDATE veriler SET Firma_Adi = ?, Yönetici_Ad-Soyad = ?, Telefon = ?, Mail = ?, Adres= ? WHERE kullanici_id = ".$_POST['kullanici_id']."");  /* ??? */
    $editUserInsert->execute(array($_POST['Firma_Adi'], $_POST['Yönetici_Ad-Soyad'], $_POST['Telefon'], $_POST['Mail'], $_POST['Adres']));
    header("Location: index.php");
}

?>