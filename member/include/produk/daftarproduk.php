<h3 style="margin: 0px; margin: 5px 5px 5px 0px; text-align: center;">Tambah Data Produk</h3>
<form id="myform" action="?hal=produk/proses.php" method="post" enctype="multipart/form-data">
   <div class="form-group">
     <label>Uraian Produk</label>
     <input type="text" name="produk" class="form-control myinput" autocomplete="off"  placeholder="Uraian Produk">
   </div><!-- /.form-group -->
   <div class="form-group">
     <label>Jumlah</label>
     <input type="text" name="jumlah" class="form-control myinput" autocomplete="off"  placeholder="Jumlah">
   </div>
   <div class="form-group">
     <label>Fungsi Barang</label>
     <input type="text" name="fungsi" class="form-control myinput" placeholder="Fungsi Barang">
   </div>
   <div class="form-group">
     <label>Country Of Origin</label>
     <input type="text" name="Country" class="form-control myinput" autocomplete="off"  placeholder="Country Of Origin">
   </div>
   <div class="form-group">
     <label>No.PO</label>
     <input type="text" name="nopo" required="" class="form-control myinput" id="datepicker2" placeholder="No.PO">
   </div>
   <div class="form-group">
     <label>Kondisi Barang</label>
     <input type="text" name="barang" required="" class="form-control myinput" id="" placeholder="Kondisi Barang">
   </div>
   <div class="form-group">
     <label>Nama Barang Modal</label>
     <input type="text" name="nabar" class="form-control myinput" autocomplete="off"  placeholder="Nama Barang Modal">
   </div>
   <div class="form-group">
     <label>Jumlah Terpasang</label>
     <input type="text" name="jlhter" class="form-control myinput" autocomplete="off"  placeholder="Jumlah Terpasang">
   </div>          
   <input id="simpan" type="submit" value="Simpan" class="btn btn-primary">
</form>