@extends('layouts.main_superadmin')

@section('container')
<h1 class="jadwal h3 mb-0 text-gray-800 " style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> LOG MATA PELAJARAN</h1></div><br>
                                       
<!-- DataTales Example -->
<div class="card shadow mb-4">
   <div class="card-body">
       <div class="table-responsive">
           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead style="background-color: #748E63; color: #000;">
                <tr>
                    <th>Kode_Mapel</th>
                    <th>Nama_Mapel</th>
                    <th>KKM</th>
                    <th>Guru_Mapel</th>
                    <th>Action</th>
                    <th>Username</th>
                    <th>Waktu</th>
                    
                    
                </tr>
            </thead>
            <tbody class="table-group-divider ">
                <tr>
                 @foreach($log_mata_pelajaran as $logmapel)
                 <td>{{ $logmapel->Kode_Mapel }}</td>
                 <td>{{ $logmapel->Nama_Mapel }}</td>
                 <td>{{ $logmapel->KKM }}</td>
                 <td>{{ $logmapel->Guru_Mapel }}</td>
                 <td>{{ $logmapel->Action }}</td>
                 <td>{{ $logmapel->Username }}</td>
                 <td>{{ $logmapel->Waktu }}</td>
                 
                </tr> 
                @endforeach
               </tbody>
           </table>
       </div>
   </div>
</div>
        
@endsection