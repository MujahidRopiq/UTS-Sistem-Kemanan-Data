<?php
include "db/koneksi.php";  
if(isset($_POST['login'])){

    $nama = $_POST['nama'];
    $pass = md5('menggarami'. $_POST['pass']);

    $query = mysqli_query($konek, "SELECT * FROM users WHERE nama = '$nama'");
    $row = mysqli_fetch_array($query);
    
    if(is_array($row)){
        $_SESSION ['email'] = $row['email'];
        $_SESSION ['nama'] = $row['nama'];
        $_SESSION ['pass'] = $row['pass'];

        ?>
        <script> alert("Berhasil terdaftar") window.location = "home.php"</script><?php
        header("Location: home.php");
    }

}
?>