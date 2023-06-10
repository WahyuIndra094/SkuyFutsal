<?php
// Koneksi database
include('connection.php');

$query = "SELECT * FROM booking";
$result = mysqli_query($koneksi, $query);

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkuyFutsaL</title>

    <!-- Bootstrap 5 & googlefont -->
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">

    <style>
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

    <main class="d-flex justify-content-center mt-5">
        <div class="table-responsive col-10">

            <h2 class="text-primary fw-medium">Daftar Booking</h2>

            <div class="row mt-5">
                <div class="col-2 text-center">
                    <!-- Fitur Retrieve/Tambah Data -->
                    <a href="add.php"><button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahDataModal">Tambah Data</button></a>
                </div>
            </div>

            <!-- Data -->
            <table class="table mt-3 table-striped table-hover">
                <thead class="text-primary shadow-sm text-center">
                    <tr>
                        <th scope="col" class="px-4 py-3">No.</th>
                        <th scope="col" class="px-4 py-3">Nama Pemesan</th>
                        <th scope="col" class="px-4 py-3">No. Telepon</th>
                        <th scope="col" class="px-4 py-3">Tanggal Pesan</th>
                        <th scope="col" class="px-4 py-3">Waktu</th>
                        <th scope="col" class="px-4 py-3">Durasi Sewa</th>
                        <th scope="col" class="px-4 py-3">Jumlah Pemain</th>
                        <th scope="col" class="px-4 py-3">Nomor Lapangan</th>
                        <th scope="col" class="px-4 py-3">Harga Sewa</th>
                        <th scope="col" class="px-4 py-3">Deposito</th>
                        <th scope="col" class="px-4 py-3">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Menampilkan data dari database yang diubah ke array multidimensi -->
                    <?php foreach ($result as $key => $value) : ?>
                        <tr>
                            <td class="px-4"><?php echo $key + 1; ?></td>
                            <td class="px-4"><?php echo $value['nama']; ?></td>
                            <td class="px-4"><?php echo $value['no_telepon']; ?></td>
                            <td class="px-4"><?php echo $value['tanggal']; ?></td>
                            <td class="px-4"><?php echo $value['waktu']; ?></td>
                            <td class="px-4"><?php echo $value['durasi']; ?></td>
                            <td class="px-4"><?php echo $value['jumlah_pemain']; ?></td>
                            <td class="px-4"><?php echo $value['no_lapangan']; ?></td>
                            <td class="px-4"><?php echo $value['harga']; ?></td>
                            <td class="px-4"><?php echo $value['deposito']; ?></td>
                            <td class="px-4 col-2"><?php echo $value['keterangan']; ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </main>


    <!-- JS Bootstrap -->
    <script src="bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>