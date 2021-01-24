
              <div class="box box-success box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">
                    <i class="fa fa-inbox"></i> New Data
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
                        <a href="#revenue-chart" data-toggle="tab">New Data</a>
                      </li>
                     
                    </ul>
                    <div class="tab-content no-padding">
                      <!-- Morris chart - Sales -->
                      <div class="chart tab-pane active" id="revenue-chart" style="position: relative;">
                        <section class="content">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="box-body">
                                <table id="example1" class="table table-bordered table-hover">
                                  <thead>
                                    <tr>
                                    <th>Tanggal Berkas</th>
                                      <th>Nama Perusahaan</th>
                                      <th>NPWP</th>
                                      <th>Status</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                  include '../admin/include/koneksi.php';
                                      $sql="SELECT * FROM user u, registration r, newdata n where u.id_user=r.id_user and u.id_user=n.id_user and n.status_data='approve'  order by n.tgl";
                                      $query = mysqli_query($db,$sql);
                                      while ($ambil = mysqli_fetch_array($query)) {
                                        $id = $ambil['id_newdata'];
                                        $tgl = $ambil['tgl'];
                                        $nama = $ambil['nama_perusahaan'];
                                        $npwp = $ambil['npwp'];
                                        $status_data = $ambil['status_data'];
                                    ?>
                                    <tr>
                                    <td><?php echo $tgl ; ?></td>
                                      <td><?php echo $nama ; ?></td>
                                      <td><?php echo $npwp ; ?></td>
                                      <td><?php echo $status_data ; ?></td>
                                      <td>
                                      <a class="btn btn-primary" href="?page=newdata/newdata_lihat.php&id=<?php echo $id; ?>">Lihat</a>
                                       

                                        <a class="btn btn-primary" href="?page=newdata/newdata_del.php&id=<?php echo $id; ?>">Delete</a>
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
                                  <form id="myform" action="?page=registrasi/proses.php" method="post" enctype="multipart/form-data">
                                     <div class="form-group">
                                       <label>Nama Perusahaan</label>
                                       <input type="text" name="naper" class="form-control" autocomplete="off"  placeholder="Nama Perusahaan">
                                     </div><!-- /.form-group -->
                                     <div class="form-group">
                                       <label>NPWP</label>
                                       <input type="text" name="npwp" class="form-control" autocomplete="off"  placeholder="NPWP">
                                     </div>
                                     <div class="form-group">
                                       <label>Alamat</label>
                                       <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                                     </div>
                                     <div class="form-group">
                                       <label>SKEP.KABER AWAL</label>
                                       <input type="text" name="skep1" class="form-control" autocomplete="off"  placeholder="SKEP.KABER AWAL">
                                     </div>
                                     <div class="form-group">
                                       <label>Email</label>
                                       <input type="text" name="email" required="" class="form-control" id="datepicker2" placeholder="Email">
                                     </div>
                                     <div class="form-group">
                                       <label>SKEP AKHIR</label>
                                       <input type="text" name="skep2" required="" class="form-control" id="" placeholder="SKEP AKHIR">
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
                                       <label>No Wajib Pajak</label>
                                       <input type="text" name="pajak" class="form-control" autocomplete="off"  placeholder="No Wajib Pajak">
                                     </div>
                                     <div class="form-group">
                                       <label>No & Tgl SKEP AWAL</label>
                                       <input type="text" name="tgl1" class="form-control datepicker" autocomplete="off"  placeholder="No & Tgl SKEP AWAL">
                                     </div>
                                     <div class="form-group">
                                       <label>No & Tgl SKEP AKHIR</label>
                                       <input type="text" name="tgl2" class="form-control datepicker" autocomplete="off"  placeholder="No & Tgl SKEP AKHIR">
                                     </div>
                                     <div class="form-group">
                                       <label>No Tlpn Perusahaan</label>
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