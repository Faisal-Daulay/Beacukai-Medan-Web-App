                    <?php
                       include 'include/slider.php';
                       include 'admin/include/koneksi.php';
                       $sql = mysqli_query($db,"SELECT * FROM setting");
                       $no=1;
                       $ambil = mysqli_fetch_array($sql);
	                      $id = $ambil['id_setting'];
	                      $judul1 = $ambil['judul'];
	                      $img1 = $ambil['logo'];
	                      $isi1 = $ambil['top_isi'];
                    ?>
					<div id="content1">
						<h3 class="judul">Apa saja layanan yang kami sediakan ?</h3>
						<hr class="bortom">
						<div class="container">
							<div class="col-md-4">
								<h4>Impor</h4>
								<p>
									Kegiatan memasukan barang ke dalam Daerah Pabean
								</p>
							</div>
							<div class="col-md-4">
								<h4>Kiriman Paket</h4>
								<p>
									Barang kiriman dengan nilai pabean paling banyak FOB USD 100,00 (seratus US Dollar) untuk setiap orang per kiriman....
								</p>
							</div>
							<div class="col-md-4">
								<h4>Ekspor</h4>
								<p>
									Ekspor adalah kegitan mengeluarkan barang keluar daerah pabean sesuai dengan UU Kepabeanan
								</p>
							</div>
						</div>
						<div class="container box-fasilitas">
							<div class="col-md-4">
								<h4>Aeo</h4>
								<p>
									Authorized Economic Operator
								</p>
							</div>
							<div class="col-md-4">
								<h4>Cukai</h4>
								<p>
									Cukai adalah pungutan negara yang dikenakan terhadap Barang Kena Cukai
								</p>
							</div>
							<div class="col-md-4">
								<h4>Fasilitas</h4>
								<p>
									fasilitas yang disediakan beacukai adalah ...
								</p>
							</div>
						</div>
						<hr>
					</div>

					<h3 class="judul">Berita Bea Cukai</h3>
					<hr class="bortom">
                    <?php
                       include 'admin/include/koneksi.php';
					   	$limit=6;//Untuk menampilkan jumlah data dari database
						$hal=$_GET['hal'];//Jumlah halaman di mulai dari 1
						if (!isset($hal)) {
							$hal=1;
						}
						$start=($hal-1)*$limit;
						$sql1 = mysqli_query($db,"SELECT * FROM isi ORDER BY id_isi DESC LIMIT $start,$limit");
						$no=1;
						$jmlhdata=mysqli_num_rows(mysqli_query($db,"SELECT * FROM isi"));
						$jmlhhal=ceil($jmlhdata / $limit);
						if ($jmlhhal < 1) {
							$jmlhhal=1;
						}
                       	while ($ambil1 = mysqli_fetch_array($sql1)) {
                          $id = $ambil1['id_isi']; 
                          $judul = $ambil1['judul'];
                          $img = $ambil1['img'];
                          $isi = $ambil1['isi'];
                    ?>
					<div id="cc_middle">
						<div id="cc_content">
							<div class="col-md-4" id="box-isi">
								<h4 class="title"><a href="?p=detail.php&id=<?php echo $id; ?>"><?php echo $judul; ?></a></h4>
								<div class="img-cc">
									<img src="admin/images/content/<?php echo $img; ?>">
								</div>
								<div class="cc-isi" style="text-align: justify;">
									<p>
										<?php echo substr($isi,0,250); ?>
									</p>
									<a href="?p=detail.php&id=<?php echo $id; ?>" class="btn btn-warning">Readmore</a>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
					<div class="col-md-12">
						<?php

							echo "<a class='btn btn-success mypage'>Page $hal Of $jmlhhal</a>";

							$satu=1;
							if ($satu < $hal) {
								echo "<a class='btn btn-primary mypage' href='?p=content.php&hal=$satu'>First</a>";
							}

							$prev=$hal-1;
							if ($hal-1) {
								echo "<a class='btn btn-primary mypage' href='?p=content.php&hal=$prev'>Previous</a>";
							}

							for ($i=1; $i <= $jmlhhal ; $i++) {
								echo "<a class='btn btn-primary mypage' href='?p=content.php&hal=$i'>$i</a>";
							}

							$next=$hal+1;
							if ($hal < $jmlhhal) {
								echo "<a class='btn btn-primary mypage' href='?p=content.php&hal=$next'>Next</a>";
							}

							$last=$jmlhhal;
							if ($jmlhhal > $hal) {
								echo "<a class='btn btn-primary mypage' href='?p=content&hal=$last'>Last</a>";
							}
						?>
					</div>
					