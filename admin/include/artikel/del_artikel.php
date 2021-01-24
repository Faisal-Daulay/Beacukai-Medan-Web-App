<?php
	include 'include/koneksi.php';
	$id = $_REQUEST['ed'];
	$sql = "DELETE FROM isi WHERE id_isi='$id' ";
	$query = mysqli_query($db,$sql);
	if ($query==true) {
		echo "
			<script>
				alert('Data Telah Di Hapus !!');
				window.location = '?page=artikel/artikel.php'
			</script>
		";
	} else {
		echo "
			<script>
				alert('Data Gagal Di Hapus!!');
				window.location = '?page=artikel/artikel.php'
			</script>
		";
	}
?>