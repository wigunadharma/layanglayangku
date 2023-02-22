<?php
require 'functions.php';
$eventl = query(" SELECT * FROM eventl ");

if( isset($_POST["submit"])){
  // / post
  if( tambahe($_POST) > 0){
      echo"<script>
            alert('data berhasil ditambahkan');
          </script>";
  } else{
    echo"<script>
            alert('data gagal ditambahkan');
          </script>";
  }
  // ubah
  
}

if (isset($_POST['edite'])) {
  if(edite($_POST) > 0) {
    echo"<script>
            alert('data berhasil ditambahkan');
          </script>";
  } else{
    echo"<script>
            alert('data gagal ditambahkan');
          </script>";
  }
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Tables</title>

    <!-- Custom fonts for this template -->
    <link
      href="vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/tables.css" />
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />

    <!-- Custom styles for this page -->
    <link
      href="vendor/datatables/dataTables.bootstrap4.min.css"
      rel="stylesheet"
    />
  </head>

  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul
        class="navbar-nav sidebar sidebar-dark accordion"
        id="sidebar
        "
      >
        <!-- Sidebar - Brand -->
        <a
          class="sidebar-brand d-flex align-items-center justify-content-center"
          href="index.php"
        >
          <div class="sidebar-brand-icon rotate-n-15"></div>
          <div class="sidebar-brand-text mx-3">LayanglayangKu</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item ml-4">
          <a class="nav-link" href="index.php"> <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Nav Item - Charts -->
        <li class="nav-item  ml-4">
          <a class="nav-link" href="kategori.php"> <span>Jenis-jenis</span></a>
        </li>
        <li class="nav-item ml-4">
          <a class="nav-link" href="event.php"> <span>Event</span></a>
        </li>
        <hr class="sidebar-divider d-none d-md-block" />

        <!-- Nav Item - Tables -->
        <li class="nav-item ml-4">
          <a class="nav-link" href="tables.php"> <span>Tabel User</span></a>
        </li>
        <li class="nav-item  ml-4">
          <a class="nav-link" href="tlayangan.php"> <span>Tabel Layangan</span></a>
        </li>
        <li class="nav-item active ml-4">
          <a class="nav-link" href="tevent.php"> <span>Tabel Event</span></a>
        </li>

        <!-- Divider -->
      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <nav
            class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"
          >
            <!-- Sidebar Toggle (Topbar) -->
            <button
              id="sidebarToggleTop"
              class="btn btn-link d-md-none rounded-circle mr-3"
            >
              <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="userDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"
                    >Douglas McGee</span
                  >
                  <img
                    class="img-profile rounded-circle"
                    src="img/undraw_profile.svg"
                  />
                </a>
                <!-- Dropdown - User Information -->
                <div
                  class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="userDropdown"
                >
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                  </a>
                  <div class="dropdown-divider"></div>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="modal"
                    data-target="#logoutModal"
                  >
                    <i
                      class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"
                    ></i>
                    Logout
                  </a>
                </div>
              </li>
            </ul>
          </nav>
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Tables</h1>

            <!-- DataTales Example -->
            <a href="#"class="btn btn-success my-3" data-toggle="modal" data-target="#tambahe">Tambah Data</a>
            <div class="card shadow mb-4">
              
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                  DataTables User
                </h6>
              </div>
             
              <div class="card-body">
                
                <div class="table-responsive">
                  <table
                    class="table table-bordered"
                    id="dataTable"
                    width="100%"
                    cellspacing="0">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Option</th>
                        <th>Nama Event</th>
                        <th>Lokasi</th>
                        <th>Hadiah</th>
                        <th>Tgl Pendaftaran</th>
                        <th>Tgl Event</th> 
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach( $eventl as $row ) : ?>
                      <tr>

                        <td><?= $i; ?></td>
                        <td>
                          <div class="dropdown mr-1">
                            <button
                              type="button"
                              class="btn btn-secondary dropdown-toggle"
                              data-toggle="dropdown"
                              aria-expanded="false"
                              data-offset="10,20"
                            >
                              Offset
                            </button>
                            <div class="dropdown-menu">
                              <button class="dropdown-item" type="detai">Detail</button>
                              <a href="#" class = "dropdown-item" data-toggle ="modal" data-target="#edite<?= $row["id_event"];?>">Edit</a>
                              <a href="hapus.php?id_event=<?= $row["id_event"];?>" class="dropdown-item">Hapus</a>
                            </div>
                          </div>
                        </td>
                        <td><?= $row["nama_event"]?></td>
                        <td><?= $row["lokasi"]?></td>
                        <td><?= $row["hadiah"]?></td>
                        <td><?= $row["pendaftaran"]?></td>
                        <td><?= $row["tgl_event"]?></td>
                        
                      </tr>
                      <?php $i++; ?>
                      <?php endforeach; ?>     
                    </tbody>
                  </table>
                </div>
                </div>
              </div>
            </div>           
         </div>
     </div>
     <div id="tambahe" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">
              Tambah Data Event
            </h4>
            <button type="button" class="close"data-dismiss="modal">&times;</button>
            
          </div>
          <form action="" method="post">
          <div class="modal-body">
           
              <label for="nama_event">Nama Event</label>
              <input type="text" name="nama_event" class="form-control" id="nama_event" require>
              <label for="lokasi">Lokasi</label>
              <input type="text" name="lokasi" class="form-control" id="lokasi" require>
            
              <label for="hadiah">Hadiah</label>
              <input type="text" name="hadiah" class="form-control" id="hadiah" required>
              <label for="pendaftaran">Tgl Pendaftaran</label>
              <input type="text" name="pendaftaran" class="form-control" id="pendaftaran" required>
              <label for="tgl_event">Tgl Eveny</label>
              <input type="text" name="tgl_event" class="form-control" id="tgl_event" required>

              
              
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-danger">Reset</button>
             <button type="submit" name="submit" class="btn btn-success">Simpan</button>
          </div>
          </form>
        </div>
      </div>
     </div>
<?php foreach($eventl as $row):?> 
     <div id="edite<?= $row["id_event"];?>" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">
              Edit event
            </h4>
            <button type="button" class="close"data-dismiss="modal">&times;</button>
            
          </div>
          <form action="" method="post">
          <div class="modal-body">
            <input type="hidden" name="id_event" value="<?= $row["id_event"]; ?>">
          <label for="nama_event">Nama Event</label>
              <input type="text" name="nama_event" class="form-control" id="nama_event" require value="<?= $row["nama_event"]; ?>">
              <label for="lokasi">Lokasi</label>
              <input type="text" name="lokasi" class="form-control" id="lokasi" require value="<?= $row["lokasi"]; ?>">
            
              <label for="hadiah">Hadiah</label>
              <input type="text" name="hadiah" class="form-control" id="hadiah" required value="<?= $row["hadiah"]; ?>">
              <label for="pendaftaran">Tgl Pendaftaran</label>
              <input type="text" name="pendaftaran" class="form-control" id="pendaftaran" required value="<?= $row["pendaftaran"]; ?>">
              <label for="tgl_event">Tgl Eveny</label>
              <input type="text" name="tgl_event" class="form-control" id="tgl_event" required value="<?= $row["tgl_event"]; ?>">
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-danger">Reset</button>
             <button type="submit" name="edite" class="btn btn-success">Simpan</button>
          </div>
          </form>
        </div>
      </div>
     </div>

     <?php endforeach; ?>
      </div>
     </div>
          <!-- /.container-fluid -->
   </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Your Website 2020</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->
      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div
      class="modal fade"
      id="logoutModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button
              class="close"
              type="button"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button
              class="btn btn-secondary"
              type="button"
              data-dismiss="modal"
            >
              Cancel
            </button>
            <a class="btn btn-primary" href="login.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
  </body>
</html>
