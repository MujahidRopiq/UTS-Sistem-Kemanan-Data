<?php
include "db/koneksi.php";
if(isset($_POST['registrasi'])){

$nama = $_POST['nama'];
$email = $_POST['email'];
$pass = md5('menggarami'. $_POST['pass']);

$query = mysqli_query($konek, "INSERT INTO users (nama, email, password) VALUES ('$nama', '$email', '$pass')");

}
