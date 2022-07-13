<?php
include  'koneksi.php';
    $nim =   $_POST['nim'];
    $nama =  $_POST['nama'];
    $jurusan = $_POST['jurusan'];


    $sql = "INSERT INTO ars (nim,nama,jurusan) VALUES ('.$nim.','.$nama.','.$jurusan')";

$koneksi->query($sql);

    $koneksi->close();
    header("location:index.php");
    ?>