<?php
	include '../../../admin/include/koneksi.php';

	$id = $_REQUEST['id'];
	$naper  = $_REQUEST['naper'];
	$npwp   = $_REQUEST['npwp'];
	$alamat = $_REQUEST['alamat'];
	$skep1  = $_REQUEST['skep1'];
	$email  = $_REQUEST['email'];
	$skep2  = $_REQUEST['skep2'];
	$napen  = $_REQUEST['napen'];
	$alapen = $_REQUEST['alapen'];
	$pajak = $_REQUEST['pajak'];
	$tgl1 = $_REQUEST['tgl1'];
	$tgl2 = $_REQUEST['tgl2'];
	$notel = $_REQUEST['notel'];
	$fax = $_REQUEST['fax'];
	$zona = $_REQUEST['zona'];
	$email_peru = $_REQUEST['email_peru'];

	if ($naper !=="") {
		$sql = "UPDATE registration SET nama_perusahaan = '$naper',
										npwp = '$npwp', 
										alamat = '$alamat', 
										skep_awal = '$skep1', 
										email = '$email', 
										skep_akhir = '$skep2', 
										nama_penjawab = '$napen', 
										alamat_penjawab = '$alapen', 
										tgl_skepawal = '$tgl1', 
										tgl_skepakhir = '$tgl2', 
										tlpn_perusahaan = '$notel', 
										no_faxperusahaan = '$fax', 
										emai_pru = '$email_peru',zona='$zona'
										WHERE id_reg = '$id' ";
		$query = mysqli_query($db,$sql);
		echo "
			<script>
				alert('Update Registrasi Anda Success!!');
				window.location = '?page=registrasi/registrasi.php'
			</script>
		";
	} else {
		echo "
			<script>
				alert('Update Registrasi Anda Gagal!!');
				window.location = '?page=registrasi/registrasi.php'
			</script>
		";
	}
	mysqli_close($db);
?>