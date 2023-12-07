@extends('layouts.main_superadmin')

@section('container')
<h1 class="jadwal h3 mb-0 text-gray-800 " style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> LOG EKSTRAKURIKULER SISWA</h1></div><br>
                                       
<!-- DataTales Example -->
<div class="card shadow mb-4">
   <div class="card-body">
       <div class="table-responsive">
           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead style="background-color: #748E63; color: #000;">
                <tr>
                    <th>ID_Ekskul_Siswa</th>
                    <th>Kode_Ekskul</th>
                    <th>ID_Siswa</th>
                    <th>Thn_Ajaran</th>
                    <th>Action</th>
                    <th>Username</th>
                    <th>Waktu</th>
                </tr>
            </thead>
            <tbody class="table-group-divider ">
                <tr>
                 @foreach($log_ekskul_siswa as $logekskulsiswa)
                 <td>{{ $logekskulsiswa->ID_Ekskul_Siswa }}</td>
                 <td>{{ $logekskulsiswa->Kode_Ekskul }}</td>
                 <td>{{ $logekskulsiswa->ID_Siswa }}</td>
                 <td>{{ $logekskulsiswa->Thn_Ajaran }}</td>
                 <td>{{ $logekskulsiswa->Action }}</td>
                 <td>{{ $logekskulsiswa->Username }}</td>
                 <td>{{ $logekskulsiswa->Waktu }}</td>
                
                </tr>
                @endforeach
               </tbody>
           </table>
       </div>
   </div>
</div>
        
@endsection