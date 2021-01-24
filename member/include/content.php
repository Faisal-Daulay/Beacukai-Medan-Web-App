
						<table id="example" class="stripe row-border order-column nowrap" width="100%" cellspacing="0">
					        <thead>
					            <tr>
					            	<th>No</th>
									<th>Aksi</th>
					            	<th>Tanggal</th>
					            	<th>Nama Berkas</th>
					            	<th>Permohonan</th>
					                <th>Uraian</th>
					                <th>Invoice</th>
					                <th>Katalog</th>
					                <th>Status Data</th>
					                <th>Alasan</th>
					            </tr>
					        </thead>
					        <tbody>
					         <?php
					         	$no=1;
								include '../../../admin/include/koneksi.php';
								$sql="SELECT * FROM newdata where id_user='$id_user' order by tgl";
								$query = mysqli_query($db,$sql);
								while ($ambil = mysqli_fetch_array($query)) {
								$id  = $ambil['id_newdata'];
								$nama_berkas = $ambil['nama_berkas'];
								$permohonan = $ambil['permohonan'];
								$uraian = $ambil['uraian'];
								$tgl = $ambil['tgl'];
								$invoice   = $ambil['invoice'];
								$katalog = $ambil['katalog'];
								$reject = $ambil['reject'];
								$status = $ambil['status_data'];
                             ?>
					            <tr>
					            	<td><?php echo $no++; ?></td>
									<td>
										<a href="?hal=newdata/newdata.php&id=<?php echo $id; ?>" class="btn btn-primary">Edit</a>
									</td>
					            	<td><?php echo $tgl = date('d-M-Y') ; ?></td>
									<td><?php echo $nama_berkas ; ?></td>
									<td><?php echo $permohonan ; ?></td>
					                <td><?php echo $uraian ; ?></td>
					                <td><?php echo $invoice ; ?></td>
					                <td><?php echo $katalog ; ?></td>
					                <td>
										<?php 
											if($status=="approveumum")
											{
												echo "Data Sudah Diterima" ; 
											}
											elseif($status=="approvestaff")
											{
												echo "Data Sudah Diterima Staff" ;
											}
											elseif($status=="approvezone")
											{
												echo "Data Sudah Diterima Kepala Seksi" ;
											}
											elseif($status=="selesai")
											{
												echo "Data Sudah Selesai" ;
											}
											elseif($status=="rejectumum")
											{
												echo "Data Direject Umum" ;
											}
											elseif($status=="rejectstaff")
											{
												echo "Data Direject Staff" ;
											}
											elseif($status=="rejectzone")
											{
												echo "Data Direject Kepala Seksi" ;
											}
											elseif($status=="reject")
											{
												echo "Data Direject Pimpinan" ;
											}
											elseif($status=="new")
											{
												echo "New" ;
											}
										?>
									</td>
					                <td><?php echo $reject ; ?></td>
					            </tr>
					            <?php } ?>
					           
					        </tbody>
    					</table>