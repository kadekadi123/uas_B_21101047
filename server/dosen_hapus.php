<?php
    include_once("dbkoneksi2.php");
    
    $r["berhasil"] = false;
    if(isset($_POST["nip"])){
        $NIP=$_POST["nip"];
        
        $sql = "DELETE FROM dosen WHERE NIP='".$NIP."'";
        
        mysqli_query($cnn, $sql);
        $r["berhasil"]= true;
    }
    echo json_encode($r);