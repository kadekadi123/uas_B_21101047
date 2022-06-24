<?php
    include_once("dbkoneksi2.php");
    $sql = "CREATE TABLE matkul(
        KODEMATKUL varchar(10) PRIMARY KEY,
        NAMAMATKUL varchar(20),
        SKS enum('2','3')
    );";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "Tabel Matakuliah Berhasi dibuat<br>";
    }else{
        echo "Tabel Matakuliah Gagal dibuat<br>";
    }
    mysqli_close($cnn);