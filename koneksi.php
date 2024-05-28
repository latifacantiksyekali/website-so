<?php
    $host = "localhost";
    $user = "root";
    $pass = "";

    $conn=mysqli_connect($host,$user,$pass);

    if(!isset($conn)){
        echo "koneksi gagal";
    }else{
        echo "koneksi berhasil ";
    }   
?>