<?php 
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
  <?php 
  if(isset($_GET['pesan'])){
    if($_GET['pesan']=="gagal"){
      echo "<script>alert('Username dan Password tidak sesuai!');
      history.go(-1);
      </script>";
    }
  }
  ?>

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 p-5">
                <img src="img/BSB.png">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang </h1>
                  </div>
                  <form action="login.php" class="user" method="post">
                    <div class="form-group">
                      <input name="uname" class="form-control form-control-user" placeholder="Username...">
                    </div>
                    <div class="form-group">
                      <input type="password" name="pass"class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <button class="btn btn-primary btn-user btn-block" type="submit">Login</button>
                  </form>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>


    </div>


    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h3 class="m-0 font-weight-bold text-primary" align ="Center">Daftar Dokumen</h3>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table>
            <tr>
              <td align="right">
                <form method="GET"  action="index.php">
                  Cari :
                  <input type="text" name="key">
                  <input class="btn btn-primary btn-user" type="submit" value="Cari Data" name="cari">
                </form>
              </td>
            </tr>
          </table><br>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nomor Surat</th>
                      <th>Dari</th>
                      <th>Tanggal</th>
                      <th>Perihal</th>
                      <th>Tujuan</th>
                      <th>Kategori</th>
                      <th>Jenis</th>
                      <th>Bagian</th>
                      <th>Status</th>
                      
                    </tr>
                  </thead>

                  <tbody>

                 <?php
                 if(isset($_GET["key"])){
        $key=$_GET["key"];
        $sql=mysqli_query($config,"SELECT tb_dok.id_dok, tb_dok.nomor_surat, tb_dok.asal_surat, tb_dok.tgl_surat, tb_dok.perihal, tb_dok.kepada,tb_dok.id_jenis_dok, tb_katdok.kategori, tb_jenis_dok.jenis_dok, tb_bagian.bagian, tb_fu.status 
          FROM tb_dok 
          INNER JOIN tb_katdok ON tb_dok.id_kadok = tb_katdok.id_katdok 
          INNER JOIN tb_jenis_dok ON tb_dok.id_jenis_dok = tb_jenis_dok.id_jenis_dok 
          INNER JOIN tb_bagian ON tb_dok.id_bagian = tb_bagian.id_bagian 
          INNER JOIN tb_fu ON tb_dok.id_fu = tb_fu.id_fu
          where tb_jenis_dok.id_jenis_dok = '1' and (nomor_surat like '%".$key."%' OR perihal like '%".$key."%' OR tgl_surat like '%".$key."%')");
      }else{
        $query="SELECT tb_dok.id_dok, tb_dok.nomor_surat, tb_dok.asal_surat, tb_dok.tgl_surat, tb_dok.perihal, tb_dok.kepada, tb_katdok.kategori, tb_jenis_dok.jenis_dok, tb_bagian.bagian, tb_fu.status 
          FROM tb_dok 
          INNER JOIN tb_katdok ON tb_dok.id_kadok = tb_katdok.id_katdok 
          INNER JOIN tb_jenis_dok ON tb_dok.id_jenis_dok = tb_jenis_dok.id_jenis_dok 
          INNER JOIN tb_bagian ON tb_dok.id_bagian = tb_bagian.id_bagian 
          INNER JOIN tb_fu ON tb_dok.id_fu = tb_fu.id_fu
          WHERE tb_dok.id_jenis_dok='1'";

          $sql=mysqli_query($config,$query);
      }
      while($data = mysqli_fetch_array($sql)){
                ?>

                  <tr>
                    <td><?= $data['nomor_surat']?></td>
                    <td><?= $data['asal_surat']?></td>
                    <td><?= $data['tgl_surat']?></td>
                    <td><?= $data['perihal']?></td>
                    <td><?= $data['kepada']?></td>
                    <td><?= $data['kategori']?></td>
                    <td><?= $data['jenis_dok']?></td>
                    <td><?= $data['bagian']?></td>
                    <td><?= $data['status']?></td>
                    
                  </tr>
                <?php
                  }
                ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
