<?php 
	include 'include/koneksi.php';

  $topjudul = $_REQUEST['topjudul'];
  $topartikel = $_REQUEST['topartikel'];
  $toplogo = $_REQUEST['toplogo'];

  $lokasi_file = $_FILES['slider']['tmp_name'];
  $tipe_file   = $_FILES['slider']['type'];
  $nama_file   = $_FILES['slider']['name'];
  $size		 = $_FILES['slider']['size'];
  $direktori 	 = "images/$nama_file";

  if ($topjudul !=="") {
    $upload = move_uploaded_file($lokasi_file, $direktori);
    $sql = "UPDATE setting SET judul ='$topjudul',
                               top_isi ='$topartikel',
                               logo ='$nama_file',
                               judul_logo ='$toplogo' ";
    $query = mysqli_query($db,$sql);
    echo "
    <script>
      alert('Success');
      window.location = '?page=setting/setting.php'
    </script>
    ";
  } else {
  echo "
    <script>
      alert('Failed');
      window.location = '?page=setting/setting.php'
    </script>
    ";
  }
  mysqli_close($db);
?>