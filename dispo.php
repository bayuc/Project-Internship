<?php
      include 'koneksi.php';
      $id = isset($_GET['id'])?$_GET['id']:" ";
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Tables</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <div class="row">
             
              <div class="col-lg-3">
        <div class="col-xl-10 col-lg-6 col-md-9">
        <div class="row justify-content-center">
          <button class="btn btn-primary btn-block btn-lg" onclick="location.href='main_s.php?p=../tambahdisp&id=<?php echo $id?>'">Tambah disposisi</button>
      </div>
    </div>
  </div>
</div>
              <h3 class="m-0 font-weight-bold text-primary" align="Center">Disposisi Dokumen</h3>
            </div>
            <div class="card-body">
              <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr align="center">
                      <th>Id Disposisi</th>
                      <th>Id Dokumen</th>
                      <th>User</th>
                      <th>Disposisi</th>
                      <th>Tgl Disposisi</th>
                      <th>Tujuan Disposisi</th>
                      <th>Tindakan</th>

                    </tr>
                  </thead>

                  <tbody>
                  <?php
      
      $edit="SELECT * FROM tb_disposisi where id_dok=$id";
      $query = mysqli_query($config,$edit);
      while($data = mysqli_fetch_array($query)){;
        ?>

                  <tr align="center">
                    <td><?= $data['id_disposisi']?></td>
                    <td><?= $data['id_dok']?></td>
                    <td><?= $data['user']?></td>
                    <td><?= $data['disposisi']?></td>
                    <td><?= $data['tgl_disposisi']?></td>
                    <td><?= $data['tujuan_disposisi']?></td>

                   <td align="center"><a href="main_s.php?p=../deletedispo&id=<?php echo $data['id_disposisi']?>&dokumen=<?= $data['id_dok'];?>"> HAPUS </a>|<a href="main_s.php?p=../editdispo&id=<?php echo $data['id_disposisi']?>"> EDIT </a></td>
                  </tr>
                  </tbody>
                  <?php
    }
    ?>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
        
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Bank Sumsel Babel 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
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

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
