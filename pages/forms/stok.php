<?php session_start(); 
$nama_lgkp=$_SESSION["username"];
include "auth_user.php";
include "../config_sqli.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../../dist/img/BPSLogo.png">
  <title>SIPERA | BPS Sitaro</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css">
  <!-- Loader -->
  <link rel="stylesheet" type="text/css" href="../../plugins/loader/loading.css">
  <link rel="stylesheet" type="text/css" href="../../plugins/loader/custom.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  </head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Tambahan Buka Loading -->
<div id="loading" class="d-none">
    <div class="logoLoader"></div>
		<span class="loader"></span>
		<div class="textLoader">
			<center>
			<b>Uploading  <i class="fa fa-spinner fa-spin"></i></b>
			</center>
		</div>
</div>
<!-- Tambahan Tutup Loading -->

<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
  <div class="loader"></div>
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="../../dist/img/BPSLogo.png" alt="BPS Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SIPERA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="../path/<?php echo "".$_SESSION["photo"]."" ?>" style="border-radius: 50%;height: 35px;" alt="User Image">
        </div>
        <div class="info">
        <a href="#" class="d-block"><?php echo "".$_SESSION["username"]."" ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                DASHBOARD
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                [ INPUT ]
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="stok.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>STOK BARANG</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pengajuan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PENGAJUAN</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pengusulan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PENGUSULAN</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="riwayat-pengguna.php" class="nav-link">
            <i class="nav-icon far fa-calendar-alt"></i>
              <p>RIWAYAT PENGGUNA</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="manajemen-pengguna.php" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
              <p>MANAJEMEN PENGGUNA</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>KELUAR</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-2">
          
          </div>
          <div class="col-sm-10">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">INPUT</a></li>
              <li class="breadcrumb-item active">STOK BARANG</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
     <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
          <div class="card">
              <div class="card-header">
              <div class="card-body">
              <a class="btn btn-app bg-warning float-right" data-target="#AddSatuan" data-toggle="modal">
              <?php $query = mysqli_query($konek, "SELECT COUNT(*) AS JUMLAH FROM `satuan` WHERE `status`='1'");
                                                    if($query == false){
                                                        die ("Terjadi Kesalahan : ". mysqli_error($konek));
                                                            }
                                                                while($user = mysqli_fetch_array($query)){
                                                        ?>  
                <span class="badge bg-info"><?php echo $user["JUMLAH"]; ?></span>
                                                        <?php
                                                        }
                                                        ?>
                  <i class="fas fa-plus"></i> Satuan
                </a>
                <a class="btn btn-app bg-info float-right" data-target="#AddBarang" data-toggle="modal">
                <?php $query = mysqli_query($konek, "SELECT COUNT(*) AS JUMLAH FROM `barang` WHERE `status`='0'");
                                                    if($query == false){
                                                        die ("Terjadi Kesalahan : ". mysqli_error($konek));
                                                            }
                                                                while($user = mysqli_fetch_array($query)){
                                                        ?>  
                <span class="badge bg-danger"><?php echo $user["JUMLAH"]; ?></span>
                                                        <?php
                                                        }
                                                        ?>
                  
                                                    
                                                    
                  <i class="fas fa-plus"></i> Barang
                </a>
              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                <table id="example1" class="table table-hover" width="100%">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Satuan Barang</th>
                    <th>Stok</th>
                    <th>Operator Entry</th>
                    <th style="text-align: center;">Photo Barang</th>
                    <th style="text-align: center;width: 210px;">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
            			 				include "../config_sqli.php";
            							$query=mysqli_query($konek,"SELECT * FROM `barang` WHERE `status`='0' ORDER BY `id` DESC");
            							$no = 1;
                          while($row=mysqli_fetch_array($query)){
                    ?>

                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row['nama_barang']; ?></td>
                    <td><?php echo $row['satuan_barang']; ?></td>
                    <td><?php echo $row['stok_barang']; ?></td>
                    <td><?php echo $row['pengguna']; ?></td>
                    <td align='center'><a href="#see<?php echo $row['id']; ?>" data-toggle="modal" title="click to see"> <span class="fa fa-eye"></span> </a></td>
                    <td style="text-align: center;" class="row">
                    <a class="btn btn-primary btn-sm" href="#kelola<?php echo $row['id']; ?>" data-toggle="modal" >
                              <i class="fas fa-folder">
                              </i>
                              Kelola
                    </a>&nbsp;
                    <a class="btn btn-warning btn-sm" href="history-per-stok.php?nama_barang=<?php echo $row['nama_barang']; ?>" >
                              <i class="fas fa-redo">
                              </i>
                              History
                    </a>&nbsp;
                    <a class="btn btn-info btn-sm" href="#editbarang<?php echo $row['id']; ?>" data-toggle="modal">
                              <i class="fas fa-pencil-alt">
                              </i>
                    </a>&nbsp;
                    <a class="btn btn-danger btn-sm" href="#delbarang<?php echo $row['id']; ?>" data-toggle="modal">
                              <i class="fas fa-trash">
                              </i>
                    </a>&nbsp;
                    </td>
                    <?php include "button-edit.php"; ?>
                    <?php include "button-aksi.php"; ?>
                    
                    
                    

                 </tr>
                          <?php
            									$no++;
            									}
            							?>
                  </tbody>
                </table>
              </div>
              </div>
              <!-- /.card-body -->
            </div>

          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2024.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Muhammad Syibli</b>
    </div>
  </footer>

  <div id="AddBarang" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Barang</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
					<div class="modal-body">
						<form id="formStok" action="barang-add.php" name="modal_popup" enctype="multipart/form-data" method="POST">
							<div class="form-group">
								<label>Nama Barang</label>
									<div class="input-group">
										<input name="nama_barang" id="nama_barang" required type="text" class="form-control"/>
									</div>
							</div>
              <div class="form-group">
								<label>Satuan Barang</label>
									<div class="input-group">
                  <select required name="satuan_barang" style="cursor:pointer" class="form-control">
                    <?php
                    include "../config_sqli.php";
                    $query3 = mysqli_query($konek, "SELECT * FROM `satuan` ORDER BY `id` ASC");
                    while ($rowz = mysqli_fetch_array($query3)) {
                    ?>
                    <option value="<?=$rowz['nama_satuan'];?>"><?php echo $rowz['nama_satuan'];?></option>
                    <?php
                    }
                    ?>
                  </select>

									</div>
							</div>
							<div class="form-group">
								<label>Stok Barang</label>
									<div class="input-group">
										<input name="stok_barang" id="stok_barang" value="0" min="1" max="250" type="number" class="form-control"/>
									</div>
							</div>
						  <div class="form-group">
								<label>Photo Barang (.jpg)</label>
								<input type="file" required capture accept="image/jpeg, image/jpg" class="form-control" id="photo_barang" name="photo_barang">
							</div>
							<div class="modal-footer">
								<a href="#" class="btn bg-gradient-success" id="submit" onclick="kirimStok()" data-dismiss="modal">Simpan</a>
								<button type="reset" class="btn bg-gradient-danger"  data-dismiss="modal" aria-hidden="true">
									Batal
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

