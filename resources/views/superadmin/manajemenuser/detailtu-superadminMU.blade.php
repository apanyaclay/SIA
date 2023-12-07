@extends('layouts.main_superadmin')

@section('container')
   <!-- Page Heading -->
   <div class="isi ">
    <h1 class="jadwal h3 mb-0 text-gray-800" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> PROFILE &nbsp;  LENGKAP</h1></div>
<!-- <div class="edit text-sm-end"><button type="button" class="btn btn-secondary mt-3 mb-3" ><i class="fa-solid fa-file-pen" style="color: #ffffff;"></i> Edit Profil</button></div>                        -->
    <div class="informasi py-3 px-3">
      
       <table class="table  mt-4">
        <tr>
            
          <th scope="col">ID_Pegawai</th>
          <th scope="col">Nama_Pegawai</th>
          <th scope="col">Jenis_Kelamin</th>
          <th scope="col">TMT_Kerja</th>
          <th scope="col">Tempat_Lahir</th>
          <th scope="col">Tanggal_Lahir</th>
          <th scope="col">Jenjang_Pendidikan</th>
          <th scope="col">Status</th>
          
      </tr>
      </thead>
      
      <tbody >
          <tr>
              @foreach($tu as $tulist)
              <td>{{ $tulist->ID_Pegawai }}</td>
              <td>{{ $tulist->Nama_Pegawai }}</td>
              <td>{{ $tulist->Jenis_Kelamin }}</td>
              <td>{{ $tulist->TMT_Kerja }}</td>
              <td>{{ $tulist->Tempat_Lahir }}</td>
              <td>{{ $tulist->Tanggal_Lahir }}</td>
              <td>{{ $tulist->Jenjang_Pendidikan }}</td>
              <td>{{ $tulist->Status }}</td>
             
          </tr>
          @endforeach

             
   </table>
    </div>
   <!-- <button type="button" class="btn btn-secondary mt-3 mb-3" >Print Jadwal</button> -->
                       </div>           
     
                </div>
            </div>
@endsection