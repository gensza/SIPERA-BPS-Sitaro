<!-- Reset User-->
<div class="modal fade" id="resetuser<?php echo $row['id']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Reset</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
                <div class="modal-body">
				<?php
          include "../config_sqli.php";
					$reset=mysqli_query($konek,"SELECT * FROM `i_us3r` WHERE id='".$row['id']."'");
					$drow9=mysqli_fetch_array($reset);
				?>

				<div class="container-fluid">
                Apakah anda yakin <b>"RESET PASSWORD"</b> menjadi <b>bps7103</b> 
				<p></p>NAMA PENGGUNA : <b><?php echo $drow9['nama_lgkp']; ?> ??</b>
				</div> 
				</div>
                <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal"> Batal</button>
                    <a href="reset-pengguna.php?id=<?php echo $drow9['id']; ?>" class="btn btn-success"> Simpan</a>
				</div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->
