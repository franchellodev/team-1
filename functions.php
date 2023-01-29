<?php 
include("db.php");



if(isset($_POST['newUserForm'])) {
    try {
        $stmt = $db->prepare("INSERT INTO veriler (Firma_Adi, Yönetici_Ad_Soyad, Telefon, Mail, Adres) VALUES (:Firma_Adi, :Yönetici_Ad_Soyad, :Telefon, :Mail, :Adres)");
     
        $stmt->bindValue(':Firma_Adi', $_POST['Firma_Adi']);
        $stmt->bindValue(':Yönetici_Ad_Soyad', $_POST['Yönetici_Ad_Soyad']);
        $stmt->bindValue(':Telefon', $_POST['Telefon']);
        $stmt->bindValue(':Mail', $_POST['Mail']);
        $stmt->bindValue(':Adres', $_POST['Adres']);
        $stmt->execute();
        header("Location: index.php");
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}



if(isset($_GET['kullaniciSil'])) {
    
    try {
        
        $db = new PDO('mysql:host=localhost;dbname=team', 'root', 'root');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $stmt = $db->prepare("DELETE FROM veriler");
        $stmt->bindParam(':id', $_GET['kullaniciSil']);
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