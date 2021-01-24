
 <div class="box box-primary box-solid">
   <div class="box-header with-border">
      <h3 class="box-title">
        <i class="fa fa-inbox"></i> Data Artikel
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
            <a href="#revenue-chart" data-toggle="tab">Data Artikel</a>
          </li>
          <li>
            <a href="#sales-chart" data-toggle="tab">Buat Artikel Baru</a>
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
                          <th>Judul Artikel</th>
                          <th>Artikel</th>
                          <th>Image </th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                           include 'include/koneksi.php';
                           $sql = mysqli_query($db,"SELECT * FROM isi  ");
                           $no=1;
                           while ($ambil = mysqli_fetch_array($sql)) {
                              $id = $ambil['id_isi'];
                              $judul = $ambil['judul'];
                              $img = $ambil['img'];
                              $isi = $ambil['isi'];
                        ?>
                           <tr>
                              <td><?php echo $no++; ?></td>
                              <td><?php echo $judul; ?></td>
                              <td><?php echo substr($isi,0,250); ?></td>
                              <td>
                                <img src="images/content/<?php echo $img; ?>" style="width: 200px;">  
                              </td>
                              <td>
                                 <a href="?page=artikel/edit_artikel.php&ed=<?php echo $id; ?>" class="btn btn-primary" id="edit"  data-id='$id'>Edit</a>

                                 <a href="?page=artikel/del_artikel.php&ed=<?php echo $id; ?>" class="btn btn-warning" id="hapus">Delete</a>
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
                  <div class="col-md-12">
                     <form id="myform" action="?page=artikel/proses_artikel.php" method="post" enctype="multipart/form-data">
                       <div class="form-group">
                         <label>Judul</label>
                         <input type="text" name="judul" class="form-control" autocomplate="off"  placeholder="Judul">
                       </div>
                       <div class="form-group">
                         <textarea name="isi" cols="30" rows="10" class="form-control"></textarea>
                       </div>
                       <div class="form-group">
                         <label>Image</label>
                         <input type="file" name="slider" autocomplate="off">
                       </div>
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
