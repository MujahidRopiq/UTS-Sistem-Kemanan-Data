<?php
session_start();
ob_start();
$konek=mysqli_connect("localhost","root","")or die('koneksigagal');
mysqli_select_db($konek,"skduts") or die("gagal");
?>
