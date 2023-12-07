@extends('layouts.main_superadmin')

@section('container')
<h1 class="jadwal h3 mb-0 text-gray-800 " style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> LOG ABSENSI EKSTRAKURIKULER</h1></div><br>
                                       
<!-- DataTales Example -->
<div class="card shadow mb-4">
   <div class="card-body">
       <div class="table-responsive">
           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead style="background-color: #748E63; color: #000;">
                   <tr>
                       <th>ID_Absensi</th>
                       <th>ID_Ekskul_Siswa</th>
                       <th>Tanggal</th>
                       <th>Hadir</th>
                       <th>Izin</th>
                       <th>Alpa</th>
                       <th>Sakit</th>
                       <th>Action</th>
                       <th>Username</th>
                       <th>Waktu</th>
                   </tr>
               </thead>
               <tbody class="table-group-divider ">
                   <tr>
                    @foreach($log_absensi_ekskul as $logabsenekskul)
                    <td>{{ $logabsenekskul->ID_Absensi }}</td>
                    <td>{{ $logabsenekskul->ID_Ekskul_Siswa }}</td>
                    <td>{{ $logabsenekskul->Tanggal }}</td>
                    <td>{{ $logabsenekskul->Hadir }}</td>
                    <td>{{ $logabsenekskul->Izin }}</td>
                    <td>{{ $logabsenekskul->Alpa }}</td>
                    <td>{{ $logabsenekskul->Sakit }}</td>
                    <td>{{ $logabsenekskul->Action }}</td>
                    <td>{{ $logabsenekskul->Username }}</td>
                    <td>{{ $logabsenekskul->Waktu }}</td>
                   
                   </tr>
                   @endforeach
               </tbody>
           </table>
       </div>
   </div>
</div>
        
@endsection