<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tambah Sertifikat</title>
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
             @if(auth()->check() && auth()->user()->role === 'admin')
            <div class="sidebar-heading">
                Admin
            </div>
            @endif

             <!-- Heading -->
             @if(auth()->check() && auth()->user()->role === 'user')
             <div class="sidebar-heading">
                User
            </div>
            @endif

             <!-- Nav Item - Charts -->
             <li class="nav-item">
                <a class="nav-link" href="charts.html">
                <i class='fas fa-user-alt'></i>
                    <span>User</span></a>
            </li>

             <!-- Nav Item - Charts -->
             <li class="nav-item">
                <a class="nav-link" href="gantipassword">
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
                <!-- Heading -->
                <div class="sidebar-heading">
                    Data
                </div>
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseData"
                        aria-expanded="true" aria-controls="collapseData">
                        <i class="fas fa-fw fa-database"></i>
                        <span>Input Data</span>
                    </a>
                    <div id="collapseData" class="collapse" aria-labelledby="headingData" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Data:</h6>
                            <a class="collapse-item" href="Modul">Modul</a>
                            <a class="collapse-item" href="Sertifikat">Sertifikat</a>
                            <a class="collapse-item" href="Souvenir">Souvenir</a>
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
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow ">
                <div class="navbar-color-block navbar-color-block-yellow"></div>
            

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                       <!-- Nav Item - User Information -->
                       <li  class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ $user->name }}</span>
                                <i class='fas fa-user-circle' {{ $user->profile_image_url }}  style='font-size:37px'></i>
                                </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Edit Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="login" data-toggle="modal" data-target="#logoutModal">
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
                    <h1 class="h3 mb-1 text-gray-800">Tambah Sertifikat</h1>
                    <ol class="breadcrumb -sm-left">
                        <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                        <li class="breadcrumb-item"><a href="Sertifikat">Sertifikat</a></li>
                        <li class="breadcrumb-item active">tambah sertifikat</li>
                    </ol>
                    <hr></div>
 
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">
                                        <i class="m-0 font-weight-bold text-primary fas fa-folder-open"></i> Modul
                                    </h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="container-fluid text-primary">
                                    <form action="{{ route('sertifikats.upload') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama_sertifikat">Nama Sertifikat</label>
                                        <input type="text" name="nama_sertifikat" id="nama_sertifikat" class="form-control" required>
                                    </div>
                                    
                                    <div class="form-group">
                                    <label for="file">Pilih File (PDF, Gambar, Dokumen)</label>
                                    <input type="file" name="file" id="file" class="form-control" 
                                        accept=".pdf,.doc,.docx,.jpg,.jpeg,.png,.gif" required>
                                </div>
                                    <button type="submit" class="btn btn-primary">Upload</button>
                                </form>

                                    </div>
                                </div>
                            </div>
                                 </div>
                            </div>
                        </div>
                    </div>
          

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
                    <h5 class="modal-title" id="exampleModalLabel">Siap untuk Keluar ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" di bawah ini jika Anda ingin mengakhiri sesi Anda saat ini.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <style>
        .bg-white {
    background-color: #FFCD07;
}
/* Base Styles */

.navbar-color-block {
    position: absolute;
    top: 0;
    height: 100%;
}

.navbar-color-block-yellow {
    background-color: #FFCD07; /* Warna kuning */
    width: 88%; /* Lebar blok kuning */
    left: -20px;
    clip-path: polygon(0 0, 97% 0, 89% 100%, 0 100%);
}

/* Responsive Styles */
@media (max-width: 767.98px) {
    .navbar-color-block-yellow {
        width: 100%; /* Full width on smaller screens */
        left: 0; /* Align to the left */
        clip-path: polygon(0 0, 78% 0, 60% 100%, 0 100%); /* Adjust clip-path for full width */
    }
}


@media (min-width: 778px) {
    .navbar-color-block-yellow {
        /* Optionally add styles for larger screens */
        width: 88%; /* Keep original width */
        left: -20px; /* Keep original left position */
    }
}
    </style>

 <!-- Bootstrap core JavaScript-->
<script src="{{ asset('Template/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('Template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('Template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>


<!-- Custom scripts for all pages-->
<script src="{{ asset('Template/js/sb-admin-2.min.js') }}"></script>

<!-- Page level plugins -->
<script src="{{ asset('Template/vendor/chart.js/Chart.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('Template/js/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('Template/js/demo/chart-pie-demo.js') }}"></script>


</body>

</html>