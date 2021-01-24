<?php
error_reporting(0);
session_start();
$status = $_SESSION['status'];
$user = $_SESSION['username'];
$id_user = $_SESSION['id_user'];
if ($status!="staff") {
  echo "
    <script>
      alert('Silahkan Login Terlebih Dahulu');
      window.location.href='../'
    </script>
  ";
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashbord Beacukai</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/font-awesome-4.4.0/css/font-awesome.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="plugins/select2/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <!-- DataTable -->
    <link rel="stylesheet" type="text/css" href="plugins/datatables/dataTables.bootstrap.css">

  </head>
  <body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">
      <?php 
        include 'include/header.php';
        include 'include/menu.php';
      ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->

          <!-- Main row CONTENT-->
          <div class="row">
            <div class="col-md-12">
              <?php
                $page = $_GET['page'];
                if (!isset($page)) {
                  include 'include/content.php';
                } else {
                  include 'include/'.$page;
                }
              ?>
            </div>
          </div><!-- /.row (main row) -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php
        include 'include/footer.php';
      ?>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jQueryUI/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Select2 -->
    <script src="plugins/select2/select2.full.min.js"></script>
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
    <script type="text/javascript">
      $(function(){
        //Initialize Select2 Elements
        $(".select2").select2();
        //Initialize datepicker Elements
        $(".datepicker").datepicker({
          "autoclose":true,
          "todayHighlight":true,
          "format": 'yyyy-mm-dd',
        });

        $("#pilih").on('change', function(event){
          var pilih = $("#pilih").val();
          var textarea1 = "<label>Alasan Reject</label><textarea name='descrip' class='form-control' id=' cols='30' rows='10'><?php echo $reject; ?></textarea>";

          if (pilih == 'reject') {
            $("#textarea").append(textarea1);
          } else {
            $("#textarea").empty();
          }
        });

        $('#cek').click(function(){
          if($(this).is(':checked')) {
            $('#pw1').attr('type','text');
            $('#pw2').attr('type','text');
          } else {
            $('#pw1').attr('type','password');
            $('#pw2').attr('type','password');
          }
        });
      });


      function cekPass () {
        var pw1 = $("#pw1").val();
        var pw2 = $("#pw2").val();
        if (pw1==pw2) {
          //alert("Password Benar");
          document.getElementById('konfir').innerHTML = "Password Benar";
        } else {
          document.getElementById('konfir').innerHTML = "Password Salah";
          //alert("Password Salah");
        }
      }
    </script>
  </body>
</html>
