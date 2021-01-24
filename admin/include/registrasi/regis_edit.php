              <div class="box box-success box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">
                    <i class="fa fa-inbox"></i> Data Registrasi
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
                        <a href="#revenue-chart" data-toggle="tab">Edit Registrasi</a>
                      </li>
                    </ul>
                    <div class="tab-content no-padding">
                      <!-- Morris chart - Sales -->
                      <div class="chart tab-pane active" id="revenue-chart" style="position: relative;">
                        <section class="content">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="box-body">
                                <?php
                                  include 'include/koneksi.php';
                                  $id = $_REQUEST['id'];
                                  $sql="SELECT * FROM registration WHERE id_reg ='$id' ";
                                  $query = mysqli_query($db,$sql);
                                  while ($ambil = mysqli_fetch_array($query)) {
                                  $id = $ambil['id_user'];
                                  $naper =$ambil['nama_perusahaan'];
                                  $npwp =$ambil['npwp'];
                                  $alamat =$ambil['alamat'];
                                  $email =$ambil['email'];
                                  $napen =$ambil['nama_penjawab'];
                                  $alapen =$ambil['alamat_penjawab'];
                                  $noawal =$ambil['noawal'];
                                  $tgl1 =$ambil['tgl_skepawal'];
                                  $noakhir =$ambil['noakhir'];
                                  $tgl2 =$ambil['tgl_skepakhir'];
                                  $notel =$ambil['tlpn_perusahaan'];
                                  $fax =$ambil['no_faxperusahaan'];
                                  $email_peru =$ambil['emai_pru'];	
                                //   $user = $ambil['username'];
                                //   $pass1 = $ambil['password'];
                                ?>
                                <div class="col-md-5">
                                  <form id="myform" action="?hal=profil/proses_prof.php" method="post" enctype="multipart/form-data">
                                      <input type="hidden" name="id" value="<?php echo $id; ?>">
                                      <div class="form-group">
                                          <label>Nama Perusahaan</label>
                                          <input type="text" value="<?php echo $naper; ?>" name="naper" class="form-control myinput" autocomplete="off"  placeholder="Nama Perusahaan">
                                      </div>
                                      <div class="form-group">
                                          <label>NPWP</label>
                                          <input type="text" value="<?php echo $npwp; ?>" name="npwp" class="form-control myinput" autocomplete="off"  placeholder="NPWP">
                                      </div>
                                      <div class="form-group">
                                          <label>Alamat</label>
                                          <input type="text" value="<?php echo $alamat; ?>" name="alamat" class="form-control myinput" placeholder="Alamat">
                                      </div>            
                                      <div class="form-group">
                                          <label>Email</label>
                                          <input type="text" value="<?php echo $email; ?>" name="email" required="" class="form-control myinput" id="datepicker2" placeholder="Email">
                                      </div>            
                                      <div class="form-group">
                                          <label>Nama Penanggung Jawab</label>
                                          <input type="text" value="<?php echo $napen; ?>" name="napen" class="form-control myinput" autocomplete="off"  placeholder="Nama Penanggung Jawab">
                                      </div>
                                      <div class="form-group">
                                          <label>Alamat Penanggung Jawab</label>
                                          <input type="text" value="<?php echo $alapen; ?>" name="alapen" class="form-control myinput" autocomplete="off"  placeholder="Alamat Penanggung Jawab">
                                      </div>
                                      <div class="form-group">
                                          <label>No SKEP AWAL</label>
                                          <input type="text" value="<?php echo $noawal; ?>" name="noawal" class="form-control myinput" autocomplete="off"  placeholder="No SKEP AWAL">
                                      </div>
                                      <div class="form-group">
                                          <label>Tgl SKEP AWAL</label>
                                          <input type="text" value="<?php echo $tgl1; ?>" name="tgl1" class="form-control myinput datepicker" autocomplete="off"  placeholder="No & Tgl SKEP AWAL">
                                      </div>
                                      <div class="form-group">
                                          <label>No SKEP AKHIR</label>
                                          <input type="text" value="<?php echo $noakhir; ?>" name="noakhir" class="form-control myinput" autocomplete="off"  placeholder="No SKEP AKHIR">
                                      </div>
                                      <div class="form-group">
                                          <label>Tgl SKEP AKHIR</label>
                                          <input type="text" value="<?php echo $tgl2; ?>" name="tgl2" class="form-control myinput datepicker" autocomplete="off"  placeholder="Tgl SKEP AKHIR">
                                      </div>
                                      <div class="form-group">
                                          <label>No Telepon Perusahaan</label>
                                          <input type="text" value="<?php echo $notel; ?>" name="notel" class="form-control myinput" autocomplete="off"  placeholder="No Tlpn Perusahaan">
                                      </div>
                                      <div class="form-group">
                                          <label>No Fax Perusahaan</label>
                                          <input type="text" value="<?php echo $fax; ?>" name="fax" class="form-control myinput" autocomplete="off"  placeholder="No Fax Perusahaan">
                                      </div>
                                      <div class="form-group">
                                          <label>Email Perusahaan</label>
                                          <input type="text" value="<?php echo $email_peru; ?>" name="email_peru" class="form-control myinput" autocomplete="off"  placeholder="Email Perusahaan">
                                      </div>
                                      <div class="form-group">
                                          <label>Foto Perusahaan</label>
                                          <input type="file" name="upload">
                                      </div>
                                      <div class="form-group">
                                          <label>Username</label>
                                          <input type="text" name="user" class="form-control myinput" autocomplete="off"  placeholder="Username" id="validasi">
                                          <label id="valid" style="margin: 5px 0px;"></label>
                                      </div>
                                      <div class="form-group">
                                          <label>Password</label>
                                          <input type="password" name="pass" class="form-control myinput" autocomplete="off"  placeholder="Password" id="pw1" on>
                                      </div>
                                      <div class="form-group">
                                          <label>Confirm Password</label>
                                          <input type="password" name="conpass" class="form-control myinput" autocomplete="off"  placeholder="Confirm Password" id="pw2" onchange="cekPass()">
                                          <label id="konfir" style="margin: 5px 0px;"></label>
                                      </div>
                                      <div class="form-group has-feedback">
                                      <input type="checkbox" id="cek"> Show Password
                                      </div>
                                      <input id="simpan" type="submit" value="Simpan" class="btn btn-primary">
                                  </form>
                                </div>
                                <?php } ?>
                              </div><!-- /.box-body -->
                            </div>
                          </div>
                        </section>
                      </div>
                    </div>
                  </div><!-- /.nav-tabs-custom -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->