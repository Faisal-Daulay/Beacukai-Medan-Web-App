<?php
error_reporting(0);
session_start();
$status = $_SESSION['status'];
$username = $_SESSION['username'];
$id_user = $_SESSION['id_user'];
if ($status!="member") {
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
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>Official Website Beacukai Medan</title>
		<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
		<link rel="icon" href="../img/favicon.ico" type="image/x-icon">
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/fixedtable.css">
		<!-- Date Picker -->
		<link rel="stylesheet" href="js/datepicker/datepicker3.css">
	</head>
	<body>
		<div id="wrapper">
			<?php 
				include 'include/menu.php';
				include 'include/header.php';
			?>
			<div id="content">
				<div id="content-top">
					<div id="cleft">
						<?php 
							$page = $_GET['hal'];
							if (!isset($page)) {
								include 'include/content.php';
							} else {
								include 'include/'. $page;
							}
						?>
					</div>
				</div>
			</div>
		</div>
		<?php 
			include 'include/modal.php';
		?>

		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/npm.js"></script>
		<script src="js/datable.js"></script>
		<script src="js/fixedtable.js"></script>
		<script src="js/select.js"></script>
		<script src="js/drag.js"></script>	
		<!-- datepicker -->
		<script src="js/datepicker/bootstrap-datepicker.js"></script>
		<script>
			$(document).ready(function() {
			    $('#example').DataTable( {
			        scrollY:        300,
			        scrollX:        true,
			        scrollCollapse: true,
			        paging:         true,
			        fixedColumns:   {
			            leftColumns: 2
			        },
			        columnDefs: [ {
			            orderable: false,
			            className: 'select-checkbox',
			            targets:   0
			        } ],
			        select: {
			            style:    'os',
			            selector: 'td:first-child'
			        },
			        order: [[ 1, 'asc' ]]
			    } );

				$(".datepicker").datepicker({
					"autoclose":true,
					"todayHighlight":true,
					"format": 'yyyy-mm-dd',
				});

			    $('.dropdown-toggle').dropdown();
			    $('#myModal').click(function(){
			    	$('#myModal').modal(hide);
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

				// VALIDASI FORM USER
				$("#validasi").on('blur',function(){
					var validasi = $("#validasi").val();
					$.ajax({
						type : 'POST',
						data : 'validasi='+validasi,
						url  : "../include/registrasi/validasi.php",
						success: function(result) {
							$("#valid").html(result);
						}
					});
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
