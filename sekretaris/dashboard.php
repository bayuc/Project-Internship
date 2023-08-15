<!DOCTYPE html>
<html>
<head>
	<title></title>
</head><div class="container">
<body>
<div class="row">
		
            
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-bottom-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Surat Masuk</div>
				          <?php
				          include('../koneksi.php');
				          $sql="SELECT * FROM tb_dok WHERE id_kadok = '1'";
				          if ($result=mysqli_query($config,$sql)){
				          $rowcount=mysqli_num_rows($result);
				          printf("Terdapat %d Surat Masuk.\n",$rowcount);
				          // Free result set
				          mysqli_free_result($result);
				          }
				          ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-bottom-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Surat Keluar</div>
                      <?php
				          include('../koneksi.php');
				          $sql="SELECT * FROM tb_dok WHERE id_kadok = '2'";
				          if ($result=mysqli_query($config,$sql)){
				          $rowcount=mysqli_num_rows($result);
				          printf("Terdapat %d Surat Masuk.\n",$rowcount);
				          // Free result set
				          mysqli_free_result($result);
				          }
				          ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-bottom-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Memo Masuk</div>
                      <div class="row no-gutters align-items-center">
                        	<?php
				          include('../koneksi.php');
				          $sql="SELECT * FROM tb_dok WHERE id_kadok = '3'";
				          if ($result=mysqli_query($config,$sql)){
				          $rowcount=mysqli_num_rows($result);
				          printf("Terdapat %d Memo Masuk.\n",$rowcount);
				          // Free result set
				          mysqli_free_result($result);
				          }
				          ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-bottom-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Memo Keluar</div>
                      <?php
				          include('../koneksi.php');
				          $sql="SELECT * FROM tb_dok WHERE id_kadok = '4'";
				          if ($result=mysqli_query($config,$sql)){
				          $rowcount=mysqli_num_rows($result);
				          printf("Terdapat %d Memo Keluar.\n",$rowcount);
				          // Free result set
				          mysqli_free_result($result);
				          }
				          ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
                  <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h3 class="m-0 font-weight-bold text-primary" align="Center">Daftar Dokumen Yang Belum Di FollowUp</h3>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Nomor Surat</th>
                      <th>Dari</th>
                      <th>Tanggal</th>
                      <th>Perihal</th>
                      <th>Tujuan</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                    include "../koneksi.php";
                    if(isset($_GET["key"])){
                      $key=$_GET["key"];
                      $sql=mysqli_query($config,"SELECT * FROM tb_dok where id_fu ='1'");
                    }else{
                      $query="SELECT * FROM tb_dok where id_fu ='2'";
                      $sql=mysqli_query($config,$query);
                    }
                    while($data = mysqli_fetch_array($sql)){
                  ?>
                  <tr>
                    <td><?= $data['id_dok']?></td>
                    <td><?= $data['nomor_surat']?></td>
                    <td><?= $data['asal_surat']?></td>
                    <td><?= $data['tgl_surat']?></td>
                    <td><?= $data['perihal']?></td>
                    <td><?= $data['kepada']?></td>
                  </tr>
                <?php
                  }
                ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

</body> </div>
</html>