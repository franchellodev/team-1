<?php 
include("db.php");

if(isset($_POST['newUserForm'])) {
    
    $readCurrentData = $db->query("SELECT * FROM users WHERE userName = '".$_POST['userName']."' AND userSurname = '".$_POST['userSurname']."'")->fetch();
    if(count($readCurrentData)>1) echo "Böyle bir kullanıcı zaten var.";
    else echo "Veri eklendi";
    return 0;

    $newUserInsert = $db->prepare("INSERT INTO users SET userName = ?, userSurname = ?, userEmail = ?, userPassword = ?");
    $newUserInsert->execute(array($_POST['kullaniciAdi'], $_POST['userSurname'], $_POST['userEmail'], $_POST['userPassword']));
    echo "Veri kaydedildi.";

}


if(isset($_GET['kullaniciSil'])) {
    $userDelete = $db->query("DELETE FROM users WHERE userId = ".$_GET['kullaniciSil']."");
    header("Location: index.php");
    
}

if(isset($_POST['editUserForm'])) {
    $editUserInsert = $db->prepare("UPDATE users SET userName = ?, userSurname = ?, userEmail = ?, userPassword = ? WHERE userId = ".$_POST['userId']."");
    $editUserInsert->execute(array($_POST['userName'], $_POST['userSurname'], $_POST['userEmail'], $_POST['userPassword']));
    header("Location: index.php");
}

?>