<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AMIK GARUT</title>
    <link rel="stylesheet" type="text/css" href={{ URL('assets1/css/bootstrap.min.css')}}>
    <link href={{ url('assets1/vendor/fontawesome-free/css/all.min.css')}} rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href={{ url('assets1/vendor/datatables/dataTables.bootstrap4.css')}} rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href={{ url('assets1/css/sb-admin.css')}} rel="stylesheet">
    <link rel="stylesheet" href={{ url('css/rab.css')}}>

</head>

<body id="page-top">
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
        <img src="assets/Logo.png" class="logo" alt="User Image">
        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>

        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

        </form>

        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle fa-fw"></i>
                    <span class="hidden-xs">{{auth()->user()->name}}</span>
                </a>
                
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="/changePassword">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/logout" data-toggle="modal" data-target="#logoutModal">Logout</a>
                </div>
            </li>
        </ul>

    </nav>

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/index">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Laporan RAPB</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <h6 class="dropdown-header text-info">Transitoris:</h6>
                    <a class="dropdown-item" href="danabangunan">Dana Bangunan</a>
                    <a class="dropdown-item" href="biayatetap">Biaya Tetap</a>
                    <a class="dropdown-item" href="biayasks">Biaya SKS</a>
                    <a class="dropdown-item" href="biayapraktikum">Biaya Praktikum</a>
                    <h6 class="dropdown-header text-info">Non-Transitoris:</h6>
                    <a class="dropdown-item" href="registrasi">Registrasi</a>
                    <a class="dropdown-item" href="perpustakaan">Perpustakaan</a>
                    <a class="dropdown-item" href="kemahasiswaan">Kemahasiswaan</a>
                    <a class="dropdown-item" href="kerjapraktek">KP</a>
                    <a class="dropdown-item" href="tugasakhir">TA</a>
                    <a class="dropdown-item" href="biayapbma">Biaya PBMA</a>
                    <a class="dropdown-item" href="biayauts">Biaya UTS</a>
                    <a class="dropdown-item" href="biayauas">Biaya UAS</a>
                    <a class="dropdown-item" href="biayawisuda">Biaya Wisuda</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>RAB</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <a class="dropdown-item" href="/gajipegawai">Gaji Pegawai</a>
                    <a class="dropdown-item" href="pengajarandanpendidikan">Pengajaran & Pendidikan</a>
                    <a class="dropdown-item" href="administrasiketatausahaan">Administrasi/Ketatausahaan</a>
                    <a class="dropdown-item" href="rumahtangga">Rumah Tangga</a>
                    <a class="dropdown-item" href="pemeliharaandanperbaikan">Pemeliharaan & Perbaikan</a>
                    <a class="dropdown-item" href="investasi">Investasi</a>
                    <a class="dropdown-item" href="akreditasiprodi">Akreditasi Prodi (MI dan TI)</a>
                </div>
            </li>
            

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Perencanaan</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/mutasi">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Mutasi</span></a>
            </li>
        </ul>


        <!-- /.content-wrapper -->
        @yield('conten')
        @yield('body')

    </div>
    <!-- /#wrapper -->

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
                    <a class="btn btn-primary" href="/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

      
    <script src={{ url('assets1/js/jquery.js')}}></script>
    <script src={{ url('assets1/js/bootstrap.js')}}></script>
    <script src={{ url('assets1/js/rupiah.js')}}></script>

    <!-- Bootstrap core JavaScript-->
    <script src={{ url('assets1/vendor/jquery/jquery.min.js')}}></script>
    <script src={{ url('assets1/vendor/bootstrap/js/bootstrap.bundle.min.js')}}></script>

    <!-- Core plugin JavaScript-->
    <script src={{ url('assets1/vendor/jquery-easing/jquery.easing.min.js')}}></script>

    <!-- Page level plugin JavaScript-->
    <script src={{ url('assets1/vendor/chart.js/Chart.min.js')}}></script>
    <script src={{ url('assets1/vendor/datatables/jquery.dataTables.js')}}></script>
    <script src={{ url('assets1/vendor/datatables/dataTables.bootstrap4.js')}}></script>

    <!-- Custom scripts for all pages-->
    <script src={{ url('assets1/js/sb-admin.min.js')}}></script>

    <!-- Demo scripts for this page-->
    <script src={{ url('assets1/js/demo/datatables-demo.js')}}></script>
    <script src={{ url('assets1/js/demo/chart-area-demo.js')}}></script>
    <script type="text/javascript">
        function typeB(){
            var getType = document.getElementById("kode_pos").value;
            if(getType=="B1"){
                document.getElementById('typeBOut1').value="GAJI PEGAWAI";
                document.getElementById('typeBOut2').value="GAJI PEGAWAI";
            }else if(getType=="B2"){
                document.getElementById('typeBOut1').value="PENGAJARAN DAN PENDIDIKAN";
                document.getElementById('typeBOut2').value="PENGAJARAN DAN PENDIDIKAN";
            }else if(getType=="B3"){
                document.getElementById('typeBOut1').value="ADMINISTRASI/KETATAUSAHAAN";
                document.getElementById('typeBOut2').value="ADMINISTRASI/KETATAUSAHAAN";
            }else if(getType=="B4"){
                document.getElementById('typeBOut1').value="RUMAH TANGGA";
                document.getElementById('typeBOut2').value="RUMAH TANGGA";
            }else if(getType=="B5"){
                document.getElementById('typeBOut1').value="Pemeliharaan dan Perbaikan";
                document.getElementById('typeBOut2').value="Pemeliharaan dan Perbaikan";
            }else if(getType=="B6"){
                document.getElementById('typeBOut1').value="INVESTASI";               
                document.getElementById('typeBOut2').value="INVESTASI"; 
            }else{
                document.getElementById('typeBOut1').value="Administrasi Prodi (MI dan TI)";
                document.getElementById('typeBOut2').value="Administrasi Prodi (MI dan TI)";
            }
        }        
    </script>
</body>

</html>
