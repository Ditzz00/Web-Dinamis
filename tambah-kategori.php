<?php 
  
  session_start() ;
  include 'konekdb.php' ; 
  if($_SESSION['status_login'] != true) {
    echo '<script>window.location="login.php"</script>' ;
  }

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title style="padding: 10px 0px;">Shop</title>
  <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div class="container">
      <h1><a href="dashboard.php">Shop</a></h1>
      <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="profil.php">Profil</a></li>
        <li><a href="kategori.php">Kategori</a></li>
        <li><a href="logout.php"><img style="width : 15px " src="https://img.icons8.com/external-kmg-design-detailed-outline-kmg-design/64/ffffff/external-logout-real-estate-kmg-design-detailed-outline-kmg-design.png"/></a></li>
      </ul>
    </div>
  </header>

  <div class="section">
    <div class="container">
      <h3>Tambah Data Kategori</h3>
      <div class="box">
        <form action="" method="POST">
          <input type="text" name="nama" placeholder="Nama Kategori"  class="input-control" 
          required>
          <input type="submit" name="submit" value="SUBMIT" class="login-btn">
        </form>
        <?php
            if(isset($_POST['submit'])){

              $nama = ucwords($_POST['nama']) ;

              $insert = mysqli_query($conn, "INSERT INTO tb_kategori VALUES (
                null, 
                '".$nama." '
              ) ") ;

              if($insert) {
                echo '<script>alert("Tambah Data Berhasil")</script>' ;
                echo '<script>window.location="kategori.php"</script>';
              } else {
                echo 'Gagal Melakukan Penambahan Data'. mysqli_error($conn) ;
              }
             
            }

        ?>
        
      </div>
    </div>
  </div>

  <footer class="site-footer">
    <div class="container">
      <small>Copyright &copy; 2024 - Yogi Aditya </small>
    </div>
  </footer>
</body>
</html>