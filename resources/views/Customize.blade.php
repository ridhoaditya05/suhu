<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Customize</title>
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
            @if(auth()->check() && auth()->user()->role === 'admin')
            <hr class="sidebar-divider">
            @endif

            <!-- Heading -->
            @if(auth()->check() && auth()->user()->role === 'admin')
            <div class="sidebar-heading">
                Admin
            </div>
            @endif

            <!-- Nav Item - Charts -->
            <li class="nav-item">
            @if(auth()->check() && auth()->user()->role === 'admin')
                <a class="nav-link" href="{{ route('Pengguna')}}">
                <i class='fas fa-user-alt'></i>
                    <span>User</span></a>
            </li>
            @endif

            <!-- Nav Item - Charts -->
            <li class="nav-item">
            @if(auth()->check() && auth()->user()->role === 'admin')
                <a class="nav-link" href="gantipassword">
                <i class="fas fa-fw fa-wrench"></i>
                    <span>Ganti Password</span></a>
            </li>
            @endif

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
            @if(auth()->check() && auth()->user()->role === 'admin')
                    Data
                </div>
                @endif

            <!-- Nav Item - Utilities Collapse Menu -->
            @if(auth()->check() && auth()->user()->role === 'admin')
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseKelas1"
                    aria-expanded="true" aria-controls="collapseKelas1">
                    <i class='fas fa-book'></i>
                    <span>Kelas</span>
                </a>
                <div id="collapseKelas1" class="collapse" aria-labelledby="headingKelas1">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Beberapa Kelas :</h6>
                        <a class="collapse-item" href="Program">Program</a>
                        <a class="collapse-item" href="Webinar">Webinar</a>
                        <a class="collapse-item" href="FixRuning">Fix Runing</a>
                        <a class="collapse-item" href="Customize">Customize</a>
                    </div>
                </div>
            </li>
            @endif


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
            @if(auth()->check() && auth()->user()->role === 'admin')
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInputData"
                    aria-expanded="true" aria-controls="collapseInputData">
                    <i class="fas fa-fw fa-database"></i>
                    <span>Input Data</span>
                </a>
                <div id="collapseInputData" class="collapse" aria-labelledby="headingInputData">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Input:</h6>   
                        <a class="collapse-item" href="Modul">Modul</a>
                        <a class="collapse-item" href="Sertifikat">Sertifikat</a>
                    </div>
                </div>
            </li>
            @endif
            <!-- Heading -->
            @if(auth()->check() && auth()->user()->role === 'user')
            <div class="sidebar-heading">
                User
            </div>
            @endif

            <!-- Nav Item - Utilities Collapse Menu -->
            @if(auth()->check() && auth()->user()->role === 'user')
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseKelas2"
                    aria-expanded="true" aria-controls="collapseKelas2">
                    <i class='fas fa-book'></i>
                    <span>Kelas</span>
                </a>
                <div id="collapseKelas2" class="collapse" aria-labelledby="headingKelas2">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Beberapa Kelas :</h6>
                        <a class="collapse-item" href="Program">Program</a>
                        <a class="collapse-item" href="Webinar">Webinar</a>
                        <a class="collapse-item" href="FixRuning">Fix Runing</a>
                        <a class="collapse-item" href="Customize">Customize</a>
                    </div>
                </div>
            </li>
            @endif

            <!-- Nav Item - Pages Collapse Menu -->
            @if(auth()->check() && auth()->user()->role === 'user')
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseData"
                    aria-expanded="true" aria-controls="collapseData">
                    <i class="fas fa-fw fa-database"></i>
                    <span>Data</span>
                </a>
                <div id="collapseData" class="collapse" aria-labelledby="headingData">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data:</h6>
                        <a class="collapse-item" href="Modul">Modul</a>
                        <a class="collapse-item" href="Sertifikat">Sertifikat</a>
                    </div>
                </div>
            </li>
            @endif




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
                <div class="navbar-color-block navbar-color-block-yellow"></div>

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
                                </a>
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
                    <h1 class="h3 mb-1 text-gray-800">Customize</h1>
                    <ol class="breadcrumb -sm-left">
                        <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                        <li class="breadcrumb-item active">customize</li>
                    </ol>

                    <hr></div>
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Customize</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-bordered m-0 font-family Jakarta Sans text-primary">
                                        <thead class="font-weight-bold  text-secondary">
                                            <tr>
                                                 <!-- Kelas Customize -->
                                                <tr data-group="Kelas Customize" class="bg-primary text-white font-weight-bold">
                                                    <td colspan="18">Kelas Customize</td>
                                                </tr>
                                                <th>No</th>
                                                <th>Week</th>
                                                <th>Materi</th>
                                                <th>Instansi</th>
                                                <th>Pax</th>
                                                <th>Tanggal</th>
                                                <th>Durasi</th>
                                                <th>Instruktur</th>
                                                <th>Cc</th>
                                                <th>Venue</th>
                                                <th>Hotel-Peserta</th>
                                                <th>Nilai_Invoice</th>
                                                <th>Pic-Peserta</th>
                                                <th>Note</th>
                                                <th>modul</th>
                                                <th>sertifikat</th>
                                                <th>souvenir</th>
                                                @if(auth()->check() && auth()->user()->role === 'admin')
                                                <th>
                                                    <a href="{{ route('customize.index') }}" class="btn btn-primary">
                                                        <i class="material-icons"></i> Tambah Jadwal
                                                    </a>
                                                    @endif
                                                </th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($kelas_customize as $customize)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $customize->week }}</td>
                                                    <td>{{ $customize->materi }}</td>
                                                    <td>{{ $customize->instansi }}</td>
                                                    <td>{{ $customize->pax }}</td>
                                                    <td>{{ $customize->tanggal }}</td>
                                                    <td>{{ $customize->durasi }}</td>
                                                    <td>{{ $customize->instruktur }}</td>
                                                    <td>{{ $customize->cc }}</td>
                                                    <td>{{ $customize->venue }}</td>
                                                    <td>{{ $customize->hotel_peserta }}</td>
                                                    <td>{{ $customize->nilai_invoice }}</td>
                                                    <td>{{ $customize->pic_peserta }}</td>
                                                    <td>{{ $customize->note }}</td>
                                                    <td>{{ $customize->modul }}</td>
                                                    <td>{{ $customize->sertifikat }}</td>
                                                    <td>{{ $customize->souvenir }}</td>
                                                    @if(auth()->check() && auth()->user()->role === 'admin')
                                                    <td>
                                                    <div class="d-flex justify-content-end">
                                                        <a href="{{ route('auth.tambah_customize.edit', $customize->id) }}" class="btn btn-warning mr-2">Edit</a>
                                                        <form action="{{ route('customize.hapus', $customize->id) }}" method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus Data ini?');">Delete</button>
                                                        </form>
                                                    </div>
                                                    </td>
                                                    @endif
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                      </div>
            </div>

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
                    <h5 class="modal-title" id="exampleModalLabel">Siap untuk Keluar ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" di bawah ini jika Anda ingin mengakhiri sesi Anda saat ini.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{route('login') }}">Logout</a>
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

