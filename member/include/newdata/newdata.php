                               <h3 style="margin: 0px; margin: 5px 5px 5px 0px; text-align: center;">Edit New Data</h3>
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
                                    $invoice = $ambil['invoice'];
                                    $katalog = $ambil['katalog'];
                                    $reject = $ambil['reject'];
                                    $status_data = $ambil['status_data'];
                                ?>
								<form id="myform" action="?hal=newdata/newdata_pro.php" method="post" enctype="multipart/form-data">
								<input type="hidden" name="id" value="<?php echo $id_n; ?>">
									<div class="form-group">
										<label>Nama Perusahaan</label>
										<input type="text" name="naper" class="form-control myinput" autocomplete="off" value="<?php echo $naper; ?>">
									</div><!-- /.form-group -->
									<div class="form-group">
										<label>Nama Berkas</label>
										<input type="text" value="<?php echo $nama_berkas; ?>" name="" class="form-control myinput" autocomplete="off"  >
									</div>
									<div class="form-group">
										<label>Uraian</label>
										<input type="file" name="permohonan" class="form-control" autocomplete="off"  placeholder="permohonan"><br>
										<a href="../member/images/<?php echo $uraian; ?>"><?php echo $uraian; ?></a>
									</div>
									<div class="form-group">
										<label>Invoice / Purchase Order</label>
										<input type="file" name="uraian" class="form-control" autocomplete="off"  placeholder="Uraian"><br>
										<a href="../member/images/<?php echo $invoice; ?>"><?php echo $invoice; ?></a>
									</div>
									<div class="form-group">
										<label>Katalog</label>
										<input type="file" name="invoice" class="form-control" autocomplete="off"  placeholder="Invoice"><br>
										<a href="../member/images/<?php echo $katalog; ?>"><?php echo $katalog; ?></a>
									</div>
									<input id="simpan" type="submit" value="Kirim" class="btn btn-primary">
								</form>
                                <?php } ?>