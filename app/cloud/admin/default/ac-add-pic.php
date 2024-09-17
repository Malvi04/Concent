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
$date     = date("Y-m-d H:i:s");
$user     = $_SESSION['user'];
$category = $_POST['category'];
$name     = $_POST['name'];
$phone    = $_POST['phone'];
$email    = $_POST['email'];
$copyemail= $_POST['copyemail'];
$gmemail  = $_POST['gmemail'];
$division = $_POST['division'];
//$file_attachments = $_FILES['attachment']['tmp_name'];
//$name_attachments = $_FILES['attachment']['name'];
//$date = date("d-m-Y", strtotime($ptpdate));

//Mengambil id dari data post
//$query1="select id_data from list_data where item_name = '$item'";
//$hasil1=mysqli_query($Open, $query1);
//$id_data= $hasil1->fetch_object()->id_data;

$query2="INSERT INTO ticketscategory SET category='$category',personInCharge='$name',phone='$phone',email='$email',copyemail='$copyemail',gmemail='$gmemail',division='$division',dateCreate='$date',userCreate='$user'
where id='$id'";
$hasil2=mysqli_query($Open, $query2);
 
// mengalihkan ke halaman *.php
if(!$hasil2){
echo "<script>alert('Input Fail!');history.go(-1);</script>";
} else{
echo "<script>alert('Edit data #$id success!');window.location.reload(history.go(-2))</script>";
}	

?>