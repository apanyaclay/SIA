@extends('layouts.main_superadmin')

@section('container')
<h1 class="jadwal h3 mb-0 text-gray-800 " style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> LOG JADWAL PELAJARAN</h1></div><br>
                                       
<!-- DataTales Example -->
<div class="card shadow mb-4">
   <div class="card-body">
       <div class="table-responsive">
           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead style="background-color: #748E63; color: #000;">
                <tr>
                    <th>ID_Jadwal</th>
                    <th>ID_Kelas</th>
                    <th>Kode_Mapel</th>
                    <th>ID_Thn_Ajaran</th>
                    <th>Waktu_Mulai</th>
                    <th>Waktu_Selesai</th>
                    <th>Hari</th>
                    <th>Action</th>
                    <th>Username</th>
                    <th>Waktu</th>
                    
                </tr>
            </thead>
            <tbody class="table-group-divider ">
                <tr>
                 @foreach($log_jadwal_mapel as $logjadwalmapel)
                 <td>{{ $logjadwalmapel->ID_Jadwal }}</td>
                 <td>{{ $logjadwalmapel->ID_Kelas }}</td>
                 <td>{{ $logjadwalmapel->Kode_Mapel }}</td>
                 <td>{{ $logjadwalmapel->ID_Thn_Ajaran }}</td>
                 <td>{{ $logjadwalmapel->Waktu_Mulai }}</td>
                 <td>{{ $logjadwalmapel->Waktu_Selesai }}</td>
                 <td>{{ $logjadwalmapel->Hari }}</td>
                 <td>{{ $logjadwalmapel->Action }}</td>
                 <td>{{ $logjadwalmapel->Username }}</td>
                 <td>{{ $logjadwalmapel->Waktu }}</td>
                 
                 
                </tr>  
                @endforeach
               </tbody>
           </table>
       </div>
   </div>
</div>
        
@endsection