<?php 
  
  session_start() ;
  include 'konekdb.php' ; 
  if($_SESSION['status_login'] != true) {
    echo '<script>window.location="login.php"</script>' ;
  }
    
  $kategori = mysqli_query($conn, "SELECT * FROM tb_kategori WHERE kategori_id = '".$_GET['id'] ."'") ;
  if(mysqli_num_rows($kategori) == 0 ) {
    echo '<script>window.location="kategori.php"</script>' ;
  }
  $o = mysqli_fetch_object($kategori) ;
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title style="padding: 10px 0px;">Toko Pak Hadi</title>
  <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div class="container">
      <h1><a href="dashboard.php">Toko Pak Hadi</a></h1>
      <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="profil.php">Profil</a></li>
        <li><a href="kategori.php">Kategori</a></li>
        <li><a href="produk.php">Produk</a></li>
        <li><a href="logout.php"><img style="width : 15px " src="https://img.icons8.com/external-kmg-design-detailed-outline-kmg-design/64/ffffff/external-logout-real-estate-kmg-design-detailed-outline-kmg-design.png"/></a></li>
      </ul>
    </div>
  </header>

  <div class="section">
    <div class="container">
      <h3>Edit Data Kategori</h3>
      <div class="box">
        <form action="" method="POST">
          <input type="text" name="nama" placeholder="Nama Kategori" value="<?php echo $o->kategori_name ?>" class="input-control" 
          required>
          <input type="submit" name="submit" value="SUBMIT" class="login-btn">
        </form>
        <?php
            if(isset($_POST['submit'])){

              $nama = ucwords($_POST['nama']) ;

              $update = mysqli_query($conn, "UPDATE tb_kategori SET 
                  kategori_name = '".$nama." ' 
                  WHERE kategori_id = '". $o -> kategori_id ."'") ;
              if($update) {
                echo '<script>alert("Edit Data Berhasil")</script>' ;
                echo '<script>window.location="kategori.php"</script>';
              } else {
                echo 'Gagal Melakukan Penambahan Data'. mysqli_error($conn) ;
              }
             
            }

        ?>
        
      </div>
    </div>
  </div>

  <footer style="padding : 25px 0px;">
    <div class="container">
      <small>Copyright &copy; 2022 - Toko Pak Hadi </small>
    </div>
  </footer>
</body>
</html>