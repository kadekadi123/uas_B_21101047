<?php
    include_once("dbkoneksi2.php");
    
    $r["berhasil"] = false;
    if(isset($_POST["nip"])){
        $NIP = $_POST["nip"];
        $NAMA = $_POST["nama"];
        $STTS = $_POST["stts"];
        $NOTELP = $_POST["notelp"];

        $sql = "UPDATE dosen SET 
            NAMA='".$NAMA."',
            NOTELP='".$NOTELP."',
            STTS='".$STTS."'
            WHERE NIP='".$NIP."'";
        
        mysqli_query($cnn, $sql);
        $r["berhasil"]= true;
    }
    echo json_encode($r);