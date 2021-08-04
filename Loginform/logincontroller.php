<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data user dengan username dan password yang sesuai
$result = mysqli_query($koneksi,"SELECT * FROM loginform where user='$username' and pass='$password'");

$cek = mysqli_num_rows($result);

 
if($cek > 0) {
	$data = mysqli_fetch_assoc($result);
	//menyimpan session user, nama, status dan id login
	if($data['level']=="admin"){

	$_SESSION['username'] = $username;
	$_SESSION['level'] = "admin";
	header("location:../upload_data/index.php");

	}else if($data['level']=="asaib"){

	$_SESSION['username'] = $username;
	$_SESSION['level'] = "asaib";
	header("location:../index.php");
	}else{
 
		// alihkan ke halaman login kembali
		header("location:../login.php?pesan=gagal");
	}	

} else {
	header("location:../login.php?pesan=gagal login data tidak ditemukan.");
}
?>