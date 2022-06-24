<?php
if (isset($_GET["p"])) {
    if ($_GET["p"] === "beranda") {
        $APage = "active";
        $page = "beranda.php";
        $TPage = "Beranda";
    }
    if ($_GET["p"] === "mhs") {
        $BPage = "active";
        if (isset($_GET["sp"])) {
            if ($_GET["sp"] == "tambahdata") {
                $page = "mhs_tambah.php";
                $TPage = "Tambah Data Mahasiswa";
            }
            if ($_GET["sp"] == "editdata") {
                $page = "mhs_editdata.php";
                $TPage = "Edit Data Mahasiswa";
            }
            if ($_GET["sp"] == "hapusdata") {
                $page = "mhs_hapusdata.php";
                $TPage = "Hapus Data Mahasiswa";
            }
        } else {
            $page = "mhs_list.php";
            $TPage = "Data Mahasiswa";
        }
    }
    if ($_GET["p"] === "matkul") {
        $CPage = "active";
        if (isset($_GET["sp"])) {
            if ($_GET["sp"] == "tambahdata") {
                $page = "matkul_tambah.php";
                $TPage = "Tambah Data Mata Kuliah";
            }
            if ($_GET["sp"] == "editdata") {
                $page = "matkul_editdata.php";
                $TPage = "Edit Data Mata Kuliah";
            }
            if ($_GET["sp"] == "hapusdata") {
                $page = "matkul_hapusdata.php";
                $TPage = "Hapus Data Mata Kuliah";
            }
        } else {
            $page = "matkul_list.php";
            $TPage = "Data Mata Kuliah";
        }
    }
    if ($_GET["p"] === "dosen") {
        $DPage = "active";
        if (isset($_GET["sp"])) {
            if ($_GET["sp"] == "tambahdata") {
                $page = "dosen_tambah.php";
                $TPage = "Tambah Data Dosen";
            }
            if ($_GET["sp"] == "editdata") {
                $page = "dosen_editdata.php";
                $TPage = "Edit Data Dosen";
            }
            if ($_GET["sp"] == "hapusdata") {
                $page = "dosen_hapusdata.php";
                $TPage = "Hapus Data Dosen";
            }
        } else {
            $page = "dosen_list.php";
            $TPage = "Data Dosen";
        }
    }
}else{
    $APage = "active";
    $page = "beranda.php";
    $TPage = "Beranda";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $TPage; ?></title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <style>
        body{
            font-family: 'Hind Siliguri', sans-serif;
        }
    </style>
    <nav  class="navbar navbar-expand-lg   mx-4 " style="background-color: #e3f2fd;>
        <div class="container-fluid ms-4">
            <a class="navbar-brand" href="index.php?p=beranda">
                <img src="../assets/images/logo.svg" alt="logo" width="160px" height="60px" >
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav ms-auto me-3 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link fw-bold text-dark <?= $APage; ?>" aria-current="page" href="index.php?p=beranda">BERANDA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold text-dark <?= $BPage; ?>" href="index.php?p=mhs">MAHASISWA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold text-dark <?= $CPage; ?>" href="index.php?p=matkul">MATA KULIAH</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold text-dark <?= $DPage; ?>" href="index.php?p=dosen">DOSEN</a>
                    </li>
                    </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid mt-5"> 
        <?php
        include_once($page);
        ?>
    </div>

</body>

</html>