<?php
require_once '../config/fungsi.php';
require_once 'config/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
        body {
            background-color: aliceblue;
        }
    </style>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Form Login
                    </div>
                    <div class="card-body">
                        <form action="ceklogin.php" method="POST">
                            <div class="mb-2">
                                <label class="form-label" for="">Username</label>
                                <input type="text" name="username" placeholder="Masukan Username" class="form-control" required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="">Password</label>
                                <input type="password" name="password" placeholder="Masukan Password" class="form-control" required>
                            </div>
                            <div class="mb-2 d-grid">
                                <button type="submit" class="btn btn-success"><i class="bi-check"></i> Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>