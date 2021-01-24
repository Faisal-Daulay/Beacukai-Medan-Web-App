<?php 

  include '../../../admin/include/koneksi.php';';

	$cap = $_REQUEST['caption'];

   	$lokasi_file = $_FILES['slider']['tmp_name'];
   	$tipe_file   = $_FILES['slider']['type'];
   	$nama_file   = $_FILES['slider']['name'];
   	$size		 = $_FILES['slider']['size'];
   	$direktori 	 = "images/slider/$nama_file";

    if ($cap !=="") {

      $upload = move_uploaded_file($lokasi_file, $direktori);
   		$sql = "INSERT INTO content (nama_slider, img) VALUES ('$cap','$nama_file')";
   		$query = mysqli_query($db,$sql);
   		echo "
			<script>
				alert('Success');
				window.location = '?page=slider/slider.php'
			</script>
   		";
    } else {
   		echo "
			<script>
				alert('Failed');
				window.location = '?page=slider/slider.php'
			</script>
   		";
		}
	mysqli_close($db);
?>