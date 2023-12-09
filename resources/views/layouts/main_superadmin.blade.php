<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Kepala Sekolah</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/bc3cf86588.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/bc3cf86588.js" crossorigin="anonymous"></script>  
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-grid.css') }}">     
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
@include('sweetalert::alert')
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
     <!-- Sidebar -->
     <ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #748E63;">
 
         <!-- Sidebar - Brand -->
         <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
             <div class="sidebar-brand-text mx-3"><img class="logo3 mt-5" src="{{ asset('assets/img/logo.png') }}"  height="80" width="90" alt=""> </div>
         </a>
 <br>
         <!-- Nav Item - Dashboard -->
         <li class="nav-item active">
             <a class="nav-link" href="{{ route('kepsek')}}">
                 <!-- <i class="fas fa-fw fa-tachometer-alt"></i> -->
                 <span>D A S H B O A R D </span></a>
         </li>
 
         <!-- Pembatas -->
         <hr class="sidebar-divider">
 
          <!-- NManajemen User -->
          <li class="nav-item">
             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                 aria-expanded="true" aria-controls="collapseUtilities">
                 <i class="fa-solid fa-list-check" style="color: #ffc527;"></i>                    
                 <span>Manajemen User</span>
             </a>
             <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                 data-parent="#accordionSidebar">
                 <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('daftarkelassiswasadmin')}}">SISWA</a>
                    <a class="collapse-item" href="{{ route('daftarptksadmin')}}">PTK</a>
                    <a class="collapse-item" href="{{ route('daftartusadmin')}}">Tata Usaha</a>
                 </div>
             </div>
         </li>
 
           <!-- Pembatas -->
           <hr class="sidebar-divider">
 
 
         <!-- Rapor Siswa -->
         <li class="nav-item">
             <a class="nav-link collapsed" href="{{ route('listraporsiswasadmin')}}"  data-target="#collapseTwo"
                 aria-expanded="true" aria-controls="collapseTwo">
                 <i class="fa fa-address-book" style="color: #ffc527;"></i>
                 <span>Nilai Siswa</span>
             </a>
         </li>
 
        
          <!-- Divider -->
          <hr class="sidebar-divider">
 
          <!-- Daftar MaPel -->
          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ route('daftarkelasMP')}}"  data-target="#collapsePages"
                  aria-expanded="true" aria-controls="collapsePages">
                  <i class="fa-solid fa-list" style="color: #ffc527;"></i>
                  <span> Mata Pelajaran</span>
              </a>
          </li>
 
 
              <!-- Pembatas -->
         <hr class="sidebar-divider">
 
 
         <!-- Jadwal  Siswa-->
         <li class="nav-item">
             <a class="nav-link collapsed" href="{{ route('daftarkelasJS')}}"  data-target="#collapseTwo"
                 aria-expanded="true" aria-controls="collapseTwo">
                 <i class="	fa fa-calendar" style="color: #ffc527;"></i>
                 <span>Jadwal Siswa</span>
             </a>
         </li>
 
          
          <!-- Divider -->
          <hr class="sidebar-divider">
 
          <!-- Validate-->
          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ route('daftarkelasVR')}}"  data-target="#collapsePages"
                  aria-expanded="true" aria-controls="collapsePages">
                  <i class="fa-solid fa-file-circle-check"  style="color: #ffc527;"></i>
                  <span>Validasi Rapor</span>
              </a>
          </li>
 
            <!-- Divider -->
            <hr class="sidebar-divider">
 
            <!-- Daftar Ekstrakurikuler-->
            <li class="nav-item">
             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities1"
                 aria-expanded="true" aria-controls="collapseUtilities">
                 <i class="fa-solid fa-list-check" style="color: #ffc527;"></i>                    
                 <span>Ekstrakurikuler</span>
             </a>
             <div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities"
                 data-parent="#accordionSidebar">
                 <div class="bg-white py-2 collapse-inner rounded">
                     <a class="collapse-item" href="{{ route('daftarekskulsadmin')}}">Daftar Ekstrakurikuler</a>
                     <a class="collapse-item" href="{{ route('daftarekskulsiswasadmin')}}">Ekstrakurikuler Siswa</a>
                 </div>
             </div>
         </li>
 
          
          <!-- Divider -->
          <hr class="sidebar-divider">
 
          <!-- Audit -->
          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ route('auditsadmin')}}"  data-target="#collapsePages"
                  aria-expanded="true" aria-controls="collapsePages">
                  <i class="fa-solid fa-circle-check" style="color: #ffc527;"></i>
                  <span> Audit</span>
              </a>
          </li>
 
         <!-- Divider -->
         <hr class="sidebar-divider">
 
         <!-- Profile -->
         <li class="nav-item">
             <a class="nav-link collapsed" href="{{ route('profilesadmin')}}"  data-target="#collapsePages"
                 aria-expanded="true" aria-controls="collapsePages">
                 <i class="fas fa-user" style="color: #ffc527;"></i>
                 <span> Profile</span>
             </a>
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
 
                 <!-- Topbar Search -->
                 <!-- <form
                     class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                     <div class="input-group">
                         <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                             aria-label="Search" aria-describedby="basic-addon2">
                         <div class="input-group-append">
                             <button class="btnsearch"   type="button">
                                 <i class="fas fa-search fa-sm"></i>
                             </button>
                         </div>
                     </div>
                 </form> -->
 
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
                                         <button class="btn btn-primary" style="color: #748E63;" type="button">
                                             <i class="fas fa-search fa-sm"></i>
                                         </button>
                                     </div>
                                 </div>
                             </form>
                         </div>
                     </li>
 
                    
                     
 
                         
 
                         <!-- USER -->
                         <li class="nav-item dropdown no-arrow">
                             <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <span class="mr-2 d-none d-lg-inline text-gray-600 small">Kepala Sekolah</span>
                                 <img class="img-profile rounded-circle"
                                     src="{{ asset('assets/img/undraw_profile.svg') }}">
                             </a>
                             <!-- Dropdown  -->
                             <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                 aria-labelledby="userDropdown">
                                 <a class="dropdown-item" href="{{ route('profilesadmin')}}">
                                     <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                     Profile
                                 </a>
                                 <div class="dropdown-divider"></div>
                                 <a class="dropdown-item" href="{{route('logout')}}" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                             </div>
                         </li>
                     </ul>
                 </nav>
                 <!-- End of Topbar -->
 
                 <!-- ISI DASHBOARD -->
                 <div class="container-fluid">
                @yield('container')
                 </div>
                 <!-- /.container-fluid -->
 
             </div>
             <!-- End of Main Content -->
         </div>
         <!-- End of Content Wrapper -->
 
     </div>
     <!-- End of Page Wrapper -->
 
             <!-- Footer -->
             <footer class="footer" style="border-top: solid orange;">
                 <div class="about">
                     <div class="row">
                       <div class="col-3">
                         <img class="logo ml-3 " src="{{ asset('assets/img/logo.png') }}" alt="">
                       </div>
                       <div class="col-9">
                         <div class="row">
                           <div class="col-2">
                             <div>Alamat</div>
                             <div>Kec./Kota&</div>
                             <div>Provinsi</div>
                             <div>Phone</div>
                           </div>
                           <div class="col-6">
                             <div>No.44 A, Jl. Kilang Padi Pasar 8 veteran No.kel, Tj. Mulia </div>
                             <div>Kec. Medan Deli, Kota Medan</div>
                             <div>Sumatera Utara ,20241</div>
                             <div>+62 853 7171 6868</div>      
                 <!-- social media -->
                             <div class="flex-center mt-5">
                               <a href="https://www.instagram.com/smpsamalyatulhuda/"><i class="fa fa-twitter fa-2x icon-3d"></i></a>
                               <a href="https://www.instagram.com/smpsamalyatulhuda/"><i class="fa fa-facebook fa-2x icon-3d"></i></a>
                               <a href="https://www.instagram.com/smpsamalyatulhuda/"><i class="fa fa-instagram fa-2x icon-3d"></i></a>
                               <a href="https://www.instagram.com/smpsamalyatulhuda/"><i class="fa fa-whatsapp fa-2x icon-3d"></i></a>
                             </div>
                           </div>
                           <!-- <div class="col-4">
                             <h4 class="maps">MAPS</h4>
                             <iframe  class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.6748365743974!2d98.6574579!3d3.6613401999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312d98f0bbd389%3A0x30f2a9b5f41969e0!2sYayasan%20Pendidikan%20Amalyatul%20Huda!5e0!3m2!1sen!2sid!4v1699728263813!5m2!1sen!2sid" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
                           </div> -->
                         </div>
                       </div>
                     </div>
                   </div>
                    <div class="copyright"> Copyright@2023 Kelompok 3 Manajemen Sistem Basis Data Kom C'22</div>
             
             </footer>
             <!-- End of Footer -->
 
       
 
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
                    <h5 class="modal-title" id="exampleModalLabel">Anda yakin untuk keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih  "Logout" jika kamu yakin untuk keluar</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{route('logout')}}">Logout</a>
                </div>
            </div>
        </div>
    </div>
 
 
     <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
     <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
     <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
     <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>
     <script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script>
     <script src="{{ asset('assets/js/demo/chart-area-demo.js') }}"></script>
     <script src="{{ asset('assets/js/demo/chart-pie-demo.js') }}"></script>
 
 </body>
 
 </html>