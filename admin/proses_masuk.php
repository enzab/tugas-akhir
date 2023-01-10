<?php 
// mengaktifkan session php
session_start();

if(isset($_COOKIE['masuk'])) {
	if($_COOKIE['masuk'] == 'true') {
		$_SESSION["masuk"] = true;
	}
}



// menghubungkan dengan koneksi
include '../konfig.php';

// menangkap data yang dikirim dari form
$user = $_POST["user"];
$pass = $_POST["pass"];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi, "SELECT * FROM adm WHERE user = '$user' AND pass = '$pass' ");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0) {

	$_SESSION["masuk"] = true; 

	if ( isset($_POST['remember']) ) {
		setcookie('masuk','true',time() + 15);
	}

	header("location:../admin/index.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>