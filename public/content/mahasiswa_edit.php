<?php if (isset($_GET['nim'])) : ?>
    <?php
    $nim = $_GET['nim'];
    $sql = $con->query("SELECT * FROM mahasiswa WHERE nim = '$nim'");
    $data = $sql->fetch();
    ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Form Edit Mahasiswa
                </div>
                <div class="card-body">
                    <form action="index.php?page=mahasiswa_update" method="POST">
                        <div class="mb-2 row">
                            <div class="col-6">
                                <label class="form-label" for="">NIM</label>
                                <input type="text" name="nim" placeholder="Masukan NIM" value="<?= $data['nim'] ?>" class="form-control" readonly>
                            </div>
                            <div class="col-6">
                                <label class="form-label" for="">Nama</label>
                                <input type="text" name="nama" placeholder="Masukan Nama" value="<?= $data['nama'] ?>" class="form-control">
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="">Jurusan</label>
                            <select name="jurusan" class="form-select" id="">
                                <option <?= ($data['jurusan'] == "Teknik Informatika" ? "selected" : "") ?>>Teknik Informatika</option>
                                <option <?= ($data['jurusan'] == "Sistem Informasi" ? "selected" : "") ?>>Sistem Informasi</option>
                                <option <?= ($data['jurusan'] == "Manajemen Informatika" ? "selected" : "") ?>>Manajemen Informatika</option>
                                <option <?= ($data['jurusan'] == "Komputerisasi Akuntansi" ? "selected" : "") ?>>Komputerisasi Akuntansi</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="">Alamat</label>
                            <textarea name="alamat" placeholder="Masukan Alamat" class="form-control"><?= $data['alamat'] ?></textarea>
                        </div>
                        <div class="mb-2">
                            <button type="submit" class="btn btn-success"><i class="bi-check"></i> Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>