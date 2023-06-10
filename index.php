<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pemesanan Tiket Lapangan - Home</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
   
  <style>
    .jumbotron {
      background-image: url('img/lapangan.jpg');
      background-size: cover;
      color: #fff;
      text-align: center;
      padding: 150px;
    }

    h1 {
      font-size: 48px;
    }

    .btn {
      margin-top: 20px;
    }
        body {
            font-family: 'Poppins', sans-serif;
        }
            .navbar-brand {
            font-size: 2rem;
            font-weight: bold;
            color: #007bff;
        }

        .navbar {
            height: 80px;
        }

        .navbar-nav .nav-link {
            color: #007bff;
        }

        .navbar-nav .nav-link:hover {
            color: #0056b3;
            font-weight: bold;
        }

        .navbar-brand:hover {
            color: #0056b3;
            font-weight: bold;
        }
  </style>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php">SkuyFutsal</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login Admin</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <section class="jumbotron">
    <div class="container">
      <h1>Selamat Datang di Pemesanan Tiket Lapangan</h1>
      <p>Nikmati pengalaman bermain lapangan dengan mudah dan praktis</p>
      <a class="btn btn-primary btn-lg" role="button" href="daftar.php">Pesan Tiket</a>
    </div>
  </section>

  <section class="container">
    <div class="row">
      <div class="col-md-4">
        <h2>Tentang Kami</h2>
        <p>Kami adalah platform pemesanan tiket lapangan yang memudahkan Anda untuk memesan lapangan dengan cepat
          dan mudah. Kami menyediakan berbagai macam lapangan untuk kebutuhan olahraga Anda.</p>
      </div>
      <div class="col-md-4">
        <h2>Pemesanan</h2>
        <p>Pesan tiket lapangan secara online dengan hanya beberapa klik. Pilih lapangan, tanggal, dan jam yang Anda
          inginkan, lalu lanjutkan untuk melakukan pembayaran. Prosesnya cepat dan praktis.</p>
      </div>
      <div class="col-md-4">
        <h2>Kontak Kami</h2>
        <p>Jika Anda memiliki pertanyaan atau membutuhkan bantuan, jangan ragu untuk menghubungi kami melalui email
          atau telepon yang tertera di halaman Tentang Kami.</p>
      </div>
    </div>
  </section>

  <footer class="bg-light text-center py-3">
    <p>Hak Cipta &copy;                 <!-- Update tahun copyright -->
                <script>
                    var CurrentYear = new Date().getFullYear()
                    document.write(CurrentYear)
                </script> SkuyFutsal. All Rights Reserved.</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>