<div class="modal fade" id="AddSatuan" tabindex="-1" role="dialog">>
<div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Satuan</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="satuan-add.php" name="modal_popup" enctype="multipart/form-data" method="POST">
							<div class="form-group">
								<label>Nama Satuan</label>
									<div class="input-group">
										<input name="nama_satuan" required type="text" class="form-control"/>
									</div>
							</div>
              <div class="form-group">
								<label>Status</label>
									<div class="input-group">
                  <select style="cursor:pointer" tabindex="1" name="status" class="form-control">
													<option disabled selected="selected" value="0">== PILIHAN ==</option>
													<option value="1">1 - AKTIF</option>
													<option value="2">2 - NONAKTIF</option>
										</select>
									</div>
							</div>
							<div class="modal-footer">
								<button class="btn bg-gradient-success" type="submit">
									Simpan
								</button>
								<button type="reset" class="btn bg-gradient-danger"  data-dismiss="modal" aria-hidden="true">
									Batal
								</button>
							</div>
						</form>
            <table id="example1" class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Satuan</th>
                    <th>Status</th>
                    <th style="text-align: center;">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
            			 				include "../config_sqli.php";
            							$query=mysqli_query($konek,"SELECT * FROM `satuan`");
            							$no = 1;
                          while($row=mysqli_fetch_array($query)){
                    ?>

                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row['nama_satuan']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td style="text-align: center;">
                    <a href="delete-satuan.php?id=<?php echo $row['id']; ?>"><span class="badge bg-danger">Delete</span></a>
                  </tr>
                          <?php
            									$no++;
            									}
            							?>
                  </tbody>
                </table>
  </div>

    

    </div>
  </div>
</div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- SweetAlert2 -->
<script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="../../plugins/toastr/toastr.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": true,
      "buttons": ["copy", "csv", "excel", "pdf", "print" , "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });
</script>
<?php if(@$_SESSION['sukses']){ ?>
<script>
 const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3500
});

Toast.fire({
  icon: 'success',
  title: '<?php echo $_SESSION['sukses']; ?>'
})
</script>
<?php unset($_SESSION['sukses']); }
elseif(@$_SESSION['gagal'])
{?>
<script>
 const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3500
});

Toast.fire({
  icon: 'error',
  title: '<?php echo $_SESSION['gagal']; ?>'
})
</script>
<?php unset($_SESSION['gagal']); } ?>

<script>
	function kirimStok() {

  var kirimStok_namaBarang = document.getElementById("nama_barang").value;
	var kirimStok_stokBarang = document.getElementById("stok_barang").value;
	var kirimStok_photoBarang = document.getElementById("photo_barang").value;
	  if (kirimStok_namaBarang !="" && kirimStok_stokBarang !="" && kirimStok_photoBarang !="") {

	  $('#formStok').submit();
	  $("#loading").removeClass('d-none');


	  setTimeout(function(){
		$("#loading").hide();
		$(".loader").hide();
	},1800000);
		}else{
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Something went wrong!',
				footer: '<u>Jangan ada yang kosong ya.. :(</u>'
			});
	}
  };
</script>

<script>
            $(window).on("load",function(){
                $(".loader").fadeOut(1000);
            });
</script>
</body>
</html>
