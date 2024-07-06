
<!-- View Profil-->
<div class="modal fade" id="profil<?php echo $row['id']; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Profil</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
                <div class="modal-body">
				<?php
          include "../config_sqli.php";
					$usersz=mysqli_query($konek,"SELECT * FROM `i_us3r` WHERE id='".$row['id']."'");
					$drow=mysqli_fetch_array($usersz);
				?>

	<div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="../path/<?php echo $drow['photo']; ?>"
                       alt="User profile picture" width="100%" height="100%">
                </div>

                <h3 class="profile-username text-center"><?php echo $drow['nama_lgkp']; ?></h3>

                <p class="text-muted text-center"><?php echo $drow['nip']; ?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Username</b> <a class="float-right"><?php echo $drow['username']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Jabatan</b> <a class="float-right"><?php echo $drow['jabatan']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Flag</b> <a class="float-right"><?php if ($row['flag']=='1'){
                      echo "ADMINISTRATOR";
                    }else{
                      echo "USER";
                    } ?></a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block" data-dismiss="modal"><b>Tutup</b></a>
              </div>
              <!-- /.card-body -->
            </div>

				</div> 
				</div>
                
            </div>
        </div>
    </div>
  </div>
</div>
<!-- /.modal -->
