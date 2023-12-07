@extends('layouts.main_superadmin')

@section('container')
<h1 class="jadwal h3 mb-0 text-gray-800 " style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> LOG PRESTASI</h1></div><br>
                                       
<!-- DataTales Example -->
<div class="card shadow mb-4">
   <div class="card-body">
       <div class="table-responsive">
           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead style="background-color: #748E63; color: #000;">
                <tr>
                    <th>ID_Prestasi</th>
                    <th>Siswa</th>
                    <th>Jenis_Prestasi</th>
                    <th>Deskripsi</th>
                    <th>Tanggal</th>
                    <th>Action</th>
                    <th>Username</th>
                    <th>Waktu</th>
                    
                    
                </tr>
            </thead>
           <tbody>
                <tr>
                 @foreach($log_prestasi as $logprestasi)
                 <td>{{ $logprestasi->ID_Prestasi}}</td>
                 <td>{{ $logprestasi->Siswa }}</td>
                 <td>{{ $logprestasi->Jenis_Prestasi }}</td>
                 <td>{{ $logprestasi->Deskripsi }}</td>
                 <td>{{ $logprestasi->Tanggal }}</td>
                 <td>{{ $logprestasi->Action }}</td>
                 <td>{{ $logprestasi->Username }}</td>
                 <td>{{ $logprestasi->Waktu }}</td>
                 
                </tr> 
                @endforeach
               </tbody>
           </table>
       </div>
   </div>
</div>
        
@endsection