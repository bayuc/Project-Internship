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
                    <h1 class="h4 text-gray-900 mb-4">Input Dokumen</h1>
                  </div>

                  <form class="user" action="simpandata.php" method="post" enctype="multipart/form-data">
                    
                    <div class="form-group">
                     <input hidden="hidden" type="text" name="idDokumen" class="form-control" placeholder="Id Dokumen..">
                    </div>
                    <div class="form-group">
                     <input type="text" name="nmrDok" class="form-control" placeholder="Nomor Dokumen.." required="required">
                    </div>
                    <div class="form-group">
                     <input type="text" name="asalDok" class="form-control" placeholder="Asal Dokumen.." required="required">
                    </div>
                    <div class="form-group">
                     <input type="date" name="tglDok" class="form-control" placeholder="Tanggal Dokumen.."required="required">
                    </div>
                    <div class="form-group">
                    <input type="text" name="perihalDok" class="form-control" placeholder="Perihal Dokumen.." required="required">
                    </div>
                    <div class="form-group">
                    <input type="text" name="tujuanDok" class="form-control" placeholder="Tujuan Dokumen.." required="required">
                    </div>
                    <div class="form-group">
                      <?php
                      include '../koneksi.php';
                      $sql = mysqli_query($config,'SELECT * FROM tb_katdok');
                    ?>
                    <select class="form-control" name="kategoriDok">
                      <option>--Pilih Kategori--</option>
                      <?php
                        if(mysqli_num_rows($sql) > 0 ){ ?>
                        <?php while ($row = mysqli_fetch_array($sql)) { ?>
                          <option value="<?php echo ($row['id_katdok']) ?>"><?php echo ($row['kategori']) ?></option>
                        <?php } ?>
                      <?php }?>
                    </select>
                              </div>
                              <div class="form-group">
                                <select class="form-control" name="jenisDok">
                      <option>--Pilih Jenis Dokumen--</option>
                      <?php
                      $sql = mysqli_query($config,'SELECT * FROM tb_jenis_dok');
                        if(mysqli_num_rows($sql) > 0 ){ ?>
                        <?php while ($row = mysqli_fetch_array($sql)) { ?>
                          <option value="<?php echo ($row['id_jenis_dok']) ?>"><?php echo ($row['jenis_dok']) ?></option>
                        <?php } ?>
                      <?php }?>
                    </select>
                              </div>
                              <div class="form-group">
                                <select class="form-control" name="bagian">
                      <option>--Pilih Bagian--</option>
                      <?php
                      $sql = mysqli_query($config,'SELECT * FROM tb_bagian');
                        if(mysqli_num_rows($sql) > 0 ){ ?>
                        <?php while ($row = mysqli_fetch_array($sql)) { ?>
                          <option value="<?php echo ($row['id_bagian']) ?>"><?php echo ($row['bagian']) ?></option>
                        <?php } ?>
                      <?php }?>
                    </select>
                    </div>
                    <div class="form-group">
                    <label>File</label><br>
                    <input type="file" name="filedokumen" required="required">
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
