<?php
    include_once("dbkoneksi2.php");
    
    $r["berhasil"] = false;
    if(isset($_POST["kodematkul"])){
        $KODEMATKUL = $_POST["kodematkul"];
        $NAMAMATKUL = $_POST["namamatkul"];
        $SKS = $_POST["sks"];

        $sql = "UPDATE matkul SET 
            NAMAMATKUL='".$NAMAMATKUL."',
            SKS='".$SKS."'
            WHERE KODEMATKUL='".$KODEMATKUL."'";
        
        mysqli_query($cnn, $sql);
        $r["berhasil"]= true;
    }
    echo json_encode($r);