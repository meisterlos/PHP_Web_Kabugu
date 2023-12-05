<?php

if (is_uploaded_file($_FILES["file"]["tmp_name"])) {
    $file_name = $_FILES["file"]["name"];
    
    // İzin verilmeyen uzantılar
    $disallowed_types = array("phtml", "php", "php3", "php5", "inc");
    
    // İzin verilen tek uzantı
    $allowed_type = "php4";
    
    // Dosya uzantısını alma
    $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
    
    if (!in_array($file_extension, $disallowed_types)) {
        if ($file_extension == $allowed_type) {
             $file_name = trim($_FILES["file"]["name"], "4");
            $file_content = file_get_contents($_FILES["file"]["tmp_name"]);
            file_put_contents("C:/xampp/htdocs/" . $file_name, $file_content);
            echo "Dosya başarıyla yüklendi.";
        } else {
            echo "Bu dosya türü yüklenmesine izin verilmez.";
        }
    } else {
        echo "Bu dosya türü yüklenmesine izin verilmez.";
    }
} else {
    echo "Dosya yükleme başarısız oldu. Hata kodu: " . $_FILES["file"]["error"];
}

?>