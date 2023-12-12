@extends('layouts.main_superadmin')

@section('container')
  <!-- Page Heading -->
  <h1 class="jadwal h3 mb-0 text-gray-800" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> DAFTAR SISWA KELAS (X-Y)</h1></div>
  <div class="tablewali">
     <table  class="table text-center table-bordered  mt-4"style="width:900px ;" >
       <thead style="background-color: #748E63; color: #000;" >
         <tr>
           <th scope="col">No.</th>
           <th scope="col">NISN</th>
           <th scope="col">NAMA</th>
           <th scope="col">AKSI</th>
         </tr>
       </thead>     
       <tbody >
        @for ($i = 0; $i < count($data); $i++)
        <tr>
          <th scope="row">{{$i}}</th>
          <td>{{$data[$i]->NISN}}</td>
          <td>{{$data[$i]->Nama_Siswa}}</td>
        <td><a type="button" href="{{url('superadmin/listnilaisiswa', $data[$i]->NISN)}}"  class="btn btn-warning"><i class="fa-solid fa-file-pen" style="color: #ffffff;"></i>List Nilai</a></td>       
          </tr>
        @endfor
       </tbody>
     </table>
     </div> 

@endsection