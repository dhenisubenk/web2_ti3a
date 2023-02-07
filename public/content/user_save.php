<?php
$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);
$level = htmlspecialchars($_POST['level']);

$pass_hash = password_hash($password, PASSWORD_DEFAULT);

//cek data kosong 
if (empty($username) || empty($password) || empty($level)) {
    echo "<script>
            alert('Data tidak boleh kosong');
            window.location.href = 'index.php?page=user';
        </script>";
} else {

    //cek username
    $cek = $con->prepare("SELECT * FROM user WHERE username = ?");
    $cek->bindParam(1, $username);
    $cek->execute();

    if ($cek->rowCount() == 0) {
        $sql = "INSERT INTO user (username, password, level) VALUES (?, ?, ?)";
        //$con->exec($sql);
        $simpan = $con->prepare($sql);
        $simpan->bindParam(1, $username);
        $simpan->bindParam(2, $pass_hash);
        $simpan->bindParam(3, $level);
        $simpan->execute();

        if ($simpan->rowCount() > 0) {
            # berhasil
            echo "<script>
                    alert('Data berhasil ditambahkan');
                    window.location.href = 'index.php?page=user';
                </script>";
        } else {
            # gagal
            echo "<script>
                    alert('Data gagal ditambahkan');
                    window.location.href = 'index.php?page=user';
                </script>";
        }
    } else {
        echo "<script>
            alert('NIM tersebut sudah ada!');
            window.location.href = 'index.php?page=user';
        </script>";
    }
}
