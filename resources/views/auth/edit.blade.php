<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Jadwal</title>
    <link rel="icon" href="{{ asset('images/SUHU1-removebg-preview.png') }}">

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="{{ asset('Template/vendor/fontawesome-free/css/all.min.css') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{{ asset('Template/css/sb-admin-2.min.css') }}">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    
                </div>
                <div class="sidebar-brand-text mx-3">INTERNSHIP SUHU</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Home
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Admin
            </div>

             <!-- Nav Item - Charts -->
             <li class="nav-item">
                <a class="nav-link" href="charts.html">
                <i class='fas fa-user-alt'></i>
                    <span>User</span></a>
            </li>

             <!-- Nav Item - Charts -->
             <li class="nav-item">
                <a class="nav-link" href="charts.html">
                <i class="fas fa-fw fa-wrench"></i>
                    <span>Ganti Password</span></a>
            </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

              <!-- Nav Item - Utilities Collapse Menu -->
              <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class='fas fa-book'></i>
                    <span>Kelas</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Beberapa Kelas:</h6>
                        <a class="collapse-item" href="Program">Program</a>
                        <a class="collapse-item" href="Webinar">Webinar</a>
                        <a class="collapse-item" href="FixRuning">Fix Runing</a>
                        <a class="collapse-item" href="Customize">Customize</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li  class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ $user->name }}</span>
                                <img src="{{ Storage::url($user->profile_images) }}" alt="Profile Image" class="img-profile rounded-circle" style="width: 37px; height: 37px; border: 2px solid #808080; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);">
                                </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
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
                    <h1 class="h3 mb-1 text-gray-800">Edit Jadwal</h1>
                    <ol class="breadcrumb -sm-left">
                        <li class="breadcrumb-item"><a href="{{ asset('program') }}">Program</a></li>
                        <li class="breadcrumb-item active">Edit Jadwal</li>
                    </ol>
                    <hr>
                        <div class="col-xl-12 col-lg-6">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">{{ isset($program)? 'Edit Jadwal' :  }}</h6>   
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                <form action="{{ isset($program) ? route('auth.tambah_jadwal.update', $program->id) : route('auth.tambah_jadwal.simpan') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="week">Week:</label>
                                        <input type="text" class="form-control" id="week" name="week" value="{{ isset($program) ? $program->week : '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="materi">Materi:</label>
                                        <input type="text" class="form-control" id="materi" name="materi" value="{{ isset($program) ? $program->materi : '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="materi">Instansi:</label>
                                        <input type="text" class="form-control" id="instansi" name="instansi" value="{{ isset($program) ? $program->instansi : '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="materi">Pax:</label>
                                        <input type="text" class="form-control" id="pax" name="pax" value="{{ isset($program) ? $program->pax : '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal:</label>
                                        <input type="text" class="form-control" id="tanggal" name="tanggal" value="{{ isset($program) ? $program->tanggal : '' }}">
                                    </div> 
                                    <div class="form-group">
                                        <label for="durasi">Durasi (jam):</label>
                                        <input type="number" class="form-control" id="durasi" name="durasi" step="0.5" value="{{ isset($program) ? $program->durasi : '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="instruktur">Instruktur:</label>
                                        <input type="text" class="form-control" id="instruktur" name="instruktur" value="{{ isset($program) ? $program->instruktur : '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="cc">Cc:</label>
                                        <input type="text" class="form-control" id="cc" name="cc" value="{{ isset($program) ? $program->cc : '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="venue">Venue:</label>
                                        <input type="text" class="form-control" id="venue" name="venue" value="{{ isset($program) ? $program->venue : '' }}">                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="hotel_peserta">Hotel Peserta:</label>
                                        <input type="text" class="form-control" id="hotel_peserta" name="hotel_peserta" value="{{ isset($program) ? $program->hotel_peserta : '' }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="nilai_invoice">Nilai Invoice:</label>
                                        <input type="number" class="form-control" id="nilai_invoice" name="nilai_invoice" step="0.01" value="{{ isset($program) ? $program->nilai_invoice : '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="pic_peserta">PIC Peserta:</label>
                                        <input type="text" class="form-control" id="pic_peserta" name="pic_peserta" value="{{ isset($program) ? $program->pic_peserta : '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="note">Catatan:</label>
                                        <textarea class="form-control" id="note" name="note" rows="3" value="{{ isset($program) ? $program->note : '' }}">   
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="id_modul">Modul:</label>
                                        <input type="text" class="form-control" id="id_modul" name="id_modul" value="{{ isset($program) ? $program->id_modul : '' }}">
                                    </div>
                                    <div class="form-group">
                                    <label for="id_sertifikat">sertifikat:</label>
                                        <input type="text" class="form-control" id="id_sertifikat" name="id_sertifikat" value="{{ isset($program) ? $program->id_sertifikat : '' }}">
                                    </div>
                                    <div class="form-group">
                                    <label for="id_souvenir">souvenir:</label>
                                        <input type="text" class="form-control" id="id_souvenir" name="id_souvenir" value="{{ isset($program) ? $program->id_souvenir : '' }}">
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                     </div>    
                                </form>
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                      </div>
                </div>

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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('Template/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('Template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
<script src="{{ asset('Template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
<script src="{{ asset('Template/js/sb-admin-2.min.js') }}"></script>

</body>

</html>