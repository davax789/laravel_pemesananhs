

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-Security-Policy" content="script-src 'self' 'unsafe-eval';">


    <title>PUTIH MULIA</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset ('sb-admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('sb-admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <!-- DATATABLES BS 4-->
    <link rel="stylesheet" href="{{ asset('sb-admin/vendor/datatables/dataTables.bootstrap4.css')}}" />
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('sb-admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset ('sb-admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!--sidebar start-->
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-cash-register"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Putih Mulia<sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/home">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <!-- <div class="sidebar-heading">
           Master
       </div> -->
    <!-- Nav Item - Pages Collapse Menu -->
    <hr class="sidebar-divider">
    <li class="nav-item active">
        <a class="nav-link" href="/history">
            <i class="fas fa-fw fa-cogs"></i>
            <span>History</span></a>
    </li>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

            </div>
        </div>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3" aria-expanded="true"
            aria-controls="collapse3">
            <i class="fas fa-fw fa-desktop"></i>
            <span>Transaksi</span>
        </a>
        <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                <a class="collapse-item" href="/pemesanan">Pemesanan</a>
                <a class="collapse-item" href="/datapemesanan">Data Pemesanan</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item active">
        <a class="nav-link" href="/kamars">
                        <span>Kamar</span></a>
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
            <h5 class="d-lg-block d-none mt-2"><b>CV PUTIH MULIA , VETERAN</b></h5>
            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- <div class="topbar-divider d-none d-sm-block"></div> -->
                <!-- Topbar Search -->
                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <img class="img-profile rounded-circle" src="{{ asset('unnamed.jpg') }}">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small ml-2">{{ Auth::user()->name }}</span>
                            <i class="fas fa-angle-down"></i>
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="index.php?page=user">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            <a></a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- End of Topbar -->
        <!-- Begin Page Content -->
                    <!-- Trigger the modal with a button -->
    <!-- /.container-fluid -->
    @if (session('success'))
    <div class="alert alert-success">
        <p>{{ session('success') }}</p>
    </div>
@endif
<div class="container-fluid">        <h4>Tambah Data Pemesanan</h4>
    <br />
        <!-- Konten lainnya -->
    </div>
    <div class="card card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                @if ($simpanDt)
                    <tr>
                        <td>Nama Pemesan</td>
                        <td>{{ $simpanDt->nama_pemesan }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>{{ $simpanDt->alamat }}</td>
                    </tr>
                    <tr>
                        <td>No HP</td>
                        <td>{{ $simpanDt->nohp }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Masuk</td>
                        <td>{{ date('d-m-Y', strtotime($simpanDt->tglmasuk)) }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Keluar</td>
                        <td>{{ date('d-m-Y', strtotime($simpanDt->tglkeluar)) }}</td>
                    </tr>
                    <tr>
                        <td>Total Pembayaran</td>
                        <td>Rp {{ number_format($simpanDt->total_pembayaran, 0, ',', '.') }}</td>
                    </tr>
                    <tr>
                        <td>No Kamar</td>
                        <td>{{ $simpanDt->no_kamar }}</td>
                    </tr>
                    <tr>
                        <td>Admin</td>
                        <td>{{ $simpanDt->admin }}</td>
                    </tr>
                    
                @else
                    <tr>
                        <td colspan="2">Data tidak ditemukan</td>
                    </tr>
                @endif
            </table>
            <div class="d-flex justify-content-between">
                <a href="/datapemesanan" class="btn btn-primary"><i class="fa fa-angle-left"></i> Balik</a>
                <div>
                    <a href="{{ url('invoice', ['id' => $simpanDt->id]) }}" class="btn btn-danger mr-2">Invoice</a>
                    <form action="{{ route('pemesanan.selesai', $simpanDt->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-primary">Selesai</button>
                    </form>
                    
                </div>
            </div>
            
            
            


        </div>
    </div>
</div>
    <!-- End of Main Content -->
    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>
                </span>
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
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('sb-admin/js/sb-admin-2.min.js')}}"></script>
    <script src="{{ asset('sb-admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset ('sb-admin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script type="text/javascript">

   </script>

   </body>

   </html>
