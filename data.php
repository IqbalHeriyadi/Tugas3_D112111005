<?php
  session_start();
  $msg = '';

  // jika tombol submit ditekan
  if (isset($_POST['submit'])) {
    // simpan data dari form ke dalam session
    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['jenis'] = $_POST['jenis'];
    $_SESSION['alamat'] = $_POST['alamat'];
    $_SESSION['agama'] = $_POST['agama'];

    // redirect ke halaman profil
    header('Location: form.php');
    exit();
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Tugas3 | Iqbal Heriyadi</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

    body {
        font-family: Georgia, 'Times New Roman', Times, serif;
        background-color: #00bfff;
}


    .form-container {
      position: absolute;
      top: 50%;
      left: 50%;
      height: 600px;
      width: 400px;
      transform: translate(-50%, -50%);
      border-radius: 15px;
      box-shadow: 3px 3px 10px 0px #000;
      padding: 30px;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <?php if ($msg) : ?>
      <div class="alert alert-danger"><?php echo $msg ?></div>
    <?php endif; ?>
    <form method="post" class="form-container">
    <h3 class="mb-3 ">Biodata</h3>
      <div class="form-group">
        <label for="nama">Nama Lengkap</label>
        <input type="text" class="form-control" name="nama" required placeholder="Nama Lengkap">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" required placeholder="Email">
      </div>
      <div class="form-group">
        <label for="jenis">Jenis Kelamin</label>
        <select class="form-control" id="jenis" name="jenis">
          <option disabled selected hidden>Jenis Kelamin</option>
          <option>Laki-Laki</option>
          <option>Perempuan</option>
        </select>
      </div>
      <div class="form-group mt-3">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" name="alamat" required placeholder="Alamat">
      </div>
      <div class="form-group">
        <label for="agama">Agama</label>
        <select class="form-control" id="agama" name="agama">
            <option disabled selected hidden>Agama</option>
            <option>Islam</option>
            <option>Kristen</option>
            <option>Hindu</option>
            <option>Budha</option>
        </select>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Sign In</button>
    </form>
  </div>
</body>
</html>
