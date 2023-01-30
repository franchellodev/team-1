<?php 
include("db.php");

if (isset($_POST['newUserForm'])) {
    try {
        $db = new PDO('mysql:host=localhost;dbname=team', 'root', 'root');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $readCurrentData = $db->prepare("SELECT * FROM veriler WHERE Firma_Adi = ? AND Yönetici_Ad_Soyad = ?");
        $readCurrentData->execute(array($_POST['Firma_Adi'], $_POST['Yönetici_Ad_Soyad']));
        $currentData = $readCurrentData->fetch();
        if ($currentData) {
            echo "Böyle bir kullanıcı bulunmakta.";
        } else {
            $newUserInsert = $db->prepare("INSERT INTO veriler (Firma_Adi, Yönetici_Ad_Soyad, Telefon, Mail, Adres) VALUES (?,?,?,?,?)");
            $newUserInsert->execute(array($_POST['Firma_Adi'], $_POST['Yönetici_Ad_Soyad'], $_POST['Telefon'], $_POST['Mail'], $_POST['Adres']));
            header("Location: index.php");
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}



if(isset($_GET['kullaniciSil'])) {
    
    try {
        
        $db = new PDO('mysql:host=localhost;dbname=team', 'root', 'root');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $stmt = $db->prepare("DELETE FROM veriler WHERE kullanici_id=:kullanici_id");
        $stmt->bindParam(':kullanici_id', $_GET['kullaniciSil']);
        $stmt->execute();
        
        header("Location: index.php");
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

if(isset($_POST['editUserForm'])) {
    try {
        $db = new PDO('mysql:host=localhost;dbname=team', 'root', 'root');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $editUserInsert = $db->prepare("UPDATE veriler SET kullanici_id=?,Firma_Adi = ?, Yönetici_Ad_Soyad = ?, Telefon = ?, Mail = ?, Adres= ? WHERE kullanici_id = ?");
        $editUserInsert->execute(array($_POST['kullanici_id'],$_POST['Firma_Adi'], $_POST['Yönetici_Ad_Soyad'], $_POST['Telefon'], $_POST['Mail'], $_POST['Adres'],$_POST['kullanici_id']));
        if ($editUserInsert->rowCount() > 0) {
            header("Location: index.php");
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}






?>