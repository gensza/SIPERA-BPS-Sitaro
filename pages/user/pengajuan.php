<?php 
session_start();
$nama_lgkp=$_SESSION["username"];
include "auth_user.php";
include "../config_sqli.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../../dist/img/BPSLogo.png" alt="AdminLTELogo" height="60" width="60">
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
        <img src="../path/<?php echo "".$_SESSION["photo"]."" ?>" class="img-circle elevation-2" alt="User Image">
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
                <a href="stok.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>STOK BARANG</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pengajuan.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PENGAJUAN</p>
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
                <a class="btn btn-app bg-info float-right" data-target="#AddPengajuan" data-toggle="modal">
                <?php $query = mysqli_query($konek, "SELECT COUNT(*) AS JUMLAH FROM `pengajuan`");
                                                    if($query == false){
                                                        die ("Terjadi Kesalahan : ". mysqli_error($konek));
                                                            }
                                                                while($user = mysqli_fetch_array($query)){
                                                        ?>  
                <span class="badge bg-danger"><?php echo $user["JUMLAH"]; ?></span>
                                                        <?php
                                                        }
                                                        ?>
                  
                                                    
                                                    
                  <i class="fas fa-plus"></i> Pengajuan Barang
                </a>
              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Satuan Barang</th>
                    <th>Jumlah Barang</th>
                    <th>Tgl Pengajuan</th>
                    <th>Nama Pengajuan</th>
                    <th style="text-align: center;">Status</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
            			 				include "../config_sqli.php";
            							$query=mysqli_query($konek,"SELECT * FROM `pengajuan` WHERE `nama_pengajuan`='$nama_lgkp' ORDER BY `id` DESC");
            							$no = 1;
                          while($row=mysqli_fetch_array($query)){
                    ?>

                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row['nama_barang']; ?></td>
                    <td><?php echo $row['satuan_barang']; ?></td>
                    <td><?php echo $row['jumlah_barang']; ?></td>
                    <td><?php echo $row['tgl_pengajuan']; ?></td>
                    <td><?php echo $row['nama_pengajuan']; ?></td>
                    <td style="text-align: center;"><?php if ($row['progress_pengajuan']=='1'){
                      echo "<span class='badge bg-success'> DISETUJUI";
                    }elseif ($row['progress_pengajuan']=='2'){
                      echo "<span class='badge bg-danger'> DITOLAK";
                    }else{
                      echo "<span class='badge bg-warning'> DIAJUKAN";
                    } ?>
                    </td>
                    <?php include "button-pengajuan-approved.php"; ?>
                    

                 </tr>
                          <?php
            									$no++;
            									}
            							?>
                  </tbody>
                </table>
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

  <div id="AddPengajuan" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Pengajuan Barang</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
					<div class="modal-body">
						<form action="pengajuan-add.php" enctype="multipart/form-data" method="POST">
							<div class="form-group">
								<label>Pilih Barang</label>
									<div class="input-group">
                    <select name="nama_barang" id="selectBarang" style="cursor:pointer" class="form-control" required>
                  </select>
									</div>
							</div>
              <div class="form-group">
								<label>Satuan Barang</label>
									<div class="input-group">
                    <input type="text" name="satuan_barang" id="satuanBarang" class="form-control" readonly>
									</div>
							</div>
							<div class="row">
                <div class="form-group col-9">
                    <label>Jumlah Barang</label>
                    <div class="input-group">
                      <input name="jumlah_barang" id="jmlBarang" min="1" max="250" type="number" class="form-control" required/>
                    </div>
                    <i><span id="spanBatasStok"></span></i>
                    <input type="hidden" id="hiddenBatasStok">
                </div>
                <div class="form-group col-3">
                    <label>Stok</label>
                    <div class="input-group">
                      <input id="stokBarang" value="0" min="1" max="250" type="number" class="form-control" readonly/>
                    </div>
                </div>
              </div>
              <div class="form-group">
								<label>Tgl Pengajuan</label>
									<div class="input-group">
                    <?php 
                    $tz = 'Asia/Makassar';
                    $dt = new DateTime("now", new DateTimeZone($tz));
                    $time_entry = $dt->format('Y-m-d G:i:s');                    
                    ?>
										<input name="tgl_pengajuan" value="<?php echo $time_entry;?>" type="text" readonly class="form-control"/>
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
					</div>
				</div>
			</div>
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
    fetchSelectBarang();

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

  function fetchSelectBarang() {
      $.ajax({
          url: 'user_query/pengajuan/select_barang.php', // PHP file to fetch data from
          type: 'GET',
          success: function(res) {
              var select = $('#selectBarang');
              select.empty(); // Clear existing options

              // Add new options
              select.append('<option value="">-- Pilih --</option>');
              $.each(res, function(index, value) {
                  select.append('<option value="' + value.nama_barang + '">' + value.nama_barang + '</option>');
              });
          },
          error: function(xhr, status, error) {
              console.error('Error fetching options:', error);
          }
      });
  }

  $('#selectBarang').on('change', function() {
      var selectedBarang = $(this).val();

      console.log(selectedBarang);
      $.ajax({
          url: 'user_query/pengajuan/select_barang_detail.php', // PHP file to fetch data from
          type: 'POST',
          data: { selectedBarang: selectedBarang },
          success: function(res) {
            console.log(res);
              $('#satuanBarang').val(res.satuan_barang);
              $('#stokBarang').val(res.stok_barang);
              $('#hiddenBatasStok').val(res.total_count);
              $('#spanBatasStok').html("Bulan ini sudah <b>"+res.total_count+" "+res.satuan_barang+"</b> dari 25 " + res.satuan_barang);
              
          },
          error: function(xhr, status, error) {
              console.error('Error fetching options:', error);
          }
      });
  });

  $('#jmlBarang').keyup(function() {
      var value = $(this).val().trim();
      var stok = $('#stokBarang').val().trim();
      var countBatasStok = $('#hiddenBatasStok').val().trim();

      totalStokBulanan = (parseInt(value, 10) + parseInt(countBatasStok, 10));
      if(parseInt(value, 10) > parseInt(stok, 10) || totalStokBulanan > parseInt(stok, 10)) {
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3500
        });

        Toast.fire({
          icon: 'error',
          title: 'Jumlah melebihi stok'
        })

        $('#jmlBarang').val('');

      }else if(totalStokBulanan > 25) {
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3500
        });

        Toast.fire({
          icon: 'error',
          title: 'Jumlah melebihi Batas Pengajuan bulanan'
        })

        $('#jmlBarang').val('');
      }
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
</body>
</html>
