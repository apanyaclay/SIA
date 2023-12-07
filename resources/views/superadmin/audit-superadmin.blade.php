@extends('layouts.main_superadmin')

@section('container')
<h1 class="jadwal h3 mb-0 text-gray-800 mb-5" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> HISTORY &nbsp;  LOG</h1>
                                   
<!-- Content Row -->
<div class="row">


    
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
           <a href="/log_absensi_kelas"> <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text font-weight-bold text-primary text-uppercase mb-1">
                            Log Absensi Kelas</div>
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid fa-pen-to-square fa-xl" style="color: gray"></i>
                    </div>
                </div>
            </div></a>
        </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
           <a href="/log_absensi_ekskul"> <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text font-weight-bold text-primary text-uppercase mb-1">
                            Log Absensi Ektrakurikuler</div>
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid fa-pen-to-square fa-xl" style="color: gray"></i>
                    </div>
                </div>
            </div></a>
        </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
           <a href="/log_nilai"> <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text font-weight-bold text-primary text-uppercase mb-1">
                            Log Nilai</div>
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid fa-pen-to-square fa-xl" style="color: gray"></i>
                    </div>
                </div>
            </div></a>
        </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
           <a href="/log_nilai_ekskul"> <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text font-weight-bold text-primary text-uppercase mb-1">
                            Log Nilai Ekstrakurikuler</div>
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid fa-pen-to-square fa-xl" style="color: gray"></i>
                    </div>
                </div>
            </div></a>
        </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
           <a href="/log_prestasi"> <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text font-weight-bold text-primary text-uppercase mb-1">
                            Log Prestasi</div>
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid fa-pen-to-square fa-xl" style="color: gray"></i>
                    </div>
                </div>
            </div></a>
        </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
           <a href="/log_status_kip_kps_pip"> <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text font-weight-bold text-primary text-uppercase mb-1">
                            Log Status KIP KPS</div>
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid fa-pen-to-square fa-xl" style="color: gray"></i>
                    </div>
                </div>
            </div></a>
        </div>
    </div>


     <!-- Log Role -->
    
     <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
           <a href="/log_roles"> <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text font-weight-bold text-primary text-uppercase mb-1">
                            Log Role</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-xl" style="color: gray;"></i>
                    </div>
                </div>
            </div></a>
        </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
           <a href="/log_role_assignment"> <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text font-weight-bold text-primary text-uppercase mb-1">
                            Log Role Assignment</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-xl" style="color: gray;"></i>
                    </div>
                </div>
            </div></a>
        </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
           <a href="/log_tata_usaha"> <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text font-weight-bold text-primary text-uppercase mb-1">
                            Log Tata Usaha</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-xl" style="color: gray;"></i>
                    </div>
                </div>
            </div></a>
        </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
           <a href="/log_kepala_sekolah"> <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text font-weight-bold text-primary text-uppercase mb-1">
                            Log Kepala Sekolah</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-xl" style="color: gray;"></i>
                    </div>
                </div>
            </div></a>
        </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
           <a href="/log_siswa"> <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text font-weight-bold text-primary text-uppercase mb-1">
                            Log Siswa</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-xl" style="color: gray;"></i>
                    </div>
                </div>
            </div></a>
        </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
           <a href="/log_guru"> <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text font-weight-bold text-primary text-uppercase mb-1">
                            Log Guru</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-xl" style="color: gray;"></i>
                    </div>
                </div>
            </div></a>
        </div>
    </div>


    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
           <a href="/log_wali_siswa"> <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text font-weight-bold text-primary text-uppercase mb-1">
                            Log Wali Siswa</div>
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid fa-id-card fa-xl" style="color: gray;"></i>
                    </div>
                </div>
            </div></a>
        </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
               <a href="/log_ekskul_siswa"> <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text font-weight-bold text-primary text-uppercase mb-1">
                                Log Ekstrakurikuler Siswa</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-id-card fa-xl" style="color: gray;"></i>
                        </div>
                    </div>
                </div></a>
            </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                   <a href="/log_rapor"> <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text font-weight-bold text-primary text-uppercase mb-1">
                                    Log Rapor</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-id-card fa-xl" style="color: gray;"></i>
                            </div>
                        </div>
                    </div></a>
                </div>
                </div>
        
    
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
           <a href="/log_kelas"> <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text font-weight-bold text-primary text-uppercase mb-1">
                            Log Kelas</div>
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid fa-chalkboard-user fa-xl" style="color: gray;"></i>
                    </div>
                </div>
            </div></a>
        </div>
    </div>
    

<div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
       <a href="/log_ekskul"> <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text font-weight-bold text-primary text-uppercase mb-1">
                        Log Ekstrakurikuler</div>
                </div>
                <div class="col-auto">
                    <i class="fa-solid fa-chalkboard-user fa-xl" style="color: gray;"></i>
                </div>
            </div>
        </div></a>
    </div>
</div>

<div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
       <a href="/log_mata_pelajaran"> <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text font-weight-bold text-primary text-uppercase mb-1">
                        Log Mata Pelajaran</div>
                </div>
                <div class="col-auto">
                    <i class="fa-solid fa-chalkboard-user fa-xl" style="color: gray;"></i>
                </div>
            </div>
        </div></a>
    </div>
</div>

<div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
       <a href="/log_jadwal_mapel"> <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text font-weight-bold text-primary text-uppercase mb-1">
                        Log Jadwal Mata Pelajaran</div>
                </div>
                <div class="col-auto">
                    <i class="fa-solid fa-chalkboard-user fa-xl" style="color: gray;"></i>
                </div>
            </div>
        </div></a>
    </div>
</div>


</div>

<!-- kedua -->
<div class="row">

    

</div>
</div>
</div>


@endsection