<!-- DataTables CSS -->
<link rel="stylesheet" href="{{ asset('https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css')}}">

<style>
    /* Ubah warna teks dan border pada kolom pencarian */
    #myTable_filter input {
        border: 2px solid #e3e6f0; /* Warna border */
        background-color: #f8f9fc; /* Warna latar belakang */
        border-radius: 15px; /* Membuat sudut melengkung */
        padding: 7px 10px; /* Memberi padding dalam kolom */
        transition: all 0.3s ease; /* Efek transisi untuk perubahan border dan background */
        outline: none; /* Menghilangkan outline default saat fokus */
    }

    /* Mengubah warna placeholder dengan tulisan "Search" */
    #myTable_filter input::placeholder {
        color: lightblue; /* Warna placeholder */
        opacity: 1; /* Pastikan placeholder terlihat jelas */
    }

    /* Efek ketika kolom pencarian difokuskan */
    #myTable_filter input:focus {
        border-color: #888888; /* Warna border saat fokus */
        background-color: #e0e0e0; /* Warna latar belakang saat fokus */
    }

     /* Ubah gaya pada myTable_length (dropdown jumlah entri) */
     #myTable_length select {
        border: 2px solid #e3e6f0; /* Warna border */
        background-color: #f8f9fc; /* Warna latar belakang */
        border-radius: 15px; /* Membuat sudut melengkung */
        padding: 7px 10px; /* Memberi padding dalam kolom */
        transition: all 0.3s ease; /* Efek transisi untuk perubahan border dan background */
        outline: none; /* Menghilangkan outline default saat fokus */
    }

    /* Efek saat memilih jumlah entri pada myTable_length */
    #myTable_length select:focus {
        border-color: #888888; /* Warna border saat fokus */
        background-color: #e0e0e0; /* Warna latar belakang saat fokus */
    }

    /* Table Styles */
    .table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 1rem;
    background-color: transparent;
    border-collapse: collapse;
    }

    .table th,
    .table td {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
    }

    .table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6;
    background-color: #f8f9fa;
    color: #495057;
    font-weight: bold;
    }

    .table tbody tr:nth-of-type(odd) {
    background-color: #f2f2f2;
    }

    .table-bordered {
    border: 1px solid #dee2e6;
    }

    .table-bordered th,
    .table-bordered td {
    border: 1px solid #dee2e6;
    }

    /* Responsive Styles */
    @media (max-width: 767.98px) {
    .table-responsive {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
    }

    .table-responsive > .table {
        margin-bottom: 0;
    }
    }

    .navbar-color-block {
    position: absolute;
    top: 0;
    height: 100%;
}

.navbar-color-block-yellow {
    background-color: #FFCD07; /* Warna kuning */
    width: 88%; /* Lebar blok kuning */
    left: -20px;
    clip-path: polygon(0 0, 98% 0, 90% 100%, 0 100%);
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

<!-- jQuery and DataTables JS -->
<script src="{{asset('https://code.jquery.com/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js')}}"></script>


<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            "order": [[0, "asc"]], // Set default sorting by first column (No) in ascending order
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Indonesian.json" // Optional: Add Indonesian language support
            }
        });
    });
</script>

</body>

</html>