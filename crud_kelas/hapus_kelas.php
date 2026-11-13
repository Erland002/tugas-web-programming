<?php
include 'koneksi.php';
$kode = $_GET['kode'];
mysqli_query($koneksi, "DELETE FROM kelas WHERE kode_kelas='$kode'");
header("Location: kelas_index.php");