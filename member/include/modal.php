

		<!-- Modal -->
		<form action="?hal=upload/upload.php" method="post" enctype="multipart/form-data">
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Upload File</h4>
					</div>
			    <div class="modal-body">
			      <div class="form-group">
							<label>Nama Berkas</label>
							<input type="text" name="berkas" class="form-control myinput" autocomplete="off"  placeholder="Nama Berkas">
						</div>
						<div class="form-group">
							<label>Surat Permohonan</label>
							<input type="file" name="permohonan" class="form-control" autocomplete="off"  placeholder="permohonan">
						</div>
						<div class="form-group">
							<label>Uraian</label>
							<input type="file" name="uraian" class="form-control" autocomplete="off"  placeholder="Uraian">
						</div>
						<div class="form-group">
							<label>Invoice / Purchase Order</label>
							<input type="file" name="invoice" class="form-control" autocomplete="off"  placeholder="Invoice">
						</div>
						<div class="form-group">
							<label>Katalog</label>
							<input type="file" name="katalog" class="form-control" autocomplete="off"  placeholder="Katalog">
						</div>
					</div>
					<div class="modal-footer">
						<input type="submit" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-default" value="Save" id="js-upload-submit">
					</div>
			    </div>
			  </div>
			</div>
		</form>