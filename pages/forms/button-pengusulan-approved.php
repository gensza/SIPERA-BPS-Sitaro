<!-- Modal  Tolak Pengusulan -->
<div class="modal fade" id="rejectPengusulan<?php echo $row['id']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">REJECTED</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
                <div class="modal-body">
				<?php
          		include "../config_sqli.php";
					$edit12=mysqli_query($konek,"SELECT * FROM `pengusulan` WHERE `id`='".$row['id']."'");
					$eroww=mysqli_fetch_array($edit12);
				?>
				<div class="container-fluid">
				
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
						<textarea id="alasan" name="alasan" class="form-control" rows="4">Silahkan masukkan alasan penolakan anda...</textarea>
						</div>
					</div>
					
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"> Batal</button>
                    <a href="pengusulan-rejected.php?id=<?php echo $eroww['id']; ?>&&alasan=<?php echo $eroww['alasan']; ?>" class="btn btn-success"> Simpan</a>
                </div>
            </div>
        </div>
    </div>
<!-- /.modal -->
<!-- Approved Pengusulan-->
<div class="modal fade" id="setujuiPengusulan<?php echo $row['id']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Approved</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
                <div class="modal-body">
				<?php
          include "../config_sqli.php";
					$delete=mysqli_query($konek,"SELECT * FROM pengusulan WHERE id='".$row['id']."'");
					$drow=mysqli_fetch_array($delete);
				?>

				<div class="container-fluid">
                Apakah anda yakin <b>"SETUJUI PENGUSULAN"</b> 
				<p></p>NAMA BARANG : <b><?php echo $drow['nama_barang']; ?> ??</b>
				</div> 
				</divss>
                <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal"> Batal</button>
                    <a href="pengusulan-approved.php?id=<?php echo $drow['id']; ?>" class="btn btn-success"> Simpan</a>
				</div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

