<?php 
    // include koneksi
    include "koneksi.php";

    //user check
    if (!$_SESSION["user"]) {
        header("location:page/login.php");
    }

    //get variable
    $page = $_GET["page"];

    //include title
    include "title.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php title($page) ?></title>
    <!-- link style -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="index.php" class="navbar-brand">Akademik</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Jurusan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=prodi">Prodi</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?page=mahasiswa" class="nav-link">Mahasiswa</a>
                    </li>
                </ul>
                <p class="navbar-nav text-light">Selamat Datang, <?= $_SESSION["user"] ?></p>
                <a href="page/logout.php" class="btn btn-danger ms-3">Logout</a>
            </div>
        </div>
    </nav>


    <!-- content -->
    <div class="container mt-4">
        
    </div>

    <!-- link script -->
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>