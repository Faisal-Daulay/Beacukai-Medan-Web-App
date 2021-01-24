
						<table id="example" class="stripe row-border order-column nowrap" width="100%" cellspacing="0">
							<a href="?hal=produk/daftarproduk.php" class="btn btn-success" style="margin-bottom: 20px;">Tambah Produk</a>	
					        <thead>
					            <tr>
					            	<th>No</th>
					                <th>Uraian</th>
					                <th>Jumlah</th>
					                <th>Fungsi</th>
					                <th>Country</th>
					                <th>No.Po</th>
					                <th>Kondisi Barang</th>
					                <th>Nama Barang</th>
					                <th>Jumlah Terpasang</th>
					            </tr>
					        </thead>
					        <tbody>
					         <?php
					         	$id="1";
                                      include 'include/koneksi.php';
                                      $sql="SELECT * FROM produk";
                                      $query = mysqli_query($db,$sql);
                                      while ($ambil = mysqli_fetch_array($query)) {
										$id  = $ambil['id_produk'];
										$uraian = $ambil['uraian'];
										$jumlah   = $ambil['jumlah'];
										$fungsi = $ambil['fungsi'];
										$country  = $ambil['country'];
										$nopo  = $ambil['nopo'];
										$barang  = $ambil['barang'];
										$nabar  = $ambil['nabar'];
										$jlhter = $ambil['jlhter'];
                                    ?>
					            <tr>
					            	<td><?php echo $id++; ?></td>
					                <th><?php echo $uraian ; ?></th>
					                <th><?php echo $jumlah ; ?></th>
					                <th><?php echo $fungsi ; ?></th>
					                <th><?php echo $country ; ?></th>
					                <th><?php echo $nopo ; ?></th>
					                <th><?php echo $barang ; ?></th>
					                <th><?php echo $nabar ; ?></th>
					                <th><?php echo $jlhter ; ?></th>
					            </tr>
					            <?php } ?>
					           
					        </tbody>
    					</table>