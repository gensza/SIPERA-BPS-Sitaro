<!-- Modal Edit Pengguna -->
<div class="modal fade" id="edituser<?php echo $row['id']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Edit</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
                <div class="modal-body">
				<?php
          		include "../config_sqli.php";
					$edit12=mysqli_query($konek,"SELECT * FROM `i_us3r` WHERE `id`='".$row['id']."'");
					$eroww=mysqli_fetch_array($edit12);
				?>
				<div class="container-fluid">
				<form method="POST" action="pengguna-edit.php" enctype="multipart/form-data">
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
                        <label style="position:relative; top:7px;">NAMA LENGKAP</label>
						</div>
						<div class="col-lg-8">
							<input type="text" name="nama_lgkp" class="form-control" value="<?php echo $eroww['nama_lgkp']; ?>">
						</div>
					</div>
                    <div style="height:10px;"></div>
                    <div class="row">
						<div class="col-lg-4">
                        <label style="position:relative; top:7px;">USERNAME</label>
						</div>
						<div class="col-lg-8">
							<input type="text" name="username" class="form-control" value="<?php echo $eroww['username']; ?>">
						</div>
					</div>
                    <div style="height:10px;"></div>
                    <div class="row">
						<div class="col-lg-4">
                        <label style="position:relative; top:7px;">PASSWORD</label>
						</div>
						<div class="col-lg-8">
							<input type="text" name="password" class="form-control" value="<?php echo $eroww['password']; ?>">
						</div>
					</div>
                    <div style="height:10px;"></div>
                    <div class="row">
						<div class="col-lg-4">
                        <label style="position:relative; top:7px;">NIP</label>
						</div>
						<div class="col-lg-8">
							<input type="text" name="nip" class="form-control" value="<?php echo $eroww['nip']; ?>">
						</div>
					</div>
                    <div style="height:10px;"></div>
                    <div class="row">
						<div class="col-lg-4">
                        <label style="position:relative; top:7px;">Jabatan</label>
						</div>
						<div class="col-lg-8">
							<input type="text" name="jabatan" class="form-control" value="<?php echo $eroww['jabatan']; ?>">
						</div>
					</div>
                    <div style="height:10px;"></div>
                    <div class="row">
						<div class="col-lg-4">
                        <label style="position:relative; top:7px;">Hak Akses</label>
						</div>
						<div class="col-lg-8">
							<input type="number" name="flag" class="form-control" min="1" max="2" value="<?php echo $eroww['flag']; ?>">
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
            				<input type="file" class="form-control" accept="image/*" name="photo">
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
