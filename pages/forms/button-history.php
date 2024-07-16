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
							<img src="../path/<?php echo $erow00['photo_barang']; ?>" class="img-responsive; img-rounded;" width="100%" height="100%" />
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
