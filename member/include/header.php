<?php
	include '../../../admin/include/koneksi.php';
    $sql="SELECT * FROM registration WHERE id_user ='$id_user' ";
    $query = mysqli_query($db,$sql);
    $ambil = mysqli_fetch_array($query);
    $img = $ambil['img'];
    $date = date('d-M-Y');
?>
			<div id="header">
				<div id="hleft">
					<img src="../img/logo.png" alt="" style="margin: 3px 10px 10px 25px;">
					<div class="title" style="text-transform: capitalize; color: white;">
						<h4 class="top-judul">
							Kantor Pengawasan dan Pelayanan Bea dan Cukai<br/>
							<small style="color: white;">Tipe Madya Pabean Medan</small><br/>
						</h4>
						<strong style="margin-top: 10px; color: black; text-shadow: 0px 0px 2px white;">
							Welcome <?php echo $username; ?> / <?php echo $date; ?>	
						</strong>
					</div>
				</div>
				<div id="hright">
					<div class="form">
						<div class="admin">
		          <div class="dropdown">
							  <div id="avatar">
    							<img src="../admin/images/<?php echo $img; ?>" alt="">
							  </div>
								<div id="profil">
									<a href ="?hal=profil/profil.php&id=<?php echo $id_user; ?>" class="btn btn-success">Edit Profile</a>
								</div>
							  <a href="../logout.php" class="btn btn-success" id="logout">Logout</a>		
							</div>
						</div>
					</div>
				</div>
			</div>