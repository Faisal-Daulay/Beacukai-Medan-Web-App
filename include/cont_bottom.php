            <hr>
            <h2 style="margin: 0px 0px 0px 30px;">Berita Terkait</h2>
            <?php
               include 'admin/include/koneksi.php';
               $sql = mysqli_query($db,"SELECT * FROM isi LIMIT 0,2");
               $no=1;
               while ($ambil = mysqli_fetch_array($sql)) {
                  $id = $ambil['id_isi'];
                  $judul = $ambil['judul'];
                  $img = $ambil['img'];
                  $isi = $ambil['isi'];
            ?>
			<div id="row">
				<div class="container">
					<div id="cc_bottom">
						<div class="col-md-12">
							<h4 class="title"><a href="?p=detail.php&id=<?php echo $id; ?>"><?php echo $judul; ?></a></h4>
							<div class="cc-isi1">
								<p>
									<?php echo substr($isi,0,250); ?>
								</p>
								<a href="?p=detail.php&id=<?php echo $id; ?>" class="btn btn-primary">Readmore</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>