<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Form User
            </div>
            <div class="card-body">
                <form action="index.php?page=user_save" method="POST">
                    <div class="mb-2 row">
                        <div class="col-6">
                            <label class="form-label" for="">Username</label>
                            <input type="text" name="username" placeholder="Masukan Username" class="form-control">
                        </div>
                        <div class="col-6">
                            <label class="form-label" for="">Password</label>
                            <input type="text" name="password" placeholder="Masukan Password" class="form-control">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="">Level</label>
                        <select name="level" class="form-select" id="">
                            <option>Admin</option>
                            <option>User</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <button type="submit" class="btn btn-success"><i class="bi-check"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-header">
                Data User
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $sql = $con->query("SELECT * FROM user");
                        while ($row = $sql->fetch()) {
                            echo "<tr>
                                    <td>$no</td>
                                    <td>$row[username]</td>
                                    <td>$row[level]</td>
                                    <td>
                                        <a href='' class='btn btn-warning btn-sm'><i class='bi-pencil-square'></i></a>
                                        <a href='' onclick=\"return confirm('Hapus data?')\" class='btn btn-danger btn-sm'><i class='bi-trash'></i></a>
                                    </td>
                                </tr>";

                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>