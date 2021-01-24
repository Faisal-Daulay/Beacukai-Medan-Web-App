
 <div class="box box-primary box-solid">
   <div class="box-header with-border">
      <h3 class="box-title">
        <i class="fa fa-inbox"></i> Data Setting
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
            <a href="#revenue-chart" data-toggle="tab">Data Setting</a>
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
                       $sql = mysqli_query($db,"SELECT * FROM setting  ");
                       $no=1;
                       while ($ambil = mysqli_fetch_array($sql)) {
                          $id = $ambil['id_setting'];
                          $judul = $ambil['judul'];
                          $top_isi = $ambil['top_isi'];
                          $img = $ambil['logo'];
                          $judul_logo = $ambil['judul_logo'];
                    ?>
                     <form id="myform" action="?page=setting/proses_setting.php" method="post" enctype="multipart/form-data">
                       <div class="form-group">
                         <label>Top Judul</label>
                         <input type="text" name="topjudul" class="form-control" autocomplate="off" value="<?php echo $judul; ?>">
                       </div>
                       <div class="form-group">
                         <label>Top Artikel</label>
                         <textarea  name="topartikel" class="form-control" id="" cols="30" rows="10"><?php echo $top_isi; ?></textarea>
                       </div>
                       <div class="form-group">
                         <label>Logo</label>
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
