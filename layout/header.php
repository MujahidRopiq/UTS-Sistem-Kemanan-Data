<?php 
 $query=mysqli_query($konek,"SELECT * FROM users");
 $data=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> SMA SMK Purgabaya</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<!--<link rel="stylesheet" href="css/jquery.gritter.css" />-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/bootstrap2.min.css" />

  <link rel="stylesheet" href="css/bootstrap.min.css" />

  <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
  <link rel="stylesheet" href="css/uniform.css" />
  <link rel="stylesheet" href="css/select2.css" />
  <link rel="stylesheet" href="css/matrix-style.css" />
  <link rel="stylesheet" href="css/matrix-media.css" />
<link rel="stylesheet" href="css/colorpicker.css" />
<link rel="stylesheet" href="css/datepicker.css" />

  <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

</head>
<body>
<!--Header-part-->
<div id="header">
  <h3 style="margin-left:50px;">
    <a style="color: #fff;">Data Siswa</a>
  </h3>
</div>
<!--close-Header-part-->


<!--top-Header-menu-->

<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" >
    <a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"style="
    color: #fff;
"><i class="icon icon-user"></i>
      <span class="text"><b> <?php echo $data['nama']; ?></b></span><b class="caret"></b>
    </a>
      <ul class="dropdown-menu">
        <li><a href="logout.php"><i class="icon-key"></i><b> Log Out</b></a></li>
      </ul>
    </li>
    <li class=""><a title="Biodata Sekolah" href="admin/setting"style="color: #fff;"><i class="icon icon-cog"></i> <span class="text"><b>Settings</b></span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->

<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul >
    <li class="submenu"> <a href=""><i class="icon-group"></i> <span>Siswa</span> <span class="label label-important">&gt;</span></a>
      <ul>
        <li><a href="table-siswa.php">Table Siswa</a></li>
        <li><a href="tambah-siswa.php">Tambah Siswa</a></li>
      </ul>
    </li>
      </ul>
</div>
<!--sidebar-menu-->

<script src="js/jquery.min.js"></script>
<script src="js/jquery.ui.custom.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.uniform.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/matrix.js"></script>
<script src="js/matrix.tables.js"></script>
<script src="js/bootstrap-colorpicker.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/masked.js"></script>
<script src="js/matrix.form_common.js"></script>
<script src="js/jquery.peity.min.js"></script>