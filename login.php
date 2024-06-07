<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Toko Pak Hadi</title>
  <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body id="bg-login">
  <div class="box-login">
    <h2>Login</h2>
    <form action="" method="POST">
      <input type="text" name="user" placeholder="Username" class="input-control">
      <input type="password" name="pass" placeholder="Password" class="input-control">
      <input type="submit" name="submit" value="Login" class="login-btn">
    </form>
    <?php 
      if(isset($_POST['submit'])){
        session_start() ;
        include 'konekdb.php' ;
        $user = mysqli_real_escape_string($conn, $_POST['user']) ;
        $pass = mysqli_real_escape_string($conn, $_POST['pass']) ;

        $cek = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '".$user."' AND password = '".MD5($pass)."' ") ;
        if(mysqli_num_rows($cek) > 0){
          $c = mysqli_fetch_object($cek);
          $_SESSION['status_login'] = true ;
          $_SESSION['adn_global' ]  = $c ;
          $_SESSION['id'] = $c -> admin_id ;
          echo '<script>window.location="dashboard.php"</script>' ;
        }  else {
          echo '<script>alert("Username atau Password Anda Salah ! ")</script>' ;
        };
      }
    ?>
  </div>
  
</body>
</html>