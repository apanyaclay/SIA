@extends('layouts.main_superadmin')

@section('container')
  <!-- Page Heading -->
  <div class="edit text-sm-end"><a href="/tambahekskul-superadmin" type="button" class="btn btn-secondary mt-3 mb-3" ><i class="fa-solid fa-file-pen" style="color: #ffffff;"></i> Tambah  Ekstrakurikuler</a></div>
  <h1 class="jadwal h3 mb-0 text-gray-800" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> DAFTAR EKSTRAKURIKULER </h1></div>
  <div class="tablewali">
     <table  class="table text-center table-bordered  mt-4"style="width:950px ;" >
       <thead style="background-color: #748E63; color: #000;" >
         <tr>
           <th scope="col">KODE EKSKUL</th>
           <th scope="col">NAMA EKSKUL</th>
           <th scope="col">GURU EKSKUL</th>
           <th scope="col">HARI</th>
           <th scope="col">WAKTU MULAI</th>
           <th scope="col">WAKTU SELESAI</th>
           <th scope="col">AKSI</th>
          </tr>
        </thead>
       <tbody>
            <tr>
             @foreach($ekstrakurikuler as $ekskul)
             <td>{{ $ekskul->Kode_Ekskul}}</td>
             <td>{{ $ekskul->Nama_Ekskul }}</td>
             <td>{{ $ekskul->Guru_Ekskul }}</td>
             <td>{{ $ekskul->Hari }}</td>
             <td>{{ $ekskul->Waktu_Mulai }}</td>
             <td>{{ $ekskul->Waktu_Selesai }}</td>
             <td><a type="button" href="" class="btn btn-warning" ><i class="fa-solid fa-file-pen" style="color: #ffffff;"></i></a>
              <a type="button" href="" class="btn btn-warning" ><i class="fa-solid fa-delete-left" style="color: #ffffff;"></i></a></td>
             
             
            </tr> 
            @endforeach
             
       </tbody>
     </table>
     </div> 

@endsection