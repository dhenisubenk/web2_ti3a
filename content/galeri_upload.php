<?php
$file_name = $_FILES['gambar']['name'];
$file_tmp = $_FILES['gambar']['tmp_name'];
$file_size = $_FILES['gambar']['size'];
$file_type = $_FILES['gambar']['type'];

$allowType = ['jpg', 'jpeg', 'png'];
$type = pathinfo($file_name, PATHINFO_EXTENSION);

if (in_array($type, $allowType)) {
    if ($file_size > 1000000) {
        echo "File tidak boleh lebih dari 1MB";
    } else {
        if (move_uploaded_file($file_tmp, "img/" . $file_name)) {
            echo "File berhasil di upload";
        } else {
            echo "File gagal diupload";
        }
    }
} else {
    echo "File tidak support";
}
