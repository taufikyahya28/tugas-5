<?php

include'koneksi.php';
$id   = $_GET['id'];
$query="DELETE from ars where id='$id'";
mysqli_query($koneksi, $query);
header("location:index.php");
?>