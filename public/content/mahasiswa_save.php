<?php
$nim = htmlspecialchars($_POST['nim']);
$nama = htmlspecialchars($_POST['nama']);
$jurusan = htmlspecialchars($_POST['jurusan']);
$alamat = filter_var($_POST['alamat'], FILTER_SANITIZE_STRING);

//cek data kosong 
if (empty($nim) || empty($nama) || empty($alamat)) {
    echo "<script>
            alert('Data tidak boleh kosong');
            window.location.href = 'index.php?page=mahasiswa';
        </script>";
} else {

    //cek nim
    $cek = $con->query("SELECT * FROM mahasiswa WHERE nim = '$nim'");

    if ($cek->rowCount() == 0) {
        $sql = "INSERT INTO mahasiswa VALUES ('$nim','$nama','$jurusan','$alamat')";
        //$con->exec($sql);
        $simpan = $con->query($sql);

        if ($simpan->rowCount() > 0) {
            # berhasil
            echo "<script>
                    alert('Data berhasil ditambahkan');
                    window.location.href = 'index.php?page=mahasiswa';
                </script>";
        } else {
            # gagal
            echo "<script>
                    alert('Data gagal ditambahkan');
                    window.location.href = 'index.php?page=mahasiswa';
                </script>";
        }
    } else {
        echo "<script>
            alert('NIM tersebut sudah ada!');
            window.location.href = 'index.php?page=mahasiswa';
        </script>";
    }
}
