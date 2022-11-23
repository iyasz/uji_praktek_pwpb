<?php

require "../db.php";

$select = $conn->query("SELECT * FROM Tbl_adm ");

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $telepon = $_POST['telepon'];

    if (empty($nama) or empty($username) or empty($password) or empty($telepon)) {
        echo "<script>alert('Masukan Seluruh data')</script>";
    } else {
        $simpan = $conn->query("INSERT INTO tbl_adm VALUES (NULL, '$nama','$username', '$password', '$telepon')");

        if ($simpan == TRUE) {
            echo "<script>alert('Data berhasil disimpan')</script>";
            echo "<script>location.replace('index.php')</script>";
        }
    }
}

if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    $delete = $conn->query("DELETE FROM tbl_adm WHERE id_adm = '$id'");
    echo "<script>location.replace('index.php')</script>";
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/datatables.min.css" />



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/costum.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand fw-semibold" href="../">Hi Admin!</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link " href="../">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="">Admin</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li> -->
                </ul>
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="../auth/login.php"><i class="bi bi-box-arrow-right"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-3 con-login">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg mb-3">
                    <div class="card-body ">
                        <form action="" method="post">
                            <div class="row">
                                <div class="form-group">
                                    <label for="">Nama <i class='bx bx-user'></i></label>
                                    <input autocomplete="off" type="text" name="nama" placeholder="Nama Admin" class="form-control mb-3 aa" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="">Username <i class='bx bx-user-pin'></i></label>
                                    <input type="text" autocomplete="off" name="username" id="kontak" placeholder="Username Admin" required class="form-control mb-3 aa">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="">Password </label>
                                    <input type="text" name="password" required autocomplete="off" id="kontak" placeholder="Nomor Telepon" class="form-control mb-3 aa">
                                </div>
                                <div class="form-group ">
                                    <label for="">Telepon <i class='bx bx-phone'></i></label>
                                    <input type="text" required name="telepon" id="kontak" placeholder="Alamat Admin" autocomplete="off" class="form-control mb-3 aa">
                                </div>

                                <div class="form-group text-end mt-4">
                                    <button class="btn btn-primary mt-4 btn-st" type="submit" name="submit">Submit</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <table id="table" class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Telepon</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($select as $selects) {  ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $selects['nama'] ?></td>
                                        <td><?= $selects['username'] ?></td>
                                        <td><?= $selects['password'] ?></td>
                                        <td><?= $selects['telepon'] ?></td>
                                        <td class="d-flex gap-1 justify-content-center">
                                            <a href="edit.php?id=<?= $selects['id_adm'] ?>" class="btn btn-primary btn-sm">Edit</a>
                                            <form action="" method="post">
                                                <input type="hidden" name="id" value="<?= $selects['id_adm'] ?>">
                                                <button class="btn btn-danger btn-sm" name="delete">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/datatables.min.js"></script>

    <script src="../assets/js/costum.js"></script>

</body>

</html>