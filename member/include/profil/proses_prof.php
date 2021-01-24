<?php
	include '../../../admin/include/koneksi.php';

    $id = $_REQUEST['id'];
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
    
    if ($naper!=="") {
	    $sql1 = mysqli_query($db,"UPDATE user SET username = '$user',
												  password = '$pass2',
												  status = 'member'
												  WHERE id_user ='$id' ");

		$sql = "UPDATE registration SET nama_perusahaan = '$naper', 
										npwp = '$npwp', 
										alamat = '$alamat', 
										email = '$email', 
										nama_penjawab = '$napen', 
										alamat_penjawab = '$alapen', 
										tlpn_perusahaan = '$notel', 
										no_faxperusahaan = '$fax', 
										emai_pru = '$email_peru', 
										noawal = '$noawal', 
										noakhir = '$noakhir' 
										WHERE id_user = $id";

		$query = mysqli_query($db,$sql);

		echo "
			<script>
				alert('Update Profil Success!!');
				window.location = 'index.php'
			</script>
		";
	} else {
		echo "
			<script>
				alert('Update Profil Failed!!');
				window.location = 'index.php'
			</script>
		";
	}
	mysqli_close($db);
?>