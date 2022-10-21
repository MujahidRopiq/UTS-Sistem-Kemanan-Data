<?php
include "db/koneksi.php";
include "caesar.php";

//block daftar
if(isset($_GET['kategori'])){
  if($_GET['kategori']=="siswa"){
    $nama = enkripsi($_POST['nama'], 8);
    $query_daftar=mysqli_query($konek,"INSERT INTO siswa (nama, jenis_kelamin, nama_kelas, alamat, tgl_lahir, telepon) VALUES
    ('$nama','$_POST[jenis_kelamin]',$_POST[kelas], '$_POST[alamat]', '$_POST[tgl_lahir]', '$_POST[telepon]');");
      if($query_daftar){
        Header("location:table-siswa.php");
      }else{
        Header("location:tambah-siswa.php");
      }
    }
  }