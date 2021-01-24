<?php
	session_start();
	include 'admin/include/koneksi.php';

	$user=$_REQUEST['user'];
	$pass=$_REQUEST['pass'];

if($user!=="" && $pass!=="") {
	$sql=mysqli_query($db,"SELECT * FROM user WHERE username='$user' AND password='$pass' ");
	$cek=mysqli_num_rows($sql);

	if ($cek > 0) {
		$ambil = mysqli_fetch_array($sql);
		$id_user = $ambil['id_user'];
		$status = $ambil['status'];
		$user = $ambil['username'];
      	$_SESSION['id_user']=$id_user;
		$_SESSION['username']=$user;
		$_SESSION['status']=$status;

		if ($status=="admin") {
			echo "
				<script>
					window.location.href= 'admin/'
				</script>
			";
		} elseif($status =="member") {
			echo "
				<script>
					window.location.href= 'member/'
				</script>
			";
		}
		elseif($status =="zona1") {
			echo "
				<script>
					window.location.href= 'zona1/'
				</script>
			";
		}
		elseif($status =="staff") {
			echo "
				<script>
					window.location.href= 'staff/'
				</script>
			";
		}
		elseif($status =="umum") {
			echo "
				<script>
					window.location.href= 'umum/'
				</script>
			";
		}
		elseif($status =="pimpinan") {
			echo "
				<script>
					window.location.href= 'pimpinan/'
				</script>
			";
		}

	} else {
		echo "
			<script>
				alert('Username Dan Password Salah');
				window.location.href='login.php'
			</script>
		";
	}

} else {
	echo "
		<script>
			alert('Login Gagal');
			window.location.href='login.php'
		</script>
	";
}
?>
