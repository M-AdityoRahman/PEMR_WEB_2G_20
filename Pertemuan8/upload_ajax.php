<?php
if (isset($_FILES['file'])) {
    $errors = array();
    $allowed_extensions = array("jpg", "png", "jpeg");
    $file_count = count($_FILES['file']['name']); // Hitung jumlah file

    for ($i = 0; $i < $file_count; $i++) {
        $file_name = $_FILES['file']['name'][$i];
        $file_size = $_FILES['file']['size'][$i];
        $file_tmp = $_FILES['file']['tmp_name'][$i];
        $file_type = $_FILES['file']['type'][$i];
        @$file_ext = strtolower(end(explode('.', $_FILES['file']['name'][$i])));

        if (!in_array($file_ext, $allowed_extensions)) {
            $errors[] = "$file_name: Ekstensi file yang diizinkan hanya jpg, png, dan jpeg.";
        }

        if ($file_size > 2097152) {
            $errors[] = "$file_name: Ukuran file tidak boleh lebih dari 2 MB.";
        }

        if (empty($errors)) {
            move_uploaded_file($file_tmp, "uploads/" . $file_name);
            echo "$file_name berhasil diunggah.<br>";
        }
    }

    if (!empty($errors)) {
        echo implode("<br>", $errors);
    }
}
?>
