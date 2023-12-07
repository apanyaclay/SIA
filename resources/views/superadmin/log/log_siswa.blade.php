@extends('layouts.main_superadmin')

@section('container')
<h1 class="jadwal h3 mb-0 text-gray-800 " style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> LOG SISWA</h1></div><br>
                                       
<!-- DataTales Example -->
<div class="card shadow mb-4">
   <div class="card-body">
       <div class="table-responsive">
           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead style="background-color: #748E63; color: #000;">
                <tr>
                    <th>NISN</th>
                    <th>NIPD</th>
                    <th>Nama_Siswa</th>
                    <th>Jenis_Kelamin</th>
                    <th>Tanggal_Lahir</th>
                    <th>Tempat_Lahir</th>
                    <th>Agama</th>
                    <th>Alamat</th>
                    <th>No_hp</th>
                    <th>Status_dlm_Klrg</th>
                    <th>Nama_Ayah</th>
                    <th>Nama_Ibu</th>
                    <th>Pekerjaan_Ayah</th>
                    <th>Pekerjaan_Ibu</th>
                    <th>Bank_Atas_Nama</th>
                    <th>Status_Siswa</th>
                    <th>Sekolah_Asal</th>
                    <th>Anak_Ke</th>
                    <th>Action</th>
                    <th>Username</th>
                    <th>Waktu</th>
                    
                    
                </tr>
            </thead>
           <tbody>
                <tr>
                 @foreach($log_siswa as $logsiswa)
                 <td>{{ $logsiswa->NISN}}</td>
                 <td>{{ $logsiswa->NIPD }}</td>
                 <td>{{ $logsiswa->Nama_Siswa }}</td>
                 <td>{{ $logsiswa->Jenis_Kelamin }}</td>
                 <td>{{ $logsiswa->Tanggal_Lahir }}</td>
                 <td>{{ $logsiswa->Tempat_Lahir }}</td>
                 <td>{{ $logsiswa->Agama }}</td>
                 <td>{{ $logsiswa->Alamat }}</td>
                 <td>{{ $logsiswa->No_hp }}</td>
                 <td>{{ $logsiswa->Status_dlm_Klrg }}</td>
                 <td>{{ $logsiswa->Nama_Ayah }}</td>
                 <td>{{ $logsiswa->Pekerjaan_Ayah }}</td>
                 <td>{{ $logsiswa->Pekerjaan_Ibu }}</td>
                 <td>{{ $logsiswa->Bank_Atas_Nama }}</td>
                 <td>{{ $logsiswa->Status_Siswa }}</td>
                 <td>{{ $logsiswa->Sekolah_Asal }}</td>
                 <td>{{ $logsiswa->Anak_Ke }}</td>
                 <td>{{ $logsiswa->Nama_Ibu }}</td>
                 <td>{{ $logsiswa->Action }}</td>
                 <td>{{ $logsiswa->Username }}</td>
                 <td>{{ $logsiswa->Waktu }}</td>
                 
                </tr> 
                @endforeach
               </tbody>
           </table>
       </div>
   </div>
</div>
        
@endsection