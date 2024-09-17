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
$name = $_POST['name'];
$level = $_POST['level'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$login = $_POST['login'];
$password = $_POST['password'];



//query SQL untuk insert data
//$query="INSERT INTO activity_log (id_source, input_date, id_data, item_name, qty, sender, origin, dest, driver, message, id_status, label_color)
//SELECT activity_req.id_activity_req,'$date', '$id_data', activity_req.item_name, activity_req.qty, activity_req.spv, activity_req.origin, activity_req.dest, activity_req.driver, activity_req.message, 'Progress', 'warning'
//FROM activity_req WHERE activity_req.id_activity_req = '$id'";
//$hasil=mysqli_query($Open, $query);



//2nd Query
$query2="update login SET user='$login',date_update='$date',nama='$name',password='$password',level='$level',email='$email',phone='$phone' where user = '$login';";
$hasil2=mysqli_multi_query($Open, $query2);

// mengalihkan ke halaman *.php

if(!$hasil2 ){
$m = urlencode("You have fail to edit user $name!!!. Level: $level.");
header("Location: list-user.php?m=".$m);
} else{
$m = urlencode("You have successfully edit user $name. Level: $level");
header("Location: list-user.php?m=".$m);
}	

?>