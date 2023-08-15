
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
                      <th>Tindakan</th>
                    </tr>
                  </thead>
                  <tbody>
		<?php
			include "../koneksi.php";
        $query="SELECT tb_dok.id_dok, tb_dok.nomor_surat, tb_dok.asal_surat, tb_dok.tgl_surat, tb_dok.perihal, tb_divisi.divisi, tb_katdok.kategori, tb_jenis_dok.jenis_dok, tb_bagian.bagian, tb_fu.status 
          FROM tb_dok
          INNER JOIN tb_divisi ON tb_dok.kepada = tb_divisi.divisi
          INNER JOIN tb_katdok ON tb_dok.id_kadok = tb_katdok.id_katdok 
          INNER JOIN tb_jenis_dok ON tb_dok.id_jenis_dok = tb_jenis_dok.id_jenis_dok 
          INNER JOIN tb_bagian ON tb_dok.id_bagian = tb_bagian.id_bagian 
          INNER JOIN tb_fu ON tb_dok.id_fu = tb_fu.id_fu
          WHERE tb_divisi.id_divisi = 1 ";
        $sql=mysqli_query($config,$query);
			while($data = mysqli_fetch_array($sql)){
		?>
			<tr>
                    <td><?= $data['id_dok']?></td>
                    <td><?= $data['nomor_surat']?></td>
                    <td><?= $data['asal_surat']?></td>
                    <td><?= $data['tgl_surat']?></td>
                    <td><?= $data['perihal']?></td>
                    <td><?= $data['divisi']?></td>
                    <td><?= $data['kategori']?></td>
                    <td><?= $data['jenis_dok']?></td>
                    <td><?= $data['bagian']?></td>
                    <td><?= $data['status']?></td>
                    <td align="center"><a href="delete.php?id=<?php echo $data['nomor_surat']?>"> HAPUS </a>|<a href="user.php?p=edit&id=<?php echo $data['id_dok']?>"> EDIT </a><a href="../cetak.php?id=<?php echo $data['id_dok']?>"</td>
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