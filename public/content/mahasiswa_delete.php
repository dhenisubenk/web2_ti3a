<?php

if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];

    $delete = $con->query("DELETE FROM mahasiswa WHERE nim = '$nim'");

    if ($delete->rowCount() > 0) {
        # berhasil
        echo "<script>
                alert('Data berhasil dihapus');
                window.location.href = 'index.php?page=mahasiswa';
            </script>";
    } else {
        # gagal
        echo "<script>
                alert('Data gagal dihapus');
                window.location.href = 'index.php?page=mahasiswa';
            </script>";
    }
}
