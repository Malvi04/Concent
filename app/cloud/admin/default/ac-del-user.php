<?php
session_start();
date_default_timezone_set('Asia/Jakarta');
$Open = mysqli_connect("127.0.0.1","root","root");
		if (!$Open){
		die ("Koneksi ke Engine MySQL Gagal !<br>");
		}
	$Koneksi = mysqli_select_db($Open, "cloudconcent");
		if (!$Koneksi){
		die ("Koneksi ke Database Gagal !");
		}

// menyimpan data kedalam variabel

//$agent = $_SESSION['nama'];
$tanggal = date("Y-m-d H:i:s");
$user = $_GET['user'];

//$date = date("d-m-Y", strtotime($ptpdate));
$query="DELETE FROM login where user='$user'";
$hasil=mysqli_query($Open, $query);

if(!$hasil ){
echo "<script>alert('Gagal Delete!');history.go(-1);</script>";
} else{
echo "<script>alert('Delete data Username: $user success!');window.location.reload(history.go(-1))</script>";
}

?>