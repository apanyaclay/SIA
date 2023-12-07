@extends('layouts.main_superadmin')

@section('container')
<h1 class="jadwal h3 mb-0 text-gray-800 " style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> LOG NILAI KELAS</h1></div><br>
                                       
<!-- DataTales Example -->
<div class="card shadow mb-4">
   <div class="card-body">
       <div class="table-responsive">
           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead style="background-color: #748E63; color: #000;">
                <tr>
                    <th>Nilai_ID</th>
                    <th>Kode_Mapel</th>
                    <th>ID_Siswa</th>
                    <th>Thn_Ajaran</th>
                    <th>Jenis</th>
                    <th>Nilai_Pengetahuan</th>
                    <th>Nilai_Keterampilan</th>
                    <th>Action</th>
                    <th>Username</th>
                    <th>Waktu</th>
                    
                    
                </tr>
            </thead>
           <tbody>
                <tr>
                 @foreach($log_nilai as $lognilai)
                 <td>{{ $lognilai->Nilai_ID}}</td>
                 <td>{{ $lognilai->Kode_Mapel }}</td>
                 <td>{{ $lognilai->ID_Siswa }}</td>
                 <td>{{ $lognilai->Thn_Ajaran }}</td>
                 <td>{{ $lognilai->Jenis }}</td>
                 <td>{{ $lognilai->Nilai_Pengetahuan }}</td>
                 <td>{{ $lognilai->Nilai_Keterampilan }}</td>
                 <td>{{ $lognilai->Action }}</td>
                 <td>{{ $lognilai->Username }}</td>
                 <td>{{ $lognilai->Waktu }}</td>
                 
                </tr> 
                @endforeach
               </tbody>
           </table>
       </div>
   </div>
</div>
        
@endsection