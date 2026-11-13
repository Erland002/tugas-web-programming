<?php
include 'koneksi.php';
if (isset($_POST['simpan'])) {
    $kode = $_POST['kode_kelas'];
    $mk   = $_POST['matakuliah'];
    $sks  = $_POST['sks'];
    mysqli_query($koneksi, "INSERT INTO kelas VALUES ('$kode','$mk','$sks')");
    header("Location: kelas_index.php");
}
?>
<h2>Tambah Kelas</h2>
<form method="post">
  Kode Kelas <br><input type="text" name="kode_kelas" required><br>
  Mata Kuliah <br><input type="text" name="matakuliah" required><br>
  SKS <br><input type="number" name="sks" required><br><br>
  <button type="submit" name="simpan">Simpan</button>
  <a href="kelas_index.php">Batal</a>
</form>