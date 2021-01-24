<?php 
	include 'include/koneksi.php';

	$id = $_REQUEST['id'];
	$caption = $_REQUEST['caption'];

   	$lokasi_file = $_FILES['slider']['tmp_name'];
   	$tipe_file   = $_FILES['slider']['type'];
   	$nama_file   = $_FILES['slider']['name'];
   	$size		 = $_FILES['slider']['size'];
   	$direktori 	 = "images/artikel/$nama_file";

    if ($caption !=="") {

      $upload = move_uploaded_file($lokasi_file, $direktori);
   		$sql = "UPDATE isi SET caption ='$caption',
   							   img = '$nama_file'
   							   WHERE id_slider = '$id' ";
   		$query = mysqli_query($db,$sql);
   		echo "
			<script>
				alert('Success');
				window.location = '?page=artikel/artikel.php'
			</script>
   		";
    } else {
   		echo "
			<script>
				alert('Failed');
				window.location = '?page=artikel/artikel.php'
			</script>
   		";
		}
	mysqli_close($db);
?>