@extends('layouts.main_superadmin')

@section('container')
<h1 class="jadwal h3 mb-0 text-gray-800 " style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> LOG ABSENSI KELAS</h1></div><br>
                                       
<!-- DataTales Example -->
<div class="card shadow mb-4">
   <div class="card-body">
       <div class="table-responsive">
           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead style="background-color: #748E63; color: #000;">
                <tr>
                    <th>ID_Absensi</th>
                    <th>ID_Ekskul_Siswa</th>
                    <th>Kelas</th>
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
                 @foreach($log_absensi_kelas as $logabsenkelas)
                 <td>{{ $logabsenkelas->ID_Absensi }}</td>
                 <td>{{ $logabsenkelas->ID_Ekskul_Siswa }}</td>
                 <td>{{ $logabsenkelas->Kelas }}</td>
                 <td>{{ $logabsenkelas->Tanggal }}</td>
                 <td>{{ $logabsenkelas->Hadir }}</td>
                 <td>{{ $logabsenkelas->Izin }}</td>
                 <td>{{ $logabsenkelas->Alpa }}</td>
                 <td>{{ $logabsenkelas->Sakit }}</td>
                 <td>{{ $logabsenkelas->Action }}</td>
                 <td>{{ $logabsenkelas->Username }}</td>
                 <td>{{ $logabsenkelas->Waktu }}</td>
                 
                </tr>
                @endforeach
                
               </tbody>
           </table>
       </div>
   </div>
</div>
        
@endsection