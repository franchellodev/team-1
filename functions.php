<?php 
include("db.php");

if(isset($_POST['newUserForm'])) {
    $newUserInsert = $db->prepare("INSERT INTO users SET userName = ?, userSurname = ?, userEmail = ?, userPassword = ?");
    $newUserInsert->execute(array($_POST['kullaniciAdi'], $_POST['userSurname'], $_POST['userEmail'], $_POST['userPassword']));
    echo "Veri kaydedildi.";
    header("Location: index.php");
}

if(isset($_GET['kullaniciSil'])) {
    $userDelete = $db->query("DELETE FROM users WHERE userId = ".$_GET['kullaniciSil']."");
    
}

if(isset($_POST['editUserForm'])) {
    $editUserInsert = $db->prepare("UPDATE users SET userName = ?, userSurname = ?, userEmail = ?, userPassword = ? WHERE userId = ".$_POST['userId']."");
    $editUserInsert->execute(array($_POST['userName'], $_POST['userSurname'], $_POST['userEmail'], $_POST['userPassword']));
    header("Location: index.php");
}

?>