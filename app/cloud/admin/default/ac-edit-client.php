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
$date       = date("Y-m-d H:i:s");
$user       = $_SESSION['user'];
$custname   = $_POST['custname'];
$company    = $_POST['company'];
$address    = $_POST['address'];
$custemail  = $_POST['custemail'];
$custphone1 = $_POST['custphone1'];
$custphone2 = $_POST['custphone2'];
$idcust     = $_POST['idcust'];
//$file_attachments = $_FILES['attachment']['tmp_name'];
//$name_attachments = $_FILES['attachment']['name'];
//$date = date("d-m-Y", strtotime($ptpdate));

//Mengambil id dari data post
//$query1="select id_data from list_data where item_name = '$item'";
//$hasil1=mysqli_query($Open, $query1);
//$id_data= $hasil1->fetch_object()->id_data;

$query2="UPDATE customers SET contactFirstName='$custname',addressLine1='$address',customerName='$company',email='$custemail',phone1='$custphone1',phone2='$custphone2',dateUpdate='$date',userUpdate='$user'
where customerNumber='$idcust'";
$hasil2=mysqli_query($Open, $query2);
 
// mengalihkan ke halaman *.php
if(!$hasil2){
echo "<script>alert('Input Fail!');history.go(-1);</script>";
} else{
echo "<script>alert('Edit data #$idcust success!');window.location.reload(history.go(-2))</script>";
}	

?>