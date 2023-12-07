@extends('layouts.main_superadmin')

@section('container')
   <!-- Page Heading -->
   <div class="isi ">
    <h1 class="jadwal h3 mb-0 text-gray-800" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> PROFILE &nbsp;  LENGKAP</h1></div>
<div class="edit text-sm-end"><a type="button" href="/editprofile-superadmin" class="btn btn-secondary mt-3 mb-3" ><i class="fa-solid fa-file-pen" style="color: #ffffff;"></i> Edit Profil</a></div>                       
    <div class="informasi py-3 px-3">
      
       <table class="table  mt-4">
       
        <tr>
          <th>ID_Kepsek</th>
          <th>Nama_Kepsek</th>
          <th>Jenjang_Pendidikan</th>
          <th>Jenis_Kelamin</th>
          <th>Tempat_Lahir</th>
          <th>Tanggal_Lahir</th>
          <th>TMT_Kerja</th>
          <th>Status</th>
          
          
          
      </tr>
  </thead>
 <tbody>
      <tr>
       @foreach($kepala_sekolah as $kepsek)
       <td>{{ $kepsek->ID_Kepsek}}</td>
       <td>{{ $kepsek->Nama_Kepsek }}</td>
       <td>{{ $kepsek->Jenjang_Pendidikan }}</td>
       <td>{{ $kepsek->Jenis_Kelamin }}</td>
       <td>{{ $kepsek->Tempat_Lahir }}</td>
       <td>{{ $kepsek->Tanggal_Lahir }}</td>
       <td>{{ $kepsek->TMT_Kerja }}</td>
       <td>{{ $kepsek->Status }}</td>
       
       
      </tr> 
      @endforeach
   </table>
    </div>
   <!-- <button type="button" class="btn btn-secondary mt-3 mb-3" >Print Jadwal</button> -->
                       </div>           
     
                </div>
            </div>
@endsection