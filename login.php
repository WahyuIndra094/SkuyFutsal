<?php
session_start();
if (isset($_SESSION['admin_username'])) {
    header("location:index2.php");
}
include("connection.php");
$username = "";
$password = "";
$err = "";
if (isset($_POST['login'])) {
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    if ($username == '' or $password == '') {
        $err .= "<li>Silakan masukkan username dan password</li>";
    }
    if (empty($err)) {
        $sql1 = "select * from admin where username = '$username'";
        $q1 = mysqli_query($koneksi, $sql1);
        $r1 = mysqli_fetch_array($q1);
        if ($r1['password'] != md5($password)) {
            $err .= "<li>Akun tidak ditemukan</li>";
        }
    }
    // if (empty($err)) {
    //     $login_id = $r1['login_id'];
    //     $sql1 = "select * from admin_akses where login_id = '$login_id'";
    //     $q1 = mysqli_query($koneksi, $sql1);
    //     while ($r1 = mysqli_fetch_array($q1)) {
    //         $akses[] = $r1['akses_id']; 
    //     }
    //     if (empty($akses)) {
    //         $err .= "<li>Kamu tidak punya akses ke halaman admin</li>";
    //     }
    // }
    if (empty($err)) {
        $_SESSION['admin_username'] = $username;
        $_SESSION['admin_akses'] = $akses;
        header("location:index2.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
  <style>
    .login-form {
      max-width: 400px;
      margin: 0 auto;
      margin-top: 100px;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
  </style>
</head>

<body>

<div class="header">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Agung Futsal Center</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
      </ul>
    </div>
  </div>
</nav>
</div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="login-form">
          <h2 class="text-center">Login</h2>
                  <?php
        if ($err) {
            echo "<ul>$err</ul>";
        }
        ?>
          <form action="" method="POST">
            <div class="form-group">
              <label  for="username">Username</label>
              <input value="<?php echo $username ?>" type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
              <button type="submit" name="login" class="btn btn-primary btn-block" href=>Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>

<div class="footer">
  
</div>

<?php 


 ?>

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>

