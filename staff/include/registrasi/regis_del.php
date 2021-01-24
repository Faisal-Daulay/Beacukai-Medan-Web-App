<?php
	include '../../../admin/include/koneksi.php';
	$id = $_REQUEST['id'];
	$sql = "DELETE FROM registration WHERE id_reg='$id' ";
	$query = mysqli_query($db,$sql);
	if ($query==true) {
		echo "
			<script>
				alert('Data Telah Di Hapus !!');
				window.location = '?page=registrasi/registrasi.php'
			</script>
		";
	} else {
		echo "
			<script>
				alert('Data Gagal Di Hapus!!');
				window.location = '?page=registrasi/registrasi.php'
			</script>
		";
	}
?>