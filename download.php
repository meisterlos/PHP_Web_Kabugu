<?php

// Dosya indirme
if (isset($_POST["file"])) {
 $file_name = $_POST["file"];
 $file_path = $_SERVER["DOCUMENT_ROOT"] . "/" . $file_name;
 if (file_exists($file_path)) {
  header("Content-Type: application/octet-stream");
  header("Content-Disposition: attachment; filename=" . $file_name);
  echo file_get_contents($file_path);
 } else {
  echo "Dosya bulunamadı.";
 }
}

?>
