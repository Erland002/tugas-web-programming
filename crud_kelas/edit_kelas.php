<?php
include 'koneksi.php';
$kode = $_GET['kode'];
$d = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM kelas WHERE kode_kelas='$kode'"));

if (isset($_POST['update'])) {
    $mk  = $_POST['matakuliah'];
    $sks = $_POST['sks'];
    mysqli_query($koneksi, "UPDATE kelas SET matakuliah='$mk', sks='$sks' WHERE kode_kelas='$kode'");
    header("Location: kelas_index.php");
}
?>
<h2>Edit Kelas</h2>
<form method="post">
  Kode Kelas <br><input type="text" value="<?= $d['kode_kelas'] ?>" readonly><br>
  Mata Kuliah <br><input type="text" name="matakuliah" value="<?= $d['matakuliah'] ?>" required><br>
  SKS <br><input type="number" name="sks" value="<?= $d['sks'] ?>" required><br><br>
  <button type="submit" name="update">Update</button>
  <a href="kelas_index.php">Batal</a>
</form>