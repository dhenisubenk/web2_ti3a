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
    $cek = $con->prepare("SELECT * FROM mahasiswa WHERE nim = ?");
    $cek->bindParam(1, $nim);
    $cek->execute();

    if ($cek->rowCount() == 0) {
        $sql = "INSERT INTO mahasiswa VALUES (?, ?, ?, ?)";
        //$con->exec($sql);
        $simpan = $con->prepare($sql);
        $simpan->bindParam(1, $nim);
        $simpan->bindParam(2, $nama);
        $simpan->bindParam(3, $jurusan);
        $simpan->bindParam(4, $alamat);
        $simpan->execute();

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
