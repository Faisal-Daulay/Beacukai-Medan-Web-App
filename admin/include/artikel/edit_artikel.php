
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
            <a href="#revenue-chart" data-toggle="tab">Edit Data Artikel</a>
          </li>
        </ul>
        <div class="tab-content no-padding">
          <!-- Morris chart - Sales -->
          <div class="chart tab-pane active" id="revenue-chart" style="position: relative;">
            <section class="content">
             <div class="row">
                <div class="col-md-12">
                  <div class="col-md-12">
                    <?php
                       include 'include/koneksi.php';
                       $ed = $_REQUEST['ed'];
                       $sql = mysqli_query($db,"SELECT * FROM isi WHERE id_isi='$ed' ");
                       $no=1;
                       while ($ambil = mysqli_fetch_array($sql)) {
                          $id = $ambil['id_isi'];
                          $judul = $ambil['judul'];
                          $img = $ambil['img'];
                          $isi = $ambil['isi'];
                    ?>
                     <form id="myform" action="?page=artikel/edit_proses.php" method="post" enctype="multipart/form-data">
                       <div class="form-group">
                         <label>Judul</label>
                         <input type="text" name="judul" class="form-control" autocomplate="off" value="<?php echo $judul;?>">
                       </div>
                       <div class="form-group">
                         <textarea name="isi" cols="30" rows="10" class="form-control"><?php echo $isi;?></textarea>
                       </div>
                       <div class="form-group">
                         <label>Image</label>
                         <input type="file" name="slider" autocomplate="off">
                       </div>
                       <input id="simpan" type="submit" value="Simpan" class="btn btn-primary">
                    </form>
                    <?php } ?>
                  </div>
                </div>
             </div>
            </section>
          </div>
          <div class="chart tab-pane" id="sales-chart" style="position: relative;">
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
