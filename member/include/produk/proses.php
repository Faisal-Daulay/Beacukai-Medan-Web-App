<?php
	include '../../../admin/include/koneksi.php';

	$produk  = $_REQUEST['produk'];
	$jumlah   = $_REQUEST['jumlah'];
	$fungsi = $_REQUEST['fungsi'];
	$country  = $_REQUEST['country'];
	$nopo  = $_REQUEST['nopo'];
	$barang  = $_REQUEST['barang'];
	$nabar  = $_REQUEST['nabar'];
	$jlhter = $_REQUEST['jlhter'];

	if ($produk !=="") {
		$sql = "INSERT INTO produk (produk, jumlah, fungsi, country, nopo, barang, nabar, jlhter) VALUES ('$produk', '$jumlah', '$fungsi', '$country', '$nopo', '$barang', '$nabar', '$jlhter');";
		$query = mysqli_query($db,$sql);
		

		echo "
			<script>
				alert('New Produk Anda Success!!');
				window.location = 'index.php'
			</script>
		";
		
	} else {
		echo "
			<script>
				alert('New Produk Anda Gagal!!');
				window.location = '?hal=produk/produk.php'
			</script>
		";
	}
	mysqli_close($db);
?>