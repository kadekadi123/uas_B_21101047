<?php
    include_once("dbkoneksi2.php");
    
    $r["berhasil"] = false;
    if(isset($_POST["kodematkul"])){
        $KODEMATKUL=$_POST["kodematkul"];
        
        $sql = "DELETE FROM matkul WHERE KODEMATKUL='".$KODEMATKUL."'";
        
        mysqli_query($cnn, $sql);
        $r["berhasil"]= true;
    }
    echo json_encode($r);