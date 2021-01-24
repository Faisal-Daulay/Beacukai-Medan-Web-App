<?php
	include 'include/koneksi.php';

	$naper =$_REQUEST['naper'];
	$npwp =$_REQUEST['npwp'];
	$alamat =$_REQUEST['alamat'];
	$email =$_REQUEST['email'];
	$napen =$_REQUEST['napen'];
	$alapen =$_REQUEST['alapen'];
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

   	$lokasi_file = $_FILES['upload']['tmp_name'];
   	$tipe_file   = $_FILES['upload']['type'];
   	$nama_file   = $_FILES['upload']['name'];
   	$size		 = $_FILES['upload']['size'];
   	$direktori 	 = "images/$nama_file";
	$date = date('Y-m-d');

	if ($naper !=="") {
		if ($pass1 == $pass2) {

        	$upload = move_uploaded_file($lokasi_file, $direktori);
			
			$sql1 = mysqli_query($db,"INSERT INTO user (username, password, status) VALUES ('$user', '$pass2', 'member')");
			$po=mysqli_insert_id($db);
			
			$sql = "INSERT INTO registration (nama_perusahaan, npwp, alamat, email, nama_penjawab, alamat_penjawab, tgl_skepawal, tgl_skepakhir, tlpn_perusahaan, no_faxperusahaan, emai_pru, img, noawal, noakhir, id_user, tgl_daftar) VALUES ('$naper', '$npwp', '$alamat', '$email', '$napen', '$alapen', '$tgl1', '$tgl2', '$notel', '$fax', '$email_peru', '$nama_file', '$noawal', '$noakhir', '$po', '$date')";
			
			$query = mysqli_query($db,$sql);
			echo "
				<script>
					alert('Registrasi Anda Success!!');
					window.location = '?page=registrasi/registrasi.php'
				</script>
			";
		} else {
			echo "
				<script>
					alert('Password Tidak Cocok!!');
					window.location = '?page=registrasi/registrasi.php'
				</script>
			";
		}
	} else {
		echo "
			<script>
				alert('Registrasi Anda Gagal!!');
				window.location = '?page=registrasi/registrasi.php'
			</script>
		";
	}
	mysqli_close($db);
?>