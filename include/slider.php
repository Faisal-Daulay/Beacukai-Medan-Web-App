
					<div id="slider" style="margin-top: 20px;">
					    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:600px;height:300px;overflow:hidden;visibility:hidden;">
					        <!-- Loading Screen -->
					        <div data-u="loading" style="position:absolute;top:0px;left:0px;background:url('img/loading.gif') no-repeat 50% 50%;background-color:rgba(0, 0, 0, 0.7);"></div>
					        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:600px;height:300px;overflow:hidden;">

			                    <?php
			                       include 'admin/include/koneksi.php';
			                       $sql = mysqli_query($db,"SELECT * FROM isi ORDER BY id_isi DESC LIMIT 0,5 ");
			                       $no=1;
			                       while ($ambil = mysqli_fetch_array($sql)) {
			                          $id = $ambil['id_isi'];
			                          $img = $ambil['img'];
			                    ?>
						            <div>
										<a href="?p=detail.php&id=<?php echo $id; ?>">
						                	<img data-u="image" src="admin/images/content/<?php echo $img; ?>" />
										</a>
						            </div>
						            <a data-u="any" href="https://www.jssor.com" style="display: none;"><?php echo $slider; ?></a>
								<?php } ?>
					        </div>
					        <!-- Bullet Navigator -->
					        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
					            <!-- bullet navigator item prototype -->
					            <div data-u="prototype" style="width:16px;height:16px;"></div>
					        </div>
					        <!-- Arrow Navigator -->
					        <span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
					        <span data-u="arrowright" class="jssora12r" style="top:0px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>
					    </div>
					</div>