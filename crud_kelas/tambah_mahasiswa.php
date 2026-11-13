<?php
include 'koneksi.php';
if (isset($_POST['simpan'])) {
    $nim     = $_POST['nim'];
    $nama    = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    mysqli_query($koneksi, "INSERT INTO mahasiswa (nim, nama_lengkap, jurusan) VALUES ('$nim','$nama','$jurusan')");
    header("Location: mahasiswa_index.php");
}
?>
<h2>Tambah Mahasiswa</h2>
<form method="post">
  NIM <br><input type="text" name="nim" maxlength="10" required><br>
  Nama <br><input type="text" name="nama" required><br>
  Jurusan <br>
  <select name="jurusan" required>
    <option value="Teknik Informatika">Teknik Informatika</option>
    <option value="Sistem Komputer">Sistem Komputer</option>
    <option value="Sistem Informasi">Sistem Informasi</option>
  </select><br><br>
  <button type="submit" name="simpan">Simpan</button>
  <a href="mahasiswa_index.php">Batal</a>
</form>