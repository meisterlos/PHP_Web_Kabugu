<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>Dosya Yükleme ve İndirme</title>
</head>
<body>

<h1>Dosya Yükleme ve İndirme</h1>

<a href="index.php">Giriş</a>

<br>

<form action="upload.php" method="post" enctype="multipart/form-data">
 Dosya Yükle: <input type="file" name="file" />
 <input type="submit" value="Dosya Yükle" />
</form>

<br>

<form action="download.php" method="post">
 Dosya İndir: <input type="text" name="file" />
 <input type="submit" value="Dosya İndir" />
</form>

</body>
</html>