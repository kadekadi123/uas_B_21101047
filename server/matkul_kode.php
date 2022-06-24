<?php
$output["error"] = true;

if (isset($_GET["kodematkul"])) {
    $kodematkul = $_GET["kodematkul"];

    include_once("dbkoneksi2.php");
    $sql = "SELECT KODEMATKUL, NAMAMATKUL, SKS FROM matkul WHERE KODEMATKUL='" . $kodematkul . "';";
    $hsl = mysqli_query($cnn, $sql);
    $output["isi"] = mysqli_fetch_all($hsl);
    $output["error"] = false;
}

echo json_encode($output);