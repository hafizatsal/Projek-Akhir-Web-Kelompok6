<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Beranda Resepsionis</title>
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
          <a class="nav-link" href="#">Jadwal Dokter</a>
          <a class="nav-link" href="#">Informasi Pasien</a>
          <a class="nav-link" href="#">Layanan Resepsionis</a>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <section class="py-5">
      <h2 class="text-center">Selamat Datang</h2>
      <p class="text-center">Beranda ini diperuntukkan bagi resepsionis puskesmas. Anda dapat menggunakan beranda ini untuk mengakses informasi dan layanan yang dibutuhkan dalam menjalankan tugas Anda.</p>
    </section>
    <section class="py-5">
      <h2 class="text-center">Jadwal Dokter</h2>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
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
          </div>
        </div>
      </div>
    </section>
    <section class="py-5">
      <h2 class="text-center">Informasi Pasien</h2>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>Anda dapat mengakses informasi pasien, seperti data pribadi, riwayat kesehatan, dan status kunjungan.</p>
            <a href="#" class="btn btn-primary">Lihat Informasi Pasien</a>
          </div>
        </div>
      </div>
    </section>
    <section class="py-5">
      <h2 class="text-center">Layanan Resepsionis</h2>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul class="list-group">
            <li class="list-group-item">
                <a href="#">Pemesanan Janji Temu</a>
              </li>
              <li class="list-group-item">
                <a href="#">Pengambilan Resep</a>
              </li>
              <li class="list-group-item">
                <a href="#">Konsultasi Online</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>
</html>