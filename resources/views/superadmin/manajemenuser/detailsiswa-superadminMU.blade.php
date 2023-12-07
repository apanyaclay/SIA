@extends('layouts.main_superadmin')

@section('container')

    <!-- Page Heading -->
    <div class="isi ">
        <h1 class="jadwal h3 mb-0 text-gray-800" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> PROFILE &nbsp;  LENGKAP</h1></div>
                                
        <div class="informasi py-3 px-3">
          
            <table class="table  mt-4">
              <tr>
            
                <th scope="col">NISN</th>
                <th scope="col">NIPD</th>
                <th scope="col">Nama_Siswa</th>
                <th scope="col">Jenis_Kelamin</th>
                <th scope="col">Tempat_Lahir</th>
                <th scope="col">Tanggal_Lahir</th>
                <th scope="col">Agama</th>
                <th scope="col">Alamat</th>
                <th scope="col">No_hp</th>
                <th scope="col">Status dlm Keluarga</th>
                <th scope="col">Nama_Ayah</th>
                <th scope="col">Nama_Ibu</th>
                <th scope="col">Pekerjaan_Ayah</th>
                <th scope="col">Pekerjaan_Ibu</th>
                <th scope="col">No_Rek_Bank</th>
                <th scope="col">Bank_Atas_Nama</th>
                <th scope="col">Status_Siswa</th>
                <th scope="col">Sekolah_Asal</th>
                <th scope="col">Anak_Ke</th>
            </tr>
            </thead>
            
            <tbody >
                <tr>
                   
                    <td>{{ $siswa->NISN }}</td>
                    <td>{{ $siswa->NIPD }}</td>
                    <td>{{ $siswa->Nama_Siswa }}</td>
                    <td>{{ $siswa->Jenis_Kelamin }}</td>
                    <td>{{ $siswa->Tempat_Lahir }}</td>
                    <td>{{ $siswa->Tanggal_Lahir }}</td>
                    <td>{{ $siswa->Agama }}</td>
                    <td>{{ $siswa->Alamat }}</td>
                    <td>{{ $siswa->No_hp }}</td>
                    <td>{{ $siswa->Status_dlm_Klrg }}</td>
                    <td>{{ $siswa->Nama_Ayah }}</td>
                    <td>{{ $siswa->Nama_Ibu }}</td>
                    <td>{{ $siswa->Pekerjaan_Ayah }}</td>
                    <td>{{ $siswa->Pekerjaan_Ibu }}</td>
                    <td>{{ $siswa->No_Rek_Bank }}</td>
                    <td>{{ $siswa->Bank_Atas_Nama }}</td>
                    <td>{{ $siswa->Status_Siswa }}</td>
                    <td>{{ $siswa->Sekolah_Asal }}</td>
                    
               
                
                </tr>
            
      
      
            
                  
      
        </table>
        </div>
        <!-- <button type="button" class="btn btn-secondary mt-3 mb-3" >Print Jadwal</button> -->
                            </div>     
@endsection