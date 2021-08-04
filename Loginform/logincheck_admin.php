<?php 
//memulai session yang disimpan pada browser
session_start();

//cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
	if($_SESSION['level']=="admin"){
//melakukan pengalihan
	}else{
 		// alihkan ke halaman login kembali
		header("location:../login.php?pesan=gagal");
	}	

?>