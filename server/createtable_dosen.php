<?php
    include_once("dbkoneksi2.php");
    $sql = "CREATE TABLE dosen(
        NIP varchar(20) PRIMARY KEY,
        NAMA varchar(40),
        STTS enum('TETAP','HONOR'),
        NOTELP varchar(13)
    );";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "Tabel Dosen Berhasil dibuat<br>";
    }else{
        echo "Tabel Dosen gagal dibuat<br>";
    }
    mysqli_close($cnn);