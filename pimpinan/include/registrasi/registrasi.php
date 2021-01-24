
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
                        <a href="#revenue-chart" data-toggle="tab">Data Registrasi</a>
                      </li>
                      <li>
                        <a href="#sales-chart" data-toggle="tab">Tambah Data Registrasi</a>
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
                                      <th>No</th>
                                      <th>Nama Perusahaan</th>
                                      <th>NPWP</th>
                                      <th>Nama Penanggung Jawab</th>
                                      <th>Alamat Penanggung Jawab</th>
                                      <th>Alamat</th>
                                      <th>Email</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                  include '../admin/include/koneksi.php';
                                      $sql="SELECT * FROM registration";
                                      $query = mysqli_query($db,$sql);
                                      $no = 1;
                                      while ($ambil = mysqli_fetch_array($query)) {
                                        $id = $ambil['id_reg'];
                                        $nama = $ambil['nama_perusahaan'];
                                        $npwp = $ambil['npwp'];
                                        $alamat = $ambil['alamat'];
                                        $email = $ambil['email'];
                                        $napen =$ambil['nama_penjawab'];
                                        $alapen =$ambil['alamat_penjawab'];
                                        $pajak =$ambil['no_pajak'];
                                    ?>
                                    <tr>
                                      <td><?php echo $no++ ; ?></td>
                                      <td><?php echo $nama ; ?></td>
                                      <td><?php echo $npwp ; ?></td>
                                      <td><?php echo $napen ; ?></td>
                                      <td><?php echo $alapen ; ?></td>
                                      <td><?php echo $alamat ; ?></td>
                                      <td><?php echo $email ; ?></td>
                                      <td>
                                        <a class="btn btn-primary" href="?page=registrasi/regis_edit.php&id=<?php echo $id; ?>">Edit</a>

                                        <a class="btn btn-primary" href="?page=registrasi/regis_del.php&id=<?php echo $id; ?>">Delete</a>
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
                                    <form id="myform" action="?p=registrasi/proses.php" method="post" enctype="multipart/form-data">
                                       <div class="form-group">
                                         <label>Nama Perusahaan</label>
                                         <input type="text" name="naper" class="form-control" autocomplete="off"  placeholder="Nama Perusahaan" autofocus="">
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
                                         <input type="text" name="email" required="" class="form-control" id="datepicker2" placeholder="Email">
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
                                         <input type="text" name="user" class="form-control" autocomplete="off"  placeholder="Username">
                                       </div>
                                       <div class="form-group">
                                         <label>Password</label>
                                         <input type="password" name="pass" class="form-control" autocomplete="off"  placeholder="Password" id="pw1" on>
                                       </div>
                                       <div class="form-group">
                                         <label>Confirm Password</label>
                                         <input type="password" name="conpass" class="form-control" autocomplete="off"  placeholder="Confirm Password" id="pw2" onchange="cekPass()">
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
                    </div>
                  </div><!-- /.nav-tabs-custom -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->