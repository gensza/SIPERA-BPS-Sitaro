<!-- Modal Edit Barang -->
<div class="modal fade" id="rejectPengajuan<?php echo $row['id']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">REJECTED</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
                <div class="modal-body">
				<?php
          		include "../config_sqli.php";
					$edit12=mysqli_query($konek,"SELECT * FROM `pengajuan` WHERE `id`='".$row['id']."'");
					$eroww=mysqli_fetch_array($edit12);
				?>
				<div class="container-fluid">
				<form method="POST" action="pengajuan-rejected.php" enctype="multipart/form-data">
					<div class="row">
						<div class="col-lg-4">
                        <label style="position:relative; top:7px;">NAMA BARANG</label>
						</div>
						<div class="col-lg-8">
							<input type="text" name="id" hidden class="form-control" value="<?php echo $eroww['id']; ?>">
							<input type="text" name="id" readonly class="form-control" value="<?php echo $eroww['nama_barang']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
                        <label style="position:relative; top:7px;" for="alasan">ALASAN PENOLAKAN</label>
						</div>
						<div class="col-lg-8">
						<textarea id="alasan" name="status_pengajuan" class="form-control" rows="4">Silahkan masukkan alasan penolakan anda...</textarea>
						</div>
					</div>
					
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"> Batal</button>
                    <button type="submit" class="btn btn-success"> Simpan</button>
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->