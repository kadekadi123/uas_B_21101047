<?php
    include_once("dbkoneksi1.php");
    if($cnn){
        $sql = "CREATE DATABASE kampus;";

        $hsl = mysqli_query($cnn,$sql);
        if($hsl){
            echo "Database Kampus <b>Berhasi</b> dibuat<br>";
        }else{
            echo "Database Kampus <b>Gagal</b> dibuat<br>";
        }
        mysqli_close($cnn);
    }