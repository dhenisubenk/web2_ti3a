<?php
//PDO
try {
    $con = new PDO('mysql:host=localhost;dbname=web2_ti3a', 'root', '');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Koneksi Gagal : " . $e->getMessage() . "<br>";
    die();
}
