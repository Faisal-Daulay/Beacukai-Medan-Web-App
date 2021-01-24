<?php
   include 'include/koneksi.php';
   $user = $_REQUEST['user'];
   $pass = $_REQUEST['pass'];
   $status = $_REQUEST['status'];

   if ($user !="") {
      $sql = mysqli_query($db,"INSERT INTO user (username, password, status) VALUES ('$user', '$pass', '$status')");
      echo "
         <script>
            alert('User Berhasil di Tambah');
            window.location.href= '?page=user/user.php'
         </script>
      ";
      //echo "User Berhasil di Tambah";
   } else {
      echo "
         <script>
            alert('User Gagal di Tambah');
            window.location.href= '?page=user/user.php'
         </script>
      ";
      //echo "User Gagal di Tambah";
   }
   mysqli_close($db);
?>
