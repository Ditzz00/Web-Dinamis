<?php

  $hostname = 'localhost' ;
  $username = 'root' ;
  $password = '';
  $dbname =  'db_toko' ;

  $conn = mysqli_connect($hostname, $username, $password, $dbname) ;

  //bisa juga or die ('Gagal terhubung ke database')

  if (!$conn) {
    die("Connection failed : ". mysqli_connect_error()) ;
  }

?>