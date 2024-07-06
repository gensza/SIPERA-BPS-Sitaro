
<!-- Delete User-->
<div class="modal fade" id="deluser<?php echo $row['id']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Delete</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
                <div class="modal-body">
				<?php
          include "../config_sqli.php";
					$delete=mysqli_query($konek,"SELECT * FROM `i_us3r` WHERE id='".$row['id']."'");
					$drow=mysqli_fetch_array($delete);
				?>

				<div class="container-fluid">
                Apakah anda yakin <b>"HAPUS"</b> 
				<p></p>NAMA PENGGUNA : <b><?php echo $drow['nama_lgkp']; ?> ??</b>
				</div> 
				</divss>
                <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal"> Batal</button>
                    <a href="del-pengguna.php?id=<?php echo $drow['id']; ?>" class="btn btn-success"> Simpan</a>
				</div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->


