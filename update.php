<?php

include'koneksi.php';
$nim            = $_POST['nim'];
$nama           = $_POST['nama'];
$kelas         = $_POST['jurusan'];
$id = $_POST['id'];
$query="UPDATE ars SET nim='$nim',nama='$nama',jurusan='$kelas' where id='$id'";
mysqli_query($koneksi, $query);
header("location:index.php");
?>