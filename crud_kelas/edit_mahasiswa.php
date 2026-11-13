<?php
include 'koneksi.php';
$nim = $_GET['nim'];
$d = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim='$nim'"));

if (isset($_POST['update'])) {
    $nama    = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    mysqli_query($koneksi, "UPDATE mahasiswa SET nama_lengkap='$nama', jurusan='$jurusan' WHERE nim='$nim'");
    header("Location: mahasiswa_index.php");
}
?>
<h2>Edit Mahasiswa</h2>
<form method="post">
  NIM <br><input type="text" value="<?= $d['nim'] ?>" readonly><br>
  Nama <br><input type="text" name="nama" value="<?= $d['nama_lengkap'] ?>" required><br>
  Jurusan <br>
  <select name="jurusan" required>
    <?php
    $pilihan = ['Teknik Informatika', 'Sistem Komputer', 'Sistem Informasi'];
    foreach ($pilihan as $p) {
        $sel = ($d['jurusan'] == $p) ? 'selected' : '';
        echo "<option value='$p' $sel>$p</option>";
    }
    ?>
  </select><br><br>
  <button type="submit" name="update">Update</button>
  <a href="mahasiswa_index.php">Batal</a>
</form>