<?php
    include '../../admin/include/koneksi.php';

    $valid = $_REQUEST['validasi'];
    $valid1 = $_REQUEST['validasi1'];
    $valid2 = $_REQUEST['validasi2'];

    if(!empty($valid)) {
        $result = mysqli_query($db,"SELECT * FROM user WHERE username = '$valid' ");
        $row = mysqli_fetch_row($result);
        $user_count = $row[0];
        if($user_count > 0) {
            echo "<label id='valid' style='margin: 5px 0px; color: red;'>Data Username Sudah ada</label>";
        }
        else {
            echo "<label id='valid' style='margin: 5px 0px; color: blue;'>Data Username Tersedia</label>";   
        }
    } 

    if(!empty($valid1)) {
        $result1 = mysqli_query($db,"SELECT * FROM registration WHERE nama_perusahaan = '$valid1' ");
        $row1 = mysqli_fetch_row($result1);
        $user_count1 = $row1[0];
        if($user_count1 > 0) {
            echo "<label id='valid1' style='margin: 5px 0px; color: red;'>Data Sudah ada</label>";
        }
        else {
            echo "<label id='valid1' style='margin: 5px 0px; color: blue;'>Data Tersedia</label>";   
        }
    }

    if(!empty($valid2)) {
        $result2 = mysqli_query($db,"SELECT * FROM registration WHERE email = '$valid2' ");
        $row2 = mysqli_fetch_row($result2);
        $user_count2 = $row2[0];
        if($user_count2 > 0) {
            echo "<label id='valid2' style='margin: 5px 0px; color: red;'>Data Email Sudah ada</label>";
        }
        else {
            echo "<label id='valid2' style='margin: 5px 0px; color: blue;'>Data Email Tersedia</label>";   
        }
    }
?>