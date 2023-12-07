@extends('layouts.main_superadmin')

@section('container')
<h1 class="jadwal h3 mb-0 text-gray-800 " style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> LOG STATUS KIP KPS DAN PIP</h1></div><br>
                                       
<!-- DataTales Example -->
<div class="card shadow mb-4">
   <div class="card-body">
       <div class="table-responsive">
           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead style="background-color: #748E63; color: #000;">
                <tr>
                    <th>ID_Status</th>
                    <th>Siswa_ID</th>
                    <th>Nama_Siswa</th>
                    <th>Status_KIP</th>
                    <th>No_KIP</th>
                    <th>Status_KPS</th>
                    <th>No_KPS</th>
                    <th>Status_Eligible_PIP</th>
                    <th>Alasan_Eligible_PIP</th>
                    <th>Action</th>
                    <th>Username</th>
                    <th>Waktu</th>
                    
                    
                </tr>
            </thead>
           <tbody>
                <tr>
                 @foreach($log_status_kip_kps_pip as $logkipkpspip)
                 <td>{{ $logkipkpspip->ID_Status}}</td>
                 <td>{{ $logkipkpspip->Siswa_ID }}</td>
                 <td>{{ $logkipkpspip->Nama_Siswa }}</td>
                 <td>{{ $logkipkpspip->Status_KIP }}</td>
                 <td>{{ $logkipkpspip->No_KIP }}</td>
                 <td>{{ $logkipkpspip->Status_KPS }}</td>
                 <td>{{ $logkipkpspip->No_KPS }}</td>
                 <td>{{ $logkipkpspip->Status_Eligible_PIP }}</td>
                 <td>{{ $logkipkpspip->Alasan_Eligible_PIP }}</td>
                 <td>{{ $logkipkpspip->Action }}</td>
                 <td>{{ $logkipkpspip->Username }}</td>
                 <td>{{ $logkipkpspip->Waktu }}</td>
                 
                </tr> 
                @endforeach
                   
               </tbody>
           </table>
       </div>
   </div>
</div>
        
@endsection