<?php 

  include 'konekdb.php' ;
  if (isset($_GET['id'])) {
   $delete = mysqli_query($conn, "DELETE FROM tb_kategori WHERE kategori_id = '".$_GET['id'] ."'") ;
   echo '<script>window.location="kategori.php"</script>' ;
  }

?>