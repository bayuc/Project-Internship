<?php
  include 'koneksi.php';
  $id = isset($_GET['id'])?$_GET['id']:" ";
  $edit="SELECT * FROM tb_disposisi where id_disposisi=$id";
  $query = mysqli_query($config,$edit);
  $data = mysqli_fetch_array($query);
    ?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

	<title>Edit Dokumen</title>
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
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Edit Dokumen</h1>
                  </div>

                  <form class="user" method="POST" action="../updatedispo.php">
                      <div class="form-group">
                      <label>id Disposisi</label>
                       <input type="text" name="idDisposisi" class="form-control" value="<?php echo $data["id_disposisi"];?>">
                      </div>
                      <div class="form-group">
                        <label>id Dokumen</label>
                       <input type="text" name="idDokumen" class="form-control" value="<?php echo $data["id_dok"];?>">
                      </div>

                      <div class="form-group">
                          <label>User</label>
                          <input type="text" name="user" class="form-control" value="<?php echo $data["user"];?>">
                      </div>
                      <div class="form-group">
                          <label>Disposisi</label>
                          <input type="text" name="disposisi" class="form-control" value="<?php echo $data["disposisi"];?>">
                      </div>
                      <div class="form-group">
                        <label>Tanggal Disposisi</label>
                       <input type="date" name="tglDis"  class="form-control" value="<?php echo $data["tglDis"];?>">
                      </div>
                      <div class="form-group">
                        <label>Tujuan Disposisi</label>
                       <input type="text" name="tujuanDis" class="form-control" value="<?php echo $data["tujuan_disposisi"];?>">
                      </div>
          
                      
                      <button class="btn btn-primary btn-block btn-user" type="submit" value="Simpan" name="submit">Simpan</button>
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