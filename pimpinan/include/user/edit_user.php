<div class="col-md-6">
  <div class="box box-primary box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">
        <i class="fa fa-inbox"></i> Data User
      </h3>
      <div class="box-tools pull-right">
        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class="box-body">
      <div class="nav-tabs-custom">
        <!-- Tabs within a box -->
        <ul class="nav nav-tabs pull-left">
          <li class="active">
            <a href="#revenue-chart" data-toggle="tab">Ubah Data User</a>
          </li>
        </ul>
        <div class="tab-content no-padding">
          <!-- Morris chart - Sales -->
          <div class="chart tab-pane active" id="revenue-chart" style="position: relative;">
             <a href="?page=user/user.php" class="btn btn-success" style="margin: 10px 30px; float: right;">Lihat Data</a>
           <section class="content">
            <div class="row">
               <div class="col-md-12">
                 <div class="col-md-12">
                    <form id="myform" action="?page=user/pro_edituser.php" method="post">
                      <?php
                  include '../admin/include/koneksi.php';

                           $get = $_REQUEST['ed'];
                           $sql = mysqli_query($db,"SELECT * FROM user WHERE id_user='$get' ");
                           while ($ambil = mysqli_fetch_array($sql)) {
                              $id = $ambil['id_user'];
                              $user = $ambil['username'];
                              $pass = $ambil['password'];
                              $status = $ambil['status'];
                      ?>
                      <input type="hidden" name="id" value="<?php echo $id ?>">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" autocomplate="off" value="<?php echo $user ?>">
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="pass" class="form-control" autocomplate="off" value="<?php echo $pass ?>">
                      </div>
                       <div class="form-group">
                         <label>Status</label>
                         <select class="form-control select2" style="width: 100%;" name="status">
                           <option value="admin">Admin</option>
                           <option value="receptionis">Receptionis</option>
                           <option value="member">Member</option>
                           <option value="pemimpin">Pemimpin</option>
                         </select>
                       </div><!-- /.form-group -->
                      <input id="simpan" type="submit" value="Simpan" class="btn btn-primary">
                      <?php } ?>
                   </form>
                 </div>
               </div>
            </div>
           </section>
          </div>
        </div>
      </div><!-- /.nav-tabs-custom -->
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>
