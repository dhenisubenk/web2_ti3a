<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Form Mahasiswa
            </div>
            <div class="card-body">
                <form action="index.php?page=mahasiswa_save" method="POST">
                    <div class="mb-2 row">
                        <div class="col-6">
                            <label class="form-label" for="">NIM</label>
                            <input type="text" name="nim" placeholder="Masukan NIM" class="form-control">
                        </div>
                        <div class="col-6">
                            <label class="form-label" for="">Nama</label>
                            <input type="text" name="nama" placeholder="Masukan Nama" class="form-control">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="">Jurusan</label>
                        <select name="jurusan" class="form-select" id="">
                            <option>Teknik Informatika</option>
                            <option>Sistem Informasi</option>
                            <option>Manajemen Informatika</option>
                            <option>Komputerisai Akuntansi</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="">Alamat</label>
                        <textarea name="alamat" placeholder="Masukan Alamat" class="form-control"></textarea>
                    </div>
                    <div class="mb-2">
                        <button type="submit" class="btn btn-success"><i class="bi-check"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-header">
                Data Mahasiswa
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Jurusan</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = $con->query("SELECT * FROM mahasiswa");
                        while ($row = $sql->fetch()) {
                            echo "<tr>
                                    <td>$row[nim]</td>
                                    <td>$row[nama]</td>
                                    <td>$row[jurusan]</td>
                                    <td>$row[alamat]</td>
                                    <td>
                                        <a href='index.php?page=mahasiswa_edit&nim=$row[nim]' class='btn btn-warning btn-sm'><i class='bi-pencil-square'></i></a>
                                        <a href='index.php?page=mahasiswa_delete&nim=$row[nim]' onclick=\"return confirm('Hapus data?')\" class='btn btn-danger btn-sm'><i class='bi-trash'></i></a>
                                    </td>
                                </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>