<?php
    include_once("dbkoneksi2.php");
    $sql = "CREATE TABLE mhs(
        NIM varchar(10) PRIMARY KEY,
        NAMA varchar(40),
        JURUSAN enum('MTI','DGM','KAB','SK'),
        JK enum('L','P'),
        TGLLAHIR date
    );";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "Tabel Mahasiswa Berhasil dibuat<br>";
    }else{
        echo "Tabel Mahasiswa Gagal dibuat<br>";
    }
    mysqli_close($cnn);