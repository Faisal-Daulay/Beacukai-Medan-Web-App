<?php
	include 'include/koneksi.php';
$id = $_REQUEST['id'];
$stats = $_REQUEST['stats'];
$descrip = $_REQUEST['descrip'];
if ($id !="") {
		$sql = "UPDATE newdata SET status_data='$stats',
								   reject = '$descrip'
								   where id_newdata='$id'";
		$query = mysqli_query($db,$sql);

		$sql = "INSERT INTO alasan (id_newdata, status_newdata, alasan, id_user) values ('$id','$stats','$descrip','')";
		$query = mysqli_query($db,$sql);
		echo "
			<script>
				window.location = '?p=newdata/newdata.php'
			</script>
		";
		
	} else {
		echo "
			<script>
				alert('Data Anda Gagal!!');
				window.location = '?p=newdata/newdata.php'
			</script>
		";
	}
	mysqli_close($db);
?>