<?php
    include_once("dbkoneksi2.php");
    
    $r["berhasil"] = false;
    if(isset($_POST["nim"])){
        $NIM = $_POST["nim"];
        $NAMA = $_POST["nama"];
        $JURUSAN = $_POST["jurusan"];
        $JK = $_POST["jkel"];
        $TGLLAHIR = $_POST["tgl"];

        $sql = "UPDATE mhs SET 
            NAMA='".$NAMA."',
            JURUSAN='".$JURUSAN."',
            JK='".$JK."',
            TGLLAHIR='".$TGLLAHIR."' 
            WHERE NIM='".$NIM."'";
        
        mysqli_query($cnn, $sql);
        $r["berhasil"]= true;
    }
    echo json_encode($r);