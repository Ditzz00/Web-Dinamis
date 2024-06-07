<?php
$password_admin = 'password_admin'; // Ganti dengan password yang Anda inginkan
$hashed_password_admin = password_hash($password_admin, PASSWORD_DEFAULT);
echo 'Admin Password: ' . $hashed_password_admin . '<br>';

$password_user = 'password_user'; // Ganti dengan password yang Anda inginkan
$hashed_password_user = password_hash($password_user, PASSWORD_DEFAULT);
echo 'User Password: ' . $hashed_password_user;
?>