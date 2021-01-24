<?php 
	include 'include/koneksi.php';

	$judul = $_REQUEST['judul'];
	$isi = $_REQUEST['isi'];

   	$lokasi_file = $_FILES['slider']['tmp_name'];
   	$tipe_file   = $_FILES['slider']['type'];
   	$nama_file   = $_FILES['slider']['name'];
   	$size		 = $_FILES['slider']['size'];
   	$direktori 	 = "images/content/$nama_file";

    if ($judul !=="") {

      $upload = move_uploaded_file($lokasi_file, $direktori);
   		$sql = "INSERT INTO isi (judul, isi, img) VALUES ('$judul','$isi','$nama_file')";
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