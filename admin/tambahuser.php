
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
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

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
              <div class="col-lg-6">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <div class="p-3">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Daftar User</h1>
            </div>
            </div>
                  <tr align="center" bgcolor="white" style="color:#45a049;">
                    <td><b><p style="font-size:16px">Username</p></b></td>
                    <td><b><p style="font-size:16px">Password</p></b></td>
                    <td><b><p style="font-size:16px">Tindakan</p></b></td>
                  </tr>

                  <?php
                    include "../koneksi.php";
                    $sql=mysqli_query($config,"SELECT * FROM tb_user");
                    
                    while($data = mysqli_fetch_array($sql)){
                  ?>

                    <tr bgcolor="white" style="color:black;font-size:13px;font-family: Roboto">
                      <td><?= $data['user_name']?></td>
                      <td><?= $data['password']?></td>
                      <td align="center"><a class="btn btn-danger btn-user" href="delete.php?id=<?php echo $data['id']?>"> HAPUS </a> <a class="btn btn-warning btn-user mt-1" href="admin.php?p=edit&id=<?php
                      echo $data['id']?>"> EDIT </a></td>
                    </tr>
                  <?php 
                }
                   ?>

              </table>
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Tambah User</h1>
                  </div>

                  <form class="user" action="simpan_user.php" method="post">
                    <div class="form-group">
                      <label >User id</label>
                          <select class="form-control" name="userid">
                            <option>Sekretaris</option>
                            <option>Pemimpin Divisi</option>
                            <option>Pemimpin Bagian</option>
                            <option>Pengelola</option>
                            <option>Staf</option>
                          </select>
                    </div>
                    <div class="form-group">
                      <input name="username" type="text" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <input name=" pass" type="text" class="form-control" placeholder="Password">
                    </div>
                    
                    <button class="btn btn-primary btn-block" type="submit" value="Simpan"name="tambah">Simpan</button>
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
<?php
            if (isset($_GET['p'])) {
            } else {
                $page = $_GET['p'];
                include $page .".php";
            }
        ?>
  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>
