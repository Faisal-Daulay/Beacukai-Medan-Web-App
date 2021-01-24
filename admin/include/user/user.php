
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
            <a href="#revenue-chart" data-toggle="tab">Data User</a>
          </li>
          <li>
            <a href="#sales-chart" data-toggle="tab">Buat User Baru</a>
          </li>
        </ul>
        <div class="tab-content no-padding">
          <!-- Morris chart - Sales -->
          <div class="chart tab-pane active" id="revenue-chart" style="position: relative;">
            <section class="content">
             <div class="row">
                <div class="col-md-12">
                  <div class="box-body" style="overflow-x: scroll;">
                    <table id="example1" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Username</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                           include 'include/koneksi.php';
                           $sql = mysqli_query($db,"SELECT * FROM user  ");
                           $no=1;
                           while ($ambil = mysqli_fetch_array($sql)) {
                              $id = $ambil['id_user'];
                              $user = $ambil['username'];
                              $status = $ambil['status'];
                        ?>
                           <tr>
                              <td><?php echo $no++; ?></td>
                              <td><?php echo $user; ?></td>
                              <td><?php echo $status; ?></td>
                              <td>
                                 <a href="?page=user/edit_user.php&ed=<?php echo $id; ?>" class="btn btn-primary" id="edit"  data-id='$id'>Edit</a>

                                 <a href="?page=user/del_user.php&ed=<?php echo $id; ?>" class="btn btn-warning" id="hapus">Delete</a>
                              </td>
                           </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div><!-- /.box-body -->
                </div>
             </div>
            </section>
          </div>
          <div class="chart tab-pane" id="sales-chart" style="position: relative;">
            <section class="content">
             <div class="row">
                <div class="col-md-12">
                  <div class="col-md-5">
                     <form id="myform" action="?page=user/proses_user.php" method="post">
                       <div class="form-group">
                         <label>Username</label>
                         <input type="text" name="user" class="form-control" autocomplate="off"  placeholder="Username">
                       </div>
                       <div class="form-group">
                         <label>Password</label>
                         <input type="password" name="pass" class="form-control" autocomplate="off"  placeholder="Password">
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


<script type="text/javascript">
$(document).ready(function(){
  $("#hapus").click(function(){
    if (!confirm("Yakin ingin menghapus data?")){
      return false;
    }
  });
});
</script>

<!--<script>
   $(document).ready(function(){
      //var myform = $("#myform").val();
      $("#simpan").click(function(){
         $.ajax({
            type : "post",
            data : $("#myform").serialize(),
            url : 'include/user/proses_user.php',
            success : function(isi) {
               alert(isi);
            }, error : function() {
               alert("Gagal");
            }
         });
      });
   });
</script>-->
