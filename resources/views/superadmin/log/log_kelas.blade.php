@extends('layouts.main_superadmin')

@section('container')
<h1 class="jadwal h3 mb-0 text-gray-800 " style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> LOG KELAS</h1></div><br>
                                       
<!-- DataTales Example -->
<div class="card shadow mb-4">
   <div class="card-body">
       <div class="table-responsive">
           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead style="background-color: #748E63; color: #000;">
                <tr>
                    <th>ID_Kelas</th>
                    <th>Wali_Kelas</th>
                    <th>Nama_Kelas</th>
                    <th>Tingkatan</th>
                    <th>Kelompok_Kelas</th>
                    
                    
                </tr>
            </thead>
            <tbody class="table-group-divider ">
                <tr>
                 @foreach($log_kelas as $logkelas)
                 <td>{{ $logkelas->ID_Kelas }}</td>
                 <td>{{ $logkelas->Wali_Kelas }}</td>
                 <td>{{ $logkelas->Nama_Kelas }}</td>
                 <td>{{ $logkelas->Tingkatan }}</td>
                 <td>{{ $logkelas->Kelompok_Kelas }}</td>
                 
                 
                 
                </tr>  
                @endforeach
                   
               </tbody>
           </table>
       </div>
   </div>
</div>
        
@endsection