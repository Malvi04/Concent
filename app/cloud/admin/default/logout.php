<?php
session_start();
include "koneksi.php";
$user=$_SESSION['user'];
mysqli_query($Open, "UPDATE login SET session='0' where user='$user'");
unset($_SESSION['user']);
unset($_SESSION['level']);
session_destroy();
$op = urlencode("out");
header("Location:sign-in.php?op=".$op);
?>