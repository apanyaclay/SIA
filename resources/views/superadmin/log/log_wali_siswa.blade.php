@extends('layouts.main_superadmin')

@section('container')
<h1 class="jadwal h3 mb-0 text-gray-800 " style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> LOG WALI SISWA</h1></div><br>
                                       
<!-- DataTales Example -->
<div class="card shadow mb-4">
   <div class="card-body">
       <div class="table-responsive">
           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead style="background-color: #748E63; color: #000;">
                <tr>
                    <th>ID_Wali</th>
                    <th>Nama_Wali</th>
                    <th>Siswa_yang_Diwakilkan</th>
                    <th>Pekerjaan_Wali</th>
                    <th>No_Rek_Bank</th>
                    <th>Bank_Atas_Nama</th>
                    <th>Action</th>
                    <th>Username</th>
                    <th>Waktu</th>
                    
                    
                </tr>
            </thead>
           <tbody>
                <tr>
                 @foreach($log_wali_siswa as $logwalisiswa)
                 <td>{{ $logwalisiswa->ID_Wali}}</td>
                 <td>{{ $logwalisiswa->Nama_Wali }}</td>
                 <td>{{ $logwalisiswa->Siswa_yang_Diwakilkan }}</td>
                 <td>{{ $logwalisiswa->Pekerjaan_Wali }}</td>
                 <td>{{ $logwalisiswa->No_Rek_Bank }}</td>
                 <td>{{ $logwalisiswa->Action }}</td>
                 <td>{{ $logwalisiswa->Username }}</td>
                 <td>{{ $logwalisiswa->Waktu }}</td>
                 
                </tr> 
                @endforeach
                   
               </tbody>
           </table>
       </div>
   </div>
</div>
        
@endsection