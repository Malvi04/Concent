<?php
ob_start();
session_start();
	$Open = mysqli_connect("localhost","root","");
		if (!$Open){
		die ("Koneksi ke Engine MySQL Gagal !<br>");
		}
	$Koneksi = mysqli_select_db($Open, "concent");
		if (!$Koneksi){
		die ("Koneksi ke Database Gagal !");
		}
$user = $_POST['user'];
$password = $_POST['password'];
$op = $_GET['op'];

if($op=="in"){
    $sql = mysqli_query($Open, "SELECT * FROM login WHERE user='$user' AND password='$password'");
if(mysqli_num_rows($sql)==1)
	{//jika berhasil akan bernilai 1
        $qry = mysqli_fetch_array($sql);
        $_SESSION['user'] = $qry['user'];
		$_SESSION['nama'] = $qry['nama'];
        $_SESSION['level'] = $qry['level'];
		$_SESSION['ext'] = $qry['ext'];
		$_SESSION['campaign'] = $_POST['campaign'];
		mysqli_query($Open, "UPDATE login SET session='1', date_login= now() WHERE user='$user'");
        if($qry['level']=="admin"){
        header("location:dashboard.php");
        }
		else if($qry['level']=="spv"){
		header("location:dashboard.php");
		}
		}else{
		header("location:sign-in.php");//Jika username atau password salah
		}
		

}else if($op=="out"){
    unset($_SESSION['user']);
    unset($_SESSION['level']);
	unset($_SESSION['campaign']);
    header("location:sign-in.php");
}
?>

