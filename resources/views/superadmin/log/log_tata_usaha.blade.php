@extends('layouts.main_superadmin')

@section('container')
<h1 class="jadwal h3 mb-0 text-gray-800 " style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> LOG TATA USAHA</h1></div><br>
                                       
<!-- DataTales Example -->
<div class="card shadow mb-4">
   <div class="card-body">
       <div class="table-responsive">
           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead style="background-color: #748E63; color: #000;">
                <tr>
                    <th>ID_Pegawai</th>
                    <th>Nama_Pegawai</th>
                    <th>Jenis_Kelamin</th>
                    <th>TMT_Kerja</th>
                    <th>Tempat_Lahir</th>
                    <th>Tanggal_Lahir</th>
                    <th>Jenjang_Pendidikan</th>
                    <th>Status</th>
                    <th>Action</th>
                    <th>Username</th>
                    <th>Waktu</th>
                    
                    
                </tr>
            </thead>
           <tbody>
                <tr>
                 @foreach($log_tata_usaha as $logtatausaha)
                 <td>{{ $logtatausaha->ID_Pegawai}}</td>
                 <td>{{ $logtatausaha->Nama_Pegawai }}</td>
                 <td>{{ $logtatausaha->Jenis_Kelamin }}</td>
                 <td>{{ $logtatausaha->TMT_Kerja }}</td>
                 <td>{{ $logtatausaha->Tempat_Lahir }}</td>
                 <td>{{ $logtatausaha->Tanggal_Lahir }}</td>
                 <td>{{ $logtatausaha->Jenjang_Pendidikan }}</td>
                 <td>{{ $logtatausaha->Action }}</td>
                 <td>{{ $logtatausaha->Username }}</td>
                 <td>{{ $logtatausaha->Waktu }}</td>
                 
                </tr> 
                @endforeach
                   
               </tbody>
           </table>
       </div>
   </div>
</div>
        
@endsection