<?php include 'koneksi.php'; ?>
<h2>Data Mahasiswa</h2>
<a href="tambah_mahasiswa.php">+ Tambah Mahasiswa</a>
<br><br>
<table border="1" cellpadding="6">
  <tr>
    <th>No</th>
    <th>NIM</th>
    <th>Nama</th>
    <th>Jurusan</th>
    <th>Aksi</th>
  </tr>
  <?php
  $no = 1;
  $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
  while ($d = mysqli_fetch_array($data)) { ?>
    <tr>
      <td><?= $no++ ?></td>
      <td><?= $d['nim'] ?></td>
      <td><?= $d['nama_lengkap'] ?></td>
      <td><?= $d['jurusan'] ?></td>
      <td>
        <a href="edit_mahasiswa.php?nim=<?= $d['nim'] ?>">Edit</a> |
        <a href="hapus_mahasiswa.php?nim=<?= $d['nim'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
      </td>
    </tr>
  <?php } ?>
</table>