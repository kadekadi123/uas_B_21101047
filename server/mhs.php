<?php
include_once("dbkoneksi2.php");
   $sql = "SELECT NIM, NAMA, JURUSAN, JK, TGLLAHIR FROM mhs";
   $hasil = mysqli_query($cnn, $sql);
   $output = mysqli_fetch_all($hasil);
   echo json_encode($output);