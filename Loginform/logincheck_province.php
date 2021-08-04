<?php 
//memulai session yang disimpan pada browser
session_start();

//cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
if($_SESSION['level']==""){
//melakukan pengalihan
header("location:../login.php");
} 
?>