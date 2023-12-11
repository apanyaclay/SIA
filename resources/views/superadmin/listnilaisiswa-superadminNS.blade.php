@extends('layouts.main_superadmin')

@section('container')
  <!-- Page Heading -->
  <h1 class="jadwal h3 mb-0 text-gray-800" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> DAFTAR SISWA KELAS (X-Y)</h1></div>
  <div class="tablewali">
     <table  class="table text-center table-bordered  mt-4"style="width:900px ;" >
       <thead style="background-color: #748E63; color: #000;" >
         <tr>
           <th scope="col">No.</th>
           <th scope="col">TAHUN AJARAN - SEMESTER</th>
           <th scope="col">NAMA MAPEL</th>
           <th scope="col">JENIS</th>
           <th scope="col">KKM</th>
           <th scope="col">NILAI PENGETAHUAN</th>
           <th scope="col">NILAI KETERAMPILAN</th>
           <th scope="col">AKSI</th>
         </tr>
       </thead>     
       <tbody >
        @for ($i = 0; $i < count($data); $i++)
        <tr>
          <th scope="row">{{$i+1}}</th>
          <td>{{$data[$i]->Thn_Ajaran}} - {{$data[$i]->Semester}}</td>
          <td>{{$data[$i]->Nama_Mapel}}</td>
          <td>{{$data[$i]->Jenis}}</td>
          <td>{{$data[$i]->KKM}}</td>
          <td>{{$data[$i]->Nilai_Pengetahuan}}</td>
          <td>{{$data[$i]->Nilai_Keterampilan}}</td>
        <td><a type="button" href="/editraporsiswa-superadmin"  class="btn btn-warning"><i class="fa-solid fa-file-pen" style="color: #ffffff;"></i>Edit Rapor </a></td>       
          </tr>
        @endfor
       </tbody>
     </table>
     </div> 

@endsection