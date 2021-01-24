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
                        <a href="#revenue-chart" data-toggle="tab">Data Berkas</a>
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
                                  $sql="SELECT * FROM user u, registration r, newdata n where u.id_user=r.id_user and u.id_user=n.id_user and n.id_newdata ='$id'";
                                  $query = mysqli_query($db,$sql);
                                  while ($ambil = mysqli_fetch_array($query)) {
                                    $id_n = $ambil['id_newdata'];
                                    $nama_berkas = $ambil['nama_berkas'];
                                    $naper = $ambil['nama_perusahaan'];
                                    $uraian = $ambil['uraian'];
                                    $nota_dinas = $ambil['nota_dinas'];
                                    $invoice = $ambil['invoice'];
                                    $katalog = $ambil['katalog'];
                                    $reject = $ambil['reject'];
                                    $permohonan=$ambil['permohonan'];
                                    $status_data = $ambil['status_data'];
                                ?>
                                <div class="col-md-5">
                                  <form id="myform" action="?page=newdata/proses.php" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?php echo $id_n; ?>">
                                     <div class="form-group">
                                       <label>Nama Perusahaan</label>
                                       <input type="text" name="naper" class="form-control" autocomplete="off" value="<?php echo $naper; ?>">
                                     </div><!-- /.form-group -->
                                     <div class="form-group">
                                       <label>Nama Berkas</label>
                                       <input type="text" value="<?php echo $nama_berkas; ?>" name="" class="form-control" autocomplete="off"  >
                                     </div>
                                     <div class="form-group">
                                       <label>Permohonan</label><br>
                                       <a href="../member/images/<?php echo $permohonan; ?>"><?php echo $permohonan; ?></a>
                                     </div>
                                     <div class="form-group">
                                       <label>Uraian</label><br>
                                       <a href="../member/images/<?php echo $uraian; ?>"><?php echo $uraian; ?></a>
                                     </div>
                                      <div class="form-group">
                                       <label>Invoice</label><br>
                                       <a href="../member/images/<?php echo $invoice; ?>"><?php echo $invoice; ?></a>
                                     </div>
                                      <div class="form-group">
                                       <label>Katalog</label><br>
                                       <a href="../member/images/<?php echo $katalog; ?>"><?php echo $katalog; ?></a>
                                     </div>
                                      <div class="form-group">
                                       <label>Nota Dinas</label>
                                       <input type="text" value="<?php echo $nota_dinas; ?>" name="" class="form-control" autocomplete="off"  >
                                     </div>
                                      <div class="form-group">
                                       <label>Status</label>
                                       <select name="stats" class="form-control" id="pilih">
                                         <option value="approvestaff">Approve</option>
                                         <option value="rejectstaff">Reject</option>
                                       </select>
                                     </div>
                                     <div class="form-group" id="textarea" on>
                                        
                                     </div>
                                     <input id="simpan" type="submit" value="Kirim" class="btn btn-primary">
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
