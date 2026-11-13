<?php include 'koneksi.php'; ?>
<h2>Data Kelas</h2>
<a href="tambah_kelas.php">+ Tambah Kelas</a>
<br><br>
<table border="1" cellpadding="6">
  <tr>
    <th>No</th>
    <th>Kode Kelas</th>
    <th>Mata Kuliah</th>
    <th>SKS</th>
    <th>Aksi</th>
  </tr>
  <?php
  $no = 1;
  $data = mysqli_query($koneksi, "SELECT * FROM kelas");
  while ($d = mysqli_fetch_array($data)) { ?>
    <tr>
      <td><?= $no++ ?></td>
      <td><?= $d['kode_kelas'] ?></td>
      <td><?= $d['matakuliah'] ?></td>
      <td><?= $d['sks'] ?></td>
      <td>
        <a href="edit_kelas.php?kode=<?= $d['kode_kelas'] ?>">Edit</a> |
        <a href="hapus_kelas.php?kode=<?= $d['kode_kelas'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
      </td>
    </tr>
  <?php } ?>
</table>