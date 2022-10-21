<?php include 'db/koneksi.php'; ?>
<?php $query=mysqli_query($konek,"SELECT * FROM biodata");
$data=mysqli_fetch_array($query);
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
        <title><?php echo $data['nama_sekolah']; ?></title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="css/matrix-login.css" />
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="img/<?PHP echo $data['photo']; ?>" />
    </head>
    <body>
        <div id="loginbox">
            <form id="loginform" class="form-vertical"method="post" action="proseslogin.php">
              <div class="control-group normal_text">
                <img src="img/<?PHP echo $data['photo']; ?>" width="50%" height="10%">
              </div>


</html>
