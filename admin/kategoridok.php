<!DOCTYPE html>
<html>
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
<body>


<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <div class="p-3">
              <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Kategori Dokumen</h1>
            </div>
          </div>
                  <tr align="center" bgcolor="white" style="color:#45a049;">
                    <td><b><p style="font-size:16px">Kategori Dokumen</p></b></td>
                    <td><b><p style="font-size:16px">Tindakan</p></b></td>
                  </tr>

                  <?php
                    include "../koneksi.php";
                    $sql=mysqli_query($config,"SELECT * FROM tb_katdok");
                    
                    while($data = mysqli_fetch_array($sql)){
                  ?>

                    <tr bgcolor="white" style="color:black;font-size:13px;font-family: Roboto">
                      <td><?= $data['kategori']?></td>
                      <td align="center"><a class="btn btn-danger btn-user" href="hapuskat.php?id=<?php echo $data['id_katdok']?>"> HAPUS </a> <a class="btn btn-warning btn-user mt-1" href="?p=editkat&id=<?php echo $data['id_katdok']?>"> EDIT </a></td>
                    </tr>
                  <?php 
                }
                   ?>
              </table>
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Tambah Kategori Dokumen</h1>
                  </div>

                  <form class="user" action="simpankat.php" method="post">
                    
                    <div class="form-group">
                      <input name="kat_dok" type="text" class="form-control" placeholder="Kategori Dokumen..">
                    </div>
                    
                    <button class="btn btn-primary btn-block" type="submit" value="Simpan"name="submit">Simpan</button>
                  </form>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>