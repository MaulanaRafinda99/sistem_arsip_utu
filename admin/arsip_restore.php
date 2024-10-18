<?php 
include '../koneksi.php';
$id = $_GET['id'];

mysqli_query($koneksi, "UPDATE arsip SET arsip_status = NULL WHERE arsip_id='$id'");
header("location:arsip_dihapus.php?alert=success");
