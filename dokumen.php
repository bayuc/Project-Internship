  <?php
  include '../koneksi.php';
    ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  

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
              <h3 class="m-0 font-weight-bold text-primary" align="Center">Daftar Dokumen</h3>
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
                      <th>Kategori</th>
                      <th>Jenis</th>
                      <th>Bagian</th>
                      <th>Status</th>
                      <th>Nama File</th>
                      <th>Tindakan</th>
                    </tr>
                  </thead>

                  <tbody>

                 <?php
                  	$id = isset($_GET['id'])?$_GET['id']:" ";
  					$edit="SELECT tb_dok.id_dok, tb_dok.nomor_surat, tb_dok.asal_surat, tb_dok.tgl_surat, tb_dok.perihal, tb_dok.kepada, tb_katdok.kategori, tb_jenis_dok.jenis_dok, tb_bagian.bagian, tb_fu.status, tb_dok.nama_file
                    FROM tb_dok 
                    INNER JOIN tb_katdok ON tb_dok.id_kadok = tb_katdok.id_katdok 
                    INNER JOIN tb_jenis_dok ON tb_dok.id_jenis_dok = tb_jenis_dok.id_jenis_dok 
                    INNER JOIN tb_bagian ON tb_dok.id_bagian = tb_bagian.id_bagian 
                    INNER JOIN tb_fu ON tb_dok.id_fu = tb_fu.id_fu
                  	where id_kadok = $id";
  					$query = mysqli_query($config,$edit);
  					while($data = mysqli_fetch_array($query)){;
                ?>

                  <tr>
                    <td><?= $data['id_dok']?></td>
                    <td><?= $data['nomor_surat']?></td>
                    <td><?= $data['asal_surat']?></td>
                    <td><?= $data['tgl_surat']?></td>
                    <td><?= $data['perihal']?></td>
                    <td><?= $data['kepada']?></td>
                    <td><?= $data['kategori']?></td>
                    <td><?= $data['jenis_dok']?></td>
                    <td><?= $data['bagian']?></td>
                    <td><?= $data['status']?></td>
                    <td><?= $data['nama_file']?></td>
                    <td align="center"><a class="btn btn-danger btn-user" href="delete.php?id=<?php echo $data['nomor_surat']?>"><i class="fas fa-trash"></i> HAPUS </a>
                      <a class="btn btn-warning btn-user mt-1" href="main_s.php?p=edit&id=<?php echo $data['id_dok']?>"> <i class="fas fa-cog"></i>EDIT </a>
                      <a class="btn btn-info btn-user mt-1" href="../cetak.php?id=<?php echo $data['id_dok']?>"> <i class="fas fa-folder"></i> PRINT </a>
                      <a class="btn btn-success btn-user mt-1" href="main_s.php?p=../dispo&id=<?php  echo $data['id_dok']?>"><i class="fas fa-flag"></i> DISPOSISI </a></td>
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
        <!-- /.container-fluid -->

      </div>
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
<?php
            if (isset($_GET['p'])) {
            } else {
                $page = $_GET['p'];
                include $page .".php";
            }
        ?>

</body>

</html>
