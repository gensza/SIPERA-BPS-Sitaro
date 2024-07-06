<!-- Modal Kelola -->
<div class="modal fade" id="kelola<?php echo $row['id']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Kelola</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
                <div class="modal-body">
				<?php
          include "../config_sqli.php";
					$kelola=mysqli_query($konek,"SELECT * FROM barang WHERE id='".$row['id']."'");
					$erow=mysqli_fetch_array($kelola);
				?>
				<div class="container-fluid">
				<form method="POST" action="aksi-kelola.php" enctype="multipart/form-data">
					<div class="row">
						<div class="col-lg-4">
                        <label style="position:relative; top:7px;">ID</label>
						</div>
						<div class="col-lg-8">
							<input type="text" name="id" readonly class="form-control" value="<?php echo $erow['id']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
                        <label style="position:relative; top:7px;">NAMA BARANG</label>
						</div>
						<div class="col-lg-8">
							<input type="text" name="nama_barang" readonly class="form-control" value="<?php echo $erow['nama_barang']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
                        <label style="position:relative; top:7px;">SATUAN</label>
						</div>
						<div class="col-lg-8">
							<input type="text" name="satuan_barang" readonly class="form-control" value="<?php echo $erow['satuan_barang']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
                        <label style="position:relative; top:7px;">STOK</label>
						</div>
						<div class="col-lg-8">
							<input type="text" name="stok_barang" readonly class="form-control" value="<?php echo $erow['stok_barang']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
                        <label style="position:relative; top:7px;">KETERANGAN</label>
						</div>
						<div class="col-lg-8">
            			<select style="cursor:pointer" required tabindex="1" name="keterangan" class="form-control">
													<option disabled selected="selected" value="0">== PILIHAN ==</option>
													<option value="1">1 - MASUK</option>
													<option value="2">2 - KELUAR</option>
						</select>
						</div>
					</div>
          			<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
                        <label style="position:relative; top:7px;">JUMLAH</label>
						</div>
						<div class="col-lg-8">
							<input type="number" name="j_masuk_keluar" class="form-control" value="0" min="1" max="250">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label style="position:relative; top:7px;">PHOTO</label>
							<br>
						</div>
						<div class="col-lg-8">
            			<input type="file" class="form-control" capture accept="image/*" name="photo_barang" required>
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

<!-- Modal See Pic -->
<div class="modal fade" id="see<?php echo $row['id']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Photo Barang [ <?php echo $erow['nama_barang']; ?> ]</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
                <div class="modal-body">
				<?php
          include "../config_sqli.php";
					$see=mysqli_query($konek,"SELECT * FROM barang WHERE id='".$row['id']."'");
					$erow2=mysqli_fetch_array($see);
				?>
				<div class="container-fluid">
				
					<div class="row">
						<div class="col-lg-12">
							<img src="../path/<?php echo $erow2['photo_barang']; ?>" class="img-responsive; img-rounded;" width="100%" height="500" />
						</div>
					</div>
					
                </div> 
				</div>
                
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Delete Barang-->
<div class="modal fade" id="delbarang<?php echo $row['id']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Delete</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
                <div class="modal-body">
				<?php
          include "../config_sqli.php";
					$delete=mysqli_query($konek,"SELECT * FROM barang WHERE id='".$row['id']."'");
					$drow=mysqli_fetch_array($delete);
				?>

				<div class="container-fluid">
                Apakah anda yakin <b>"HAPUS"</b> 
				<p></p>NAMA BARANG : <b><?php echo $drow['nama_barang']; ?> ??</b>
				</div> 
				</divss>
                <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal"> Batal</button>
                    <a href="del-barang.php?id=<?php echo $drow['id']; ?>" class="btn btn-success"> Simpan</a>
				</div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->


<!-- Modal See History -->
<div class="modal fade" id="see0<?php echo $row['id']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">History Barang</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
                <div class="modal-body">
				<?php
          include "../config_sqli.php";
					$see00=mysqli_query($konek,"SELECT * FROM `history` WHERE `id` LIKE '".$row['id']."'");
					$erow00=mysqli_fetch_array($see00);
				?>
				<div class="container-fluid">
				<form method="#" action="#" enctype="multipart/form-data">
					<div class="row">
						<div class="col-lg-12">
							<img src="../path/<?php echo $erow00['photo_barang']; ?>" class="img-responsive; img-rounded;" width="100%" height="500" />
						</div>
					</div>
					
                </div> 
				</div>
                </form>
            </div>
        </div>
    </div>
<!-- /.modal -->
<!-- Delete History-->
<div class="modal fade" id="delhistory<?php echo $row['id']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Delete</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
                <div class="modal-body">
				<?php
          include "../config_sqli.php";
					$delete00=mysqli_query($konek,"SELECT * FROM history WHERE id='".$row['id']."'");
					$drow00=mysqli_fetch_array($delete00);
				?>

				<div class="container-fluid">
                Apakah anda yakin <b>"HAPUS HISTORY"</b> 
				<p></p>NAMA BARANG : <b><?php echo $drow00['nama_barang']; ?></b>
				<p></p>WAKTU : <b><?php echo $drow00['time']; ?> ??</b>
				</div> 
				</divss>
                <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal"> Batal</button>
                    <a href="del-history.php?id=<?php echo $drow00['id']; ?>" class="btn btn-success"> Simpan</a>
				</div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->
