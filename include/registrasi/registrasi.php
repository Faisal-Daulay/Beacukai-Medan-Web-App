<div class="cc-isi">
  <section class="content">
   <div class="row">
      <div class="col-md-12">
        <div class="col-md-5" style="margin-left: 300px;">
          <h2 style="margin: 0px; margin: 5px 5px 5px 0px; text-align: center;">Registrasi</h2>
          <form id="myform" action="?p=registrasi/proses.php" method="post" enctype="multipart/form-data">
             <div class="form-group">
               <label>Nama Perusahaan</label>
               <input type="text" name="naper" class="form-control validasi1" autocomplete="off"  placeholder="Nama Perusahaan" autofocus="">
               <label id="valid1" style="margin: 5px 0px;"></label>
             </div>
             <div class="form-group">
               <label>NPWP</label>
               <input type="text" name="npwp" class="form-control" autocomplete="off"  placeholder="NPWP">
             </div>
             <div class="form-group">
               <label>Alamat</label>
               <input type="text" name="alamat" class="form-control" placeholder="Alamat">
             </div>            
             <div class="form-group">
               <label>Email</label>
               <input type="text" name="email" required="" class="form-control validasi2" id="datepicker2" placeholder="Email">
               <label id="valid2" style="margin: 5px 0px;"></label>
             </div>            
             <div class="form-group">
               <label>Nama Penanggung Jawab</label>
               <input type="text" name="napen" class="form-control" autocomplete="off"  placeholder="Nama Penanggung Jawab">
             </div>
             <div class="form-group">
               <label>Alamat Penanggung Jawab</label>
               <input type="text" name="alapen" class="form-control" autocomplete="off"  placeholder="Alamat Penanggung Jawab">
             </div>
             
             <div class="form-group">
               <label>No SKEP AWAL</label>
               <input type="text" name="noawal" class="form-control" autocomplete="off"  placeholder="No SKEP AWAL">
             </div>
             <div class="form-group">
               <label>Tgl SKEP AWAL</label>
               <input type="text" name="tgl1" class="form-control datepicker" autocomplete="off"  placeholder="No & Tgl SKEP AWAL">
             </div>
             <div class="form-group">
               <label>No SKEP AKHIR</label>
               <input type="text" name="noakhir" class="form-control" autocomplete="off"  placeholder="No SKEP AKHIR">
             </div>
             <div class="form-group">
               <label>Tgl SKEP AKHIR</label>
               <input type="text" name="tgl2" class="form-control datepicker" autocomplete="off"  placeholder="Tgl SKEP AKHIR">
             </div>
             <div class="form-group">
               <label>No Telepon Perusahaan</label>
               <input type="text" name="notel" class="form-control" autocomplete="off"  placeholder="No Tlpn Perusahaan">
             </div>
             <div class="form-group">
               <label>No Fax Perusahaan</label>
               <input type="text" name="fax" class="form-control" autocomplete="off"  placeholder="No Fax Perusahaan">
             </div>
             <div class="form-group">
               <label>Email Perusahaan</label>
               <input type="text" name="email_peru" class="form-control" autocomplete="off"  placeholder="Email Perusahaan">
             </div>
             <div class="form-group">
               <label>Foto Perusahaan</label>
               <input type="file" name="upload">
             </div>
             <div class="form-group">
               <label>Username</label>
               <input type="text" name="user" class="form-control validasi" autocomplete="off"  placeholder="Username" id="validasi">
               <label id="valid" style="margin: 5px 0px;"></label>
             </div>
             <div class="form-group">
               <label>Password</label>
               <input type="password" name="pass" class="form-control" autocomplete="off"  placeholder="Password" id="pw1">
             </div>
             <div class="form-group">
               <label>Masukan Ulang Password Anda</label>
               <input type="password" name="conpass" class="form-control" autocomplete="off"  placeholder="Konfirmasi Password" id="pw2" onchange="cekPass()">
               <label id="konfir" style="margin: 5px 0px;"></label>
             </div>
             <div class="form-group has-feedback">
              <input type="checkbox" id="cek"> Show Password
             </div>
             <input id="simpan" type="submit" value="Simpan" class="btn btn-primary">
          </form>
        </div>
      </div>
   </div>
  </section>
</div>