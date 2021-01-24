<?php
	include '../../../admin/include/koneksi.php';

	$naper =$_REQUEST['naper'];
	$npwp =$_REQUEST['npwp'];
	$alamat =$_REQUEST['alamat'];
	$email =$_REQUEST['email'];
	$napen =$_REQUEST['napen'];
	$alapen =$_REQUEST['alapen'];
	$pajak =$_REQUEST['pajak'];
	$noawal =$_REQUEST['noawal'];
	$tgl1 =$_REQUEST['tgl1'];
	$noakhir =$_REQUEST['noakhir'];
	$tgl2 =$_REQUEST['tgl2'];
	$notel =$_REQUEST['notel'];
	$fax =$_REQUEST['fax'];
	$email_peru =$_REQUEST['email_peru'];

	$user = $_REQUEST['user'];
	$pass1 = $_REQUEST['pass'];
	$pass2 = $_REQUEST['conpass'];

	if ($naper !=="") {
		if ($pass1 == $pass2) {
			$sql = "INSERT INTO registration (nama_perusahaan, npwp, alamat, email, nama_penjawab, alamat_penjawab, no_pajak, tgl_skepawal, tgl_skepakhir, tlpn_perusahaan, no_faxperusahaan, emai_pru, noawal, noakhir) VALUES ('$naper', '$npwp', '$alamat', '$email', '$napen', '$alapen', '$pajak', '$tgl1', '$tgl2', '$notel', '$fax', '$email_pru', '$noawal', '$noakhir')";

	      	$sql1 = mysqli_query($db,"INSERT INTO user (username, password, status) VALUES ('$user', '$pass2', 'member')");
			
			$query = mysqli_query($db,$sql);
			echo "
				<script>
					alert('Registrasi Anda Success!!');
					window.location = 'index.php'
				</script>
			";
		} else {
			echo "
				<script>
					alert('Password Tidak Cocok!!');
					window.location = '?p=registrasi/registrasi.php'
				</script>
			";
		}
	} else {
		echo "
			<script>
				alert('Registrasi Anda Gagal!!');
				window.location = '?p=registrasi/registrasi.php'
			</script>
		";
	}
	mysqli_close($db);
?>