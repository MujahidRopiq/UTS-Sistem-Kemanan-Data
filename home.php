<?php
 include 'db/koneksi.php';
 include 'layout/header.php';
 ?>
<!--main-container-part-->
<div id="content">


<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb span11">
          <a href="siswa">
            <i class="icon-group"></i> <strong>
              <?php $query_siswa=mysqli_query($konek,"SELECT count(id_siswa) FROM siswa");
              $data_siswa=mysqli_fetch_array($query_siswa);
              echo $data_siswa[0];
               ?>
            </strong> <small>Total Siswa</small>
          </a>
        </li>
      </ul>
    </div>
<!--End-Action boxes-->
    <hr/>
    <div class="row-fluid">
      <div class="span6">
      </div>
      <div class="span6">
      </div>
    </div>
  </div>
</div>

<!--end-main-container-part-->

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