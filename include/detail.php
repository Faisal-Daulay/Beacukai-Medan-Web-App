            <?php
               include 'admin/include/koneksi.php';
               $id = $_REQUEST['id'];
               $sql = mysqli_query($db,"SELECT * FROM isi WHERE id_isi='$id'  ");
               $no=1;
               $ambil = mysqli_fetch_array($sql);
                  $id = $ambil['id_isi'];
                  $judul = $ambil['judul'];
                  $img = $ambil['img'];
                  $isi = $ambil['isi'];
            ?>
			<div id="row">
				<div class="container">
					<div id="cc_bottom">
						<div class="col-md-12">
							<h4 class="title" style="line-height: 1.8; color: orange;"><?php echo $judul; ?></h4>
							<img src="admin/images/content/<?php echo $img; ?>" 
								style="width: 60%; 
										margin: 10px 0px 20px 220px;
										border: 15px solid white;
										box-shadow: 0px 0px 5px black;
							">
							<div class="cc-isi1" style="text-align: justify; font-size: 14px;">
								<p style="line-height: 1.8; font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;">
									<?php 
										echo nl2br(htmlspecialchars($isi, ENT_QUOTES)); 
									?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php include 'include/cont_bottom.php'; ?>