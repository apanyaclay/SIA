@extends('layouts.main_superadmin')

@section('container')
<h1 class="jadwal h3 mb-0 text-gray-800 " style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> LOG EKSTRAKURIKULER</h1></div><br>
                                       
<!-- DataTales Example -->
<div class="card shadow mb-4">
   <div class="card-body">
       <div class="table-responsive">
           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead style="background-color: #748E63; color: #000;">
                <tr>
                    <th>Kode_Ekskul</th>
                    <th>Nama_Ekskul</th>
                    <th>Guru_Ekskul</th>
                    <th>Hari</th>
                    <th>Waktu_Mulai</th>
                    <th>Waktu_Selesai</th>
                    <th>Action</th>
                    <th>Username</th>
                    <th>Waktu</th>
                </tr>
            </thead>
            <tbody class="table-group-divider ">
                <tr>
                 @foreach($log_ekstrakurikuler as $logekskul)
                 <td>{{ $logekskul->Kode_Ekskul }}</td>
                 <td>{{ $logekskul->Nama_Ekskul }}</td>
                 <td>{{ $logekskul->Guru_Ekskul }}</td>
                 <td>{{ $logekskul->HARI }}</td>
                 <td>{{ $logekskul->Waktu_Mulai }}</td>
                 <td>{{ $logekskul->Waktu_Selesai }}</td>
                 <td>{{ $logekskul->Action }}</td>
                 <td>{{ $logekskul->Username }}</td>
                 <td>{{ $logekskul->Waktu }}</td>
                 
                </tr>  
                @endforeach
               </tbody>
           </table>
       </div>
   </div>
</div>
        
@endsection