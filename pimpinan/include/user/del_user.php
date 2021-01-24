<?php
   include '../../../admin/include/koneksi.php';
   $get = $_REQUEST['ed'];
   $del = mysqli_query($db,"DELETE FROM user WHERE id_user = '$get' ");
   if ($del==TRUE) {
      echo "
         <script>
            window.location.href= '?page=user/user.php'
         </script>
      ";
   } else {
      echo "
         <script>
            window.location.href= '?page=user/user.php'
         </script>
      ";
   }
?>
