<?php
session_start();
if (!isset($_SESSION['id_user'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard - Universitas Raharja</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <div class="container">
    <span class="navbar-brand">Raharja</span>
    <div class="d-flex align-items-center text-white">
      <span class="me-3"><?= htmlspecialchars($_SESSION['nama']) ?> (<?= $_SESSION['role'] ?>)</span>
      <a href="logout.php" class="btn btn-warning btn-sm">Logout</a>
    </div>
  </div>
</nav>

<div class="container py-5">
  <h2 class="fw-bold">Selamat datang, <?= htmlspecialchars($_SESSION['nama']) ?>!</h2>
  <p>Anda login sebagai <strong><?= $_SESSION['role'] ?></strong>.</p>

  <div class="row g-3 mt-3">
    <div class="col-md-4">
      <div class="card shadow-sm text-center">
        <div class="card-body">
          <h5>Data Mahasiswa</h5>
          <a href="../crud_kelas/mahasiswa_index.php" class="btn btn-dark btn-sm">Buka</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card shadow-sm text-center">
        <div class="card-body">
          <h5>Data Kelas</h5>
          <a href="../crud_kelas/kelas_index.php" class="btn btn-dark btn-sm">Buka</a>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>