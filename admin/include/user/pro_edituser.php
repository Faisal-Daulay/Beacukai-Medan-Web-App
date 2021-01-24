<?php
   include 'include/koneksi.php';
   $id = $_REQUEST['id'];
   $user = $_REQUEST['user'];
   $pass = $_REQUEST['pass'];
   $status = $_REQUEST['status'];

   if ($nama!=="") {
      $update = mysqli_query($db,"UPDATE user SET username = '$user', 
                                                  password = '$pass', 
                                                  status = '$status' 
                                                  WHERE id_user = '$id'; ");
      echo "
         <script>
            alert('User Berhasil di Ubah');
            window.location.href= '?page=user/user.php'
         </script>
      ";
   } else {
      echo "
         <script>
            alert('User Berhasil di Ubah');
            window.location.href= '?page=user/user.php'
         </script>
      ";
   }
