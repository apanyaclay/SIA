@extends('layouts.main_superadmin')

@section('container')
<h1 class="jadwal h3 mb-0 text-gray-800 " style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> LOG RAPOR</h1></div><br>
                                       
<!-- DataTales Example -->
<div class="card shadow mb-4">
   <div class="card-body">
       <div class="table-responsive">
           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead style="background-color: #748E63; color: #000;">
                <tr>
                    <th>ID_Rapor</th>
                    <th>ID_Nilai</th>
                    <th>ID_Nilai_Ekskul</th>
                    <th>ID_Prestasi</th>
                    <th>ID_Absensi</th>
                    <th>Action</th>
                    <th>Username</th>
                    <th>Waktu</th>
                    
                    
                </tr>
            </thead>
           <tbody>
                <tr>
                 @foreach($log_rapor as $lograpor)
                 <td>{{ $lograpor->ID_Rapor}}</td>
                 <td>{{ $lograpor->ID_Nilai }}</td>
                 <td>{{ $lograpor->ID_Nilai_Ekskul }}</td>
                 <td>{{ $lograpor->ID_Prestasi }}</td>
                 <td>{{ $lograpor->ID_Absensi }}</td>
                 <td>{{ $lograpor->Action }}</td>
                 <td>{{ $lograpor->Username }}</td>
                 <td>{{ $lograpor->Waktu }}</td>
                 
                </tr> 
                @endforeach
               </tbody>
           </table>
       </div>
   </div>
</div>
        
@endsection