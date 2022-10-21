<?php
 include 'db/koneksi.php';
 include 'layout/header.php';
 include 'caesar.php'; ?>
<!--main-container-part-->
<div id="content">
  <div id="content-header">
    <h1>Table siswa</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>no</th>
                  <th>id siswa</th>
                  <th>nama</th>
                  <th>P/L</th>
                  <th>alamat</th>
                  <th>kelas</th>
                  <th>tanggal lahir</th>
                  <th>Nomor Telepon</th>
                  <th>edit</th>
                  <th>Hapus</th>
              </tr>
              </thead>
              <tbody>
                <?php
                $query_tampil=mysqli_query($konek,"SELECT * FROM siswa");
                $no=1; while ($data=mysqli_fetch_array($query_tampil)) {
                  $kelamin=strtoupper($data['jenis_kelamin']);
                 ?>
                <tr class="gradeX">
                  <td><?php echo $no; ?></td>
                  <td><?php echo $data['id_siswa']; ?></td>
                  <td><?php echo dekripsi($data['nama'], 8); ?></td>
                  <td><?php echo $kelamin; ?></td>
                  <td><?php echo $data['alamat']; ?></td>
                  <td><?php echo $data['nama_kelas']; ?></td>
                  <td><?php echo $data['tgl_lahir']; ?></td>
                  <td><?php echo $data['telepon']; ?></td>
                  <td><a href=""class="btn btn-info">Edit</a></td>
                  <td><a href=""class="btn btn-danger">Hapus</a></td>
                </tr>
                <?php $no++; } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12" style="
    color: #fff;
    font-weight: bold;
    font-size: 15px;
">
     JL.Pasteur | email@gmail.com | contac : (088) 838-7377 x35 </div>
</div>

<!--end-Footer-part-->
</body>
</html>
