<?php
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['user']))
{
	header("location:sign-in.php");//jika belum login alihkan ke form login
}


//cek level user
//if($_SESSION['level']!="admin"){
//    die("Anda bukan agent!!!");//jika bukan admin jangan lanjut
//}

if (isset($_SESSION["lastActivity"])) {
   if ($_SESSION['lastActivity'] + 30 * 60 < time()) {
      // last request was more than 30 minutes ago
      //session_unset(); // unset $_SESSION variable for the run-time 
      //session_destroy(); // destroy session data in storage
	  header("location:logout_timeout.php");//redirect to your home page
	  
   }
}
$_SESSION["lastActivity"] = time();
?>