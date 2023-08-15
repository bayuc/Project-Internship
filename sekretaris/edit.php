<?php
  include '../koneksi.php';
  $id = isset($_GET['id'])?$_GET['id']:" ";
  $edit="SELECT * FROM tb_dok where id_dok=$id";
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

                  <form class="user" method="POST" action="update.php">
                      <input type="hidden" class="form-control" name="idDokumen" value="<?php echo $data["id_dok"];?>"  />
                      <div class="form-group">
                      <label>Nomor Dokumen</label>
                       <input type="text" name="nmrDok" class="form-control" value="<?php echo $data["nomor_surat"];?>">
                      </div>
                      <div class="form-group">
                        <label>Asal Dokumen</label>
                       <input type="text" name="asalDok" class="form-control" value="<?php echo $data["asal_surat"];?>">
                      </div>
                      <div class="form-group">
                        <label>Tanggal Dokumen</label>
                       <input type="text" name="tglDok" id="from-datepicker" class="form-control" value="<?php echo $data["tgl_surat"];?>">
                      </div>
                      <div class="form-group">
                         <label>Perihal Dokumen</label>
                      <input type="text" name="perihalDok" class="form-control" value="<?php echo $data["perihal"];?>">
                      </div>
                      <div class="form-group">
                        <label>Tujuan Dokumen</label>
                      <input type="text" name="tujuanDok" class="form-control" value="<?php echo $data["kepada"];?>">
                      </div>
                       <div class="form-group">
                      <?php
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