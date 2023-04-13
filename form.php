<?php
  session_start();

  // redirect ke halaman index jika data belum disimpan di session
  if (!isset($_SESSION['nama']) || !isset($_SESSION['email']) || !isset($_SESSION['jenis'] ) || !isset($_SESSION['alamat'])|| !isset($_SESSION['agama'])) {
    header('Location: data.php');
    exit();
  }

  $nama = $_SESSION['nama'];
  $email = $_SESSION['email'];
  $jenis = $_SESSION['jenis'];
  $alamat = $_SESSION['alamat'];
  $agama = $_SESSION['agama'];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Profil</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

    body {
      font-family: Georgia, 'Times New Roman', Times, serif;
        background-color: #00bfff;
    }

    .container {
      place-items: center;
      height: 400px;
      width: 500px;
      border-radius: 15px;
      box-shadow: 3px 3px 10px 0px #000;
      padding: 30px;
    }

  </style>
</head>
<body>
  <div class="container mt-5">
    <h3>Biodata</h3>
    <table class="table">
      <tr>
        <td>Nama</td>
        <td><?php echo $nama ?></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><?php echo $email ?></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td><?php echo $jenis ?></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><?php echo $alamat ?></td>
      </tr>
      <tr>
        <td>Agama</td>
        <td><?php echo $agama ?></td>
      </tr>
    </table>
    <a href="data.php" button type="submit" name="submit" class="btn btn-danger">Back</a>
  </div>
</body>
</html>
