<!-- Modal Edit Barang -->
<div class="modal fade" id="editbarang<?php echo $row['id']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Edit</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
                <div class="modal-body">
				<?php
          		include "../config_sqli.php";
					$edit12=mysqli_query($konek,"SELECT * FROM `barang` WHERE `id`='".$row['id']."'");
					$eroww=mysqli_fetch_array($edit12);
				?>
				<div class="container-fluid">
				<form method="POST" action="aksi-edit.php" enctype="multipart/form-data">
					<div class="row">
						<div class="col-lg-4">
                        <label style="position:relative; top:7px;">ID</label>
						</div>
						<div class="col-lg-8">
							<input type="text" name="id" readonly class="form-control" value="<?php echo $eroww['id']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
                        <label style="position:relative; top:7px;">NAMA BARANG</label>
						</div>
						<div class="col-lg-8">
							<input type="text" name="nama_barang" class="form-control" value="<?php echo $eroww['nama_barang']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
                        <label style="position:relative; top:7px;">SATUAN</label>
						</div>
						<div class="col-lg-8">
						<select required name="satuan_barang" style="cursor:pointer" class="form-control">
						<?php
						include "../config_sqli.php";
						$query30 = mysqli_query($konek, "SELECT * FROM `satuan` ORDER BY `id` ASC");
						while ($rowxz = mysqli_fetch_array($query30)) {
						?>
						<option value="<?=$rowxz['nama_satuan'];?>"><?php echo $rowxz['nama_satuan'];?></option>
						<?php
						}
						?>
						</select>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
                        <label style="position:relative; top:7px;">STOK</label>
						</div>
						<div class="col-lg-8">
							<input type="number" name="stok_barang" class="form-control" value="<?php echo $eroww['stok_barang']; ?>">
						</div>
					</div>
          			<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label style="position:relative; top:7px;">PHOTO</label>
							<br>
						</div>
						<div class="col-lg-8">
						<input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
            				<input type="file" class="form-control" accept="image/*" name="photo_barang">
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