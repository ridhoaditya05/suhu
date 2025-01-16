<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tambah Jadwal</title>
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
                    <h1 class="h3 mb-1 text-gray-800">{{ isset($fixruning)? 'Edit Jadwal': 'Tambah Jadwal' }}</h1>
                    <ol class="breadcrumb -sm-left">
                        <li class="breadcrumb-item"><a href="{{ asset('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ asset('FixRuning') }}">fixruning</a></li>
                        <li class="breadcrumb-item active">{{ isset($fixruning)? 'Edit Jadwal': 'Tambah Jadwal' }}</li>
                    </ol>
                    <hr>
                        <div class="col-xl-12 col-lg-6">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">{{ isset($fixruning)? 'Edit Jadwal': 'Tambah Jadwal' }}</h6>   
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                <form action="{{ isset($fixruning) ? route('auth.tambah_fixruning.update', $fixruning->id) : route('auth.tambah_fixruning.simpan') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                    <label for="week">Week:</label>
                                    <input type="number" name="week" class="form-control" value="{{ old('week', $fixruning->week ?? '') }}">
                                    @error('week')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="materi">Materi:</label>
                                    <input type="text" name="materi" class="form-control" value="{{ old('materi', $fixruning->materi ?? '') }}">
                                    @error('materi')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                    <div class="form-group">
                                    <label for="instansi">Instansi:</label>
                                    <input type="text" class="form-control" id="instansi" name="instansi" value="{{ old('instansi', isset($fixruning) ? $fixruning->instansi : '') }}">
                                    @error('instansi')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="pax">Pax:</label>
                                    <input type="number" class="form-control" id="pax" name="pax" value="{{ old('pax', isset($fixruning) ? $fixruning->pax : '') }}">
                                    @error('pax')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">Tanggal:</label>
                                    <select class="form-control" id="tanggal" name="tanggal">
                                        <option value="">--Pilih Tanggal--</option>
                                        @foreach($tanggal as $t)
                                            <option value="{{ $t->date }}" {{ (old('tanggal', $fixruning->tanggal ?? '') == $t->date) ? 'selected' : '' }}>
                                                {{ $t->date }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('tanggal')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="durasi">Durasi (jam):</label>
                                    <input type="number" class="form-control" id="durasi" name="durasi" step="0.5" value="{{ old('durasi', isset($fixruning) ? $fixruning->durasi : '') }}">
                                    @error('durasi')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="instruktur">Instruktur:</label>
                                    <select class="form-control" id="instruktur" name="instruktur">
                                        <option value="">--Pilih Instruktur--</option>
                                        @foreach($instrukturs as $instruktur)
                                            <option value="{{ $instruktur->name }}" {{ (old('instruktur', $fixruning->instruktur ?? '') == $instruktur->name) ? 'selected' : '' }}>
                                                {{ $instruktur->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('instruktur')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="cc">Cc:</label>
                                    <input type="text" class="form-control" id="cc" name="cc" value="{{ old('cc', isset($fixruning) ? $fixruning->cc : '') }}">
                                    @error('cc')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="venue">Venue:</label>
                                    <input type="text" class="form-control" id="venue" name="venue" value="{{ old('venue', isset($fixruning) ? $fixruning->venue : '') }}">
                                    @error('venue')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="hotel_peserta">Hotel Peserta:</label>
                                    <input type="text" class="form-control" id="hotel_peserta" name="hotel_peserta" value="{{ old('hotel_peserta', isset($fixruning) ? $fixruning->hotel_peserta : '') }}">
                                    @error('hotel_peserta')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="nilai_invoice">Nilai Invoice:</label>
                                    <input type="number" class="form-control" id="nilai_invoice" name="nilai_invoice" step="0.01" value="{{ old('nilai_invoice', isset($fixruning) ? $fixruning->nilai_invoice : '') }}">
                                    @error('nilai_invoice')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="pic_peserta">PIC Peserta:</label>
                                    <input type="text" class="form-control" id="pic_peserta" name="pic_peserta" value="{{ old('pic_peserta', isset($fixruning) ? $fixruning->pic_peserta : '') }}">
                                    @error('pic_peserta')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="note">Note:</label>
                                    <textarea class="form-control" id="note" name="note" rows="3">{{ old('note', isset($fixruning) ? $fixruning->note : '') }}</textarea>
                                    @error('note')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="modul">Modul:</label>
                                    <select class="form-control" id="modul" name="modul">
                                        <option value="">--Pilih Modul--</option>
                                        @foreach ($moduls as $modul)
                                            <option value="{{ $modul->nama_modul }}" {{ (old('modul', $fixruning->modul ?? '') == $modul->nama_modul) ? 'selected' : '' }}>
                                                {{ $modul->nama_modul }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('modul')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="id_sertifikat">Sertifikat:</label>
                                    <select name="sertifikat" id="id_sertifikat" class="form-control">
                                        <option value="">--Pilih Sertifikat--</option>
                                        @foreach ($sertifikats as $sertifikat)
                                            <option value="{{ $sertifikat->nama_sertifikat }}" {{ (old('sertifikat', $fixruning->sertifikat ?? '') == $sertifikat->nama_sertifikat) ? 'selected' : '' }}>
                                                {{ $sertifikat->nama_sertifikat }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('sertifikat')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                <label for="souvenir">Souvenir:</label>
                                <select class="form-control" id="souvenir" name="souvenir">
                                    <option value="">--Pilih Souvenir--</option>
                                    @foreach($souvenir as $s)
                                        <option value="{{ $s->name }}" {{ (old('souvenir', $fixruning->souvenir ?? '') == $s->name) ? 'selected' : '' }}>
                                            {{ $s->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('souvenir')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </div>
                                    <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">{{ isset($fixruning)? 'Update': 'Simpan' }}</button>
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