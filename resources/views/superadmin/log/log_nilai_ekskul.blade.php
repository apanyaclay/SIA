@extends('layouts.main_superadmin')

@section('container')
<h1 class="jadwal h3 mb-0 text-gray-800 " style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> LOG NILAI EKSTRAKURIKULER</h1></div><br>
                                       
<!-- DataTales Example -->
<div class="card shadow mb-4">
   <div class="card-body">
       <div class="table-responsive">
           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead style="background-color: #748E63; color: #000;">
                <tr>
                    <th>ID_Nilai</th>
                    <th>ID_Ekskul_Siswa</th>
                    <th>Nilai</th>
                    <th>Action</th>
                    <th>Username</th>
                    <th>Waktu</th>
                    
                    
                </tr>
            </thead>
           <tbody>
                <tr>
                 @foreach($log_nilai_ekskul as $lognilaiekskul)
                 <td>{{ $lognilaiekskul->ID_Nilai }}</td>
                 <td>{{ $lognilaiekskul->ID_Ekskul_Siswa }}</td>
                 <td>{{ $lognilaiekskul->Nilai }}</td>
                 <td>{{ $lognilaiekskul->Action }}</td>
                 <td>{{ $lognilaiekskul->Username }}</td>
                 <td>{{ $lognilaiekskul->Waktu }}</td>
                 
                </tr> 
                @endforeach
               </tbody>
           </table>
       </div>
   </div>
</div>
        
@endsection