<?php
    include_once("dbkoneksi2.php");

    $r["berhasil"] = false;
    if(isset($_POST["kodematkul"])){
        $KODEMATKUL = $_POST["kodematkul"];
        $NAMAMATKUL = $_POST["namamatkul"];
        $SKS = $_POST["sks"];

        $sql = "INSERT INTO matkul(KODEMATKUL, NAMAMATKUL, SKS) 
            VALUES('$KODEMATKUL', '$NAMAMATKUL', '$SKS');";
        
        mysqli_query($cnn, $sql);
        $r["berhasil"]= true;
    }
    echo json_encode($r);