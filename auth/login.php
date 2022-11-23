<?php

require "../db.php";

if (isset($_POST['post_masuk'])) {

    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    $checkUser = $conn->query("SELECT * FROM tbl_adm WHERE username = '$username'");
    $checkPass = $conn->query("SELECT * FROM tbl_adm WHERE password = '$password'");
    if (empty($username) or empty($password)) {
        $toast = 1;
        echo "<script>alert('Masukan Username dan password')</script>";
        echo "<script>location.replace('login.php')</script>";
    } else {
        if (mysqli_num_rows($checkUser) <= 0) {
            $toast = 2;
            echo "<script>alert('Username tidak terdaftar')</script>";
            echo "<script>location.replace('login.php')</script>";
        } else {
            if (mysqli_num_rows($checkPass) <= 0) {
                $toast = 3;
                echo "<script>alert('Password anda salah')</script>";
                echo "<script>location.replace('login.php')</script>";
            } else {
                echo "<script>location.replace('../index.php')</script>";
            }
        }
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="../assets/izitoast/dist/css/iziToast.min.css">

    <link rel="stylesheet" href="../assets/css/costum.css">
</head>

<body>
    <div class="container mt-5 con-login">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post">
                            <h1>Silahkan login</h1>
                            <label for="">Username</label>
                            <input autocomplete="off" type="text" class="form-control mb-3" name="username">
                            <label for="">Password</label>
                            <input autocomplete="off" type="password" id="myInput" class="form-control" name="password">
                            <div class="">

                                <input type="checkbox" onclick="myFunction()" class="form-check-input">
                                <label class="form-check-label" for="flexCheckDefault">
                                    See password
                                </label>
                            </div>
                            <button class="btn btn-primary mt-3 " type="submit" name="post_masuk">Masuk</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/izitoast/dist/js/iziToast.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script src="../assets/js/costum.js"></script>
    <?php

    if (isset($toast)) {
        echo "<script>
        iziToast.show({
            title: 'Masukan Seluruh data!',
            message: 'What would you like to add?'
        });
        </script>";
    }

    ?>

    <script>


    </script>
</body>

</html>