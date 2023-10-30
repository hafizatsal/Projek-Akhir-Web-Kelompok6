<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Beranda Pasien Puskesmas</title>
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
          <a class="nav-link" href="/jadwal-dokter">Jadwal Dokter</a>
          <a class="nav-link" href="/informasi-kesehatan">Informasi Kesehatan</a>
          <a class="nav-link" href="/layanan-online">Layanan Online</a>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <section class="py-5">
      <h2 class="text-center">Selamat Datang</h2>
      <p class="text-center">Puskesmas ini menyediakan berbagai layanan kesehatan untuk masyarakat. Anda dapat membuat janji temu dengan dokter, mendapatkan informasi kesehatan, atau menggunakan layanan online.</p>
    </section>
    <section class="py-5">
      <h2 class="text-center">Jadwal Dokter</h2>
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Hari</th>
            <th>Dokter</th>
            <th>Jam</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Senin</td>
            <td>Dokter A</td>
            <td>08.00 - 12.00</td>
          </tr>
          <tr>
            <td>Selasa</td>
            <td>Dokter B</td>
            <td>13.00 - 16.00</td>
          </tr>
          <tr>
            <td>Rabu</td>
            <td>Dokter C</td>
            <td>08.00 - 12.00</td>
          </tr>
        </tbody>
      </table>
    </section>
    <section class="py-5">
  <h2 class="text-center">Informasi Kesehatan</h2>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="assets/img/puskesmas.jpg" class="img-fluid" alt="Gambar tips kesehatan">
      </div>
      <div class="col-md-6">
        <h2 class="text-center">Tips Kesehatan</h2>
        <p class="text-center">
          Berikut adalah beberapa tips kesehatan yang dapat Anda lakukan untuk menjaga kesehatan Anda:
        </p>
        <ul class="list-unstyled">
          <li>Istirahat yang cukup</li>
          <li>Konsumsi makanan yang sehat</li>
          <li>Olahraga secara teratur</li>
          <li>Hindari merokok dan minum alkohol</li>
        </ul>
        <a href="/tips-kesehatan" class="btn btn-primary">Selengkapnya</a>
      </div>
    </div>
  </div>
</section>
<section class="py-5">
  <h2 class="text-center">Layanan Online</h2>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <img src="assets/img/puskesmas.jpg" class="card-img-top" alt="Gambar pemesanan janji temu">
          <div class="card-body">
            <h5 class="card-title">Pemesanan Janji Temu</h5>
            <p class="card-text">
              Buat janji temu dengan dokter secara online kapan saja dan di mana saja.
            </p>
            <a href="/form_daftar" class="btn btn-primary">Daftar</a>
          </div>
        </div>
      </div>
</section>
  </main>
  <footer>