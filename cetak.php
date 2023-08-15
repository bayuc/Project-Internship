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
<?php
  include 'koneksi.php';
  $path = "Dokumen/";

  $a = isset($_GET['id'])?$_GET['id']:" ";
  $id ="SELECT * FROM tb_dok where id_dok = $a";  
  $query = mysqli_query($config,$id);
  $data = mysqli_fetch_array($query);


    $fullpath = $path.$data['nama_file'];

?>
<p>
        <input type="button" class="btn btn-info btn-user mt-1" id="bt" onclick="print()" value="PRINT" />
    </p>
<iframe 
        src="<?php echo($fullpath) ?>" id="myFrame" 
        frameborder="0" style="border:0;" 
        width="100%" height="100%">
    </iframe>
    
</body>

<script>
    function print() {
        var objFra = document.getElementById('myFrame');
        objFra.contentWindow.focus();
        objFra.contentWindow.print();
    }
</script>