<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Beranda Admin</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="#">Puskesmas</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" href="#">Home</a>
          <a class="nav-link" href="#">Data Pasien</a>
          <a class="nav-link" href="#">Data Dokter</a>
          <a class="nav-link" href="#">Manajemen Jadwal</a>
          <a class="nav-link" href="#">Laporan</a>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <section class="py-5">
      <h2 class="text-center">Selamat Datang</h2>
      <p class="text-center">Beranda ini diperuntukkan bagi admin puskesmas. Anda dapat menggunakan beranda ini untuk mengakses dan mengelola data, jadwal, serta laporan puskesmas.</p>
    </section>
    <section class="py-5">
      <h2 class="text-center">Data Pasien</h2>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <img src="assets/img/puskesmas.jpg" class="card-img-top" alt="Gambar data pasien">
              <div class="card-body">
                <h5 class="card-title">Lihat Data Pasien</h5>
                <p class="card-text">
                  Anda dapat melihat data pasien, seperti data pribadi, riwayat kesehatan, dan status kunjungan.
                </p>
                <a href="#" class="btn btn-primary">Lihat</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <img src="assets/img/puskesmas.jpg" class="card-img-top" alt="Gambar tambah pasien">
              <div class="card-body">
                <h5 class="card-title">Tambah Pasien</h5>
                <p class="card-text">
                  Anda dapat menambahkan data pasien baru.
                </p>
                <a href="#" class="btn btn-primary">Tambah</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="py-5">
      <h2 class="text-center">Data Dokter</h2>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <img src="assets/img/puskesmas.jpg" class="card-img-top" alt="Gambar data dokter">
              <div class="card-body">
                <h5 class="card-title">Lihat Data Dokter</h5>
                <p class="card-text">
                  Anda dapat melihat data dokter, seperti data pribadi, jadwal, dan spesialisasi.
                </p>