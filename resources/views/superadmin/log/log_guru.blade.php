@extends('layouts.main_superadmin')

@section('container')
<h1 class="jadwal h3 mb-0 text-gray-800 " style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> LOG GURU</h1></div><br>
                                       
<!-- DataTales Example -->
<div class="card shadow mb-4">
   <div class="card-body">
       <div class="table-responsive">
           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead style="background-color: #748E63; color: #000;">
                <tr>
                    <th>NUPTK</th>
                    <th>NIP</th>
                    <th>Nama_Guru</th>
                    <th>Jenis_Kelamin</th>
                    <th>Tempat_Lahir</th>
                    <th>Tanggal_Lahir</th>
                    <th>Status_Kepegawaian</th>
                    <th>Jenis_PTK</th>
                    <th>Jenjang_Pendidikan</th>
                    <th>TMT_Kerja</th>
                    <th>JJM</th>
                    <th>Status</th>
                    <th>Action</th>
                    <th>Username</th>
                    <th>Waktu</th>
                </tr>
            </thead>
            <tbody class="table-group-divider ">
                <tr>
                 @foreach($log_guru as $logguru)
                 <td>{{ $logguru->NUPTK }}</td>
                 <td>{{ $logguru->NIP }}</td>
                 <td>{{ $logguru->Nama_Guru }}</td>
                 <td>{{ $logguru->Jenis_Kelamin }}</td>
                 <td>{{ $logguru->Tempat_Lahir }}</td>
                 <td>{{ $logguru->Tanggal_Lahir }}</td>
                 <td>{{ $logguru->Status_Kepegawaian }}</td>
                 <td>{{ $logguru->Jenis_PTK }}</td>
                 <td>{{ $logguru->Jenjang_Pendidikan }}</td>
                 <td>{{ $logguru->TMT_Kerja }}</td>
                 <td>{{ $logguru->JJM }}</td>
                 <td>{{ $logguru->Status }}</td>
                 <td>{{ $logguru->Action }}</td>
                 <td>{{ $logguru->Username }}</td>
                 <td>{{ $logguru->Waktu }}</td>
                 
                </tr>  
                @endforeach
               </tbody>
           </table>
       </div>
   </div>
</div>
        
@endsection