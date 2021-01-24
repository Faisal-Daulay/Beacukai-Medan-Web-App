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
  include '../admin/include/koneksi.php';
                                  $id = $_REQUEST['id'];
                                  $sql="SELECT * FROM registration WHERE id_reg ='$id' ";
                                  $query = mysqli_query($db,$sql);
                                  while ($ambil = mysqli_fetch_array($query)) {
                                    $id = $ambil['id_reg'];
                                    $nama = $ambil['nama_perusahaan'];
                                    $npwp = $ambil['npwp'];
                                    $alamat = $ambil['alamat'];
                                    $skep1 = $ambil['skep_awal'];
                                    $email = $ambil['email'];
                                    $skep2 = $ambil['skep_akhir'];
                                    $napen  = $ambil['nama_penjawab'];
                                    $alapen = $ambil['alamat_penjawab'];
                                    $pajak = $ambil['no_pajak'];
                                    $tgl1 = $ambil['tgl_skepawal'];
                                    $tgl2 = $ambil['tgl_skepakhir'];
                                    $notel = $ambil['tlpn_perusahaan'];
                                    $fax = $ambil['no_faxperusahaan'];
                                    $email_peru = $ambil['emai_pru'];
                                ?>
                                <div class="col-md-5">
                                  <form id="myform" action="?page=registrasi/edit_proses.php" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                     <div class="form-group">
                                       <label>Nama Perusahaan</label>
                                       <input type="text" name="naper" class="form-control" autocomplete="off" value="<?php echo $nama; ?>">
                                     </div><!-- /.form-group -->
                                     <div class="form-group">
                                       <label>NPWP</label>
                                       <input type="text" value="<?php echo $npwp; ?>" name="npwp" class="form-control" autocomplete="off"  placeholder="NPWP">
                                     </div>
                                     <div class="form-group">
                                       <label>Alamat</label>
                                       <input type="text" value="<?php echo $alamat; ?>" name="alamat" class="form-control" placeholder="Alamat">
                                     </div>
                                     <div class="form-group">
                                       <label>SKEP.KABER AWAL</label>
                                       <input type="text" value="<?php echo $skep1; ?>" name="skep1" class="form-control" autocomplete="off"  placeholder="SKEP.KABER AWAL">
                                     </div>
                                     <div class="form-group">
                                       <label>Email</label>
                                       <input type="text" value="<?php echo $email; ?>" name="email" required="" class="form-control" id="datepicker2" placeholder="Email">
                                     </div>
                                     <div class="form-group">
                                       <label>SKEP AKHIR</label>
                                       <input type="text" value="<?php echo $skep2; ?>" name="skep2" required="" class="form-control" id="" placeholder="SKEP AKHIR">
                                     </div>
                                     <div class="form-group">
                                       <label>Nama Penanggung Jawab</label>
                                       <input type="text" value="<?php echo $napen; ?>" name="napen" class="form-control" autocomplete="off"  placeholder="Nama Penanggung Jawab">
                                     </div>
                                     <div class="form-group">
                                       <label>Alamat Penanggung Jawab</label>
                                       <input type="text" value="<?php echo $alapen; ?>" name="alapen" class="form-control" autocomplete="off"  placeholder="Alamat Penanggung Jawab">
                                     </div>
                                     <div class="form-group">
                                       <label>No Wajib Pajak</label>
                                       <input type="text" value="<?php echo $pajak; ?>" name="pajak" class="form-control" autocomplete="off"  placeholder="No Wajib Pajak">
                                     </div>
                                     <div class="form-group">
                                       <label>No & Tgl SKEP AWAL</label>
                                       <input type="text" value="<?php echo $tgl1; ?>" name="tgl1" class="form-control datepicker" autocomplete="off"  placeholder="No & Tgl SKEP AWAL">
                                     </div>
                                     <div class="form-group">
                                       <label>No & Tgl SKEP AKHIR</label>
                                       <input type="text" value="<?php echo $tgl2; ?>" name="tgl2" class="form-control datepicker" autocomplete="off"  placeholder="No & Tgl SKEP AKHIR">
                                     </div>
                                     <div class="form-group">
                                       <label>No Tlpn Perusahaan</label>
                                       <input type="text" value="<?php echo $notel; ?>" name="notel" class="form-control" autocomplete="off"  placeholder="No Tlpn Perusahaan">
                                     </div>
                                     <div class="form-group">
                                       <label>No Fax Perusahaan</label>
                                       <input type="text" value="<?php echo $fax; ?>" name="fax" class="form-control" autocomplete="off"  placeholder="No Fax Perusahaan">
                                     </div>
                                     <div class="form-group">
                                       <label>Email Perusahaan</label>
                                       <input type="text" value="<?php echo $email_peru; ?>" name="email_peru" class="form-control" autocomplete="off"  placeholder="Email Perusahaan">
                                     </div>
                                     <div class="form-group">
                                       <label>Foto Perusahaan</label>
                                       <input type="file" name="upload">
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