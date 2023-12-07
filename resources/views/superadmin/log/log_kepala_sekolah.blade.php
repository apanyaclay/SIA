@extends('layouts.main_superadmin')

@section('container')
<h1 class="jadwal h3 mb-0 text-gray-800 " style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> LOG KEPALA SEKOLAH</h1></div><br>
                                       
<!-- DataTales Example -->
<div class="card shadow mb-4">
   <div class="card-body">
       <div class="table-responsive">
           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead style="background-color: #748E63; color: #000;">
                <tr>
                    <th>ID_Kepsek</th>
                    <th>Nama_Kepsek</th>
                    <th>Jenis_Kelamin</th>
                    <th>Tempat_Lahir</th>
                    <th>Tanggal_Lahir</th>
                    <th>Jenjang_Pendidikan</th>
                    <th>Status</th>
                    <th>Action</th>
                    <th>Username</th>
                    <th>Waktu</th>
                    
                    
                </tr>
            </thead>
            <tbody class="table-group-divider ">
                <tr>
                 @foreach($log_kepala_sekolah as $logkepsek)
                 <td>{{ $logkepsek->ID_Kepsek }}</td>
                 <td>{{ $logkepsek->Nama_Kepsek }}</td>
                 <td>{{ $logkepsek->Jenis_Kelamin }}</td>
                 <td>{{ $logkepsek->Tempat_Lahir }}</td>
                 <td>{{ $logkepsek->Tanggal_Lahir }}</td>
                 <td>{{ $logkepsek->Jenjang_Pendidikan }}</td>
                 <td>{{ $logkepsek->Status }}</td>
                 <td>{{ $logkepsek->Action }}</td>
                 <td>{{ $logkepsek->Username }}</td>
                 <td>{{ $logkepsek->Waktu }}</td>
                 
                </tr>  
                @endforeach
                   
               </tbody>
           </table>
       </div>
   </div>
</div>
        
@endsection