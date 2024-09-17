<?php

include "session.php";


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
$date = date("Y-m-d H:i:s");
$user= $_SESSION['user'];
$id= $_POST['id'];
$subject= $_POST['subject'];
$category = $_POST['category'];
$solution = $_POST['solution'];
$pic = $_POST['pic'];


//2nd Query
$query2="update faq SET subject='$subject',category='$category',solution='$solution',pic='$pic',dateUpdate='$date',userUpdate='$user' where id = '$id';";
$hasil2=mysqli_multi_query($Open, $query2);

// mengalihkan ke halaman *.php

if(!$hasil2 ){
$m = urlencode("You have fail to edit user $name!!!. Level: $level.");
header("Location: list-faq.php?m=".$m);
} else{
$m = urlencode("You have successfully edit user $name. Level: $level");
header("Location: list-faq.php?m=".$m);
}	

?>