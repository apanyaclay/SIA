@extends('layouts.main_superadmin')

@section('container')
<div class="edit text-sm-end"><a type="button" href="{{route('tambahtu')}}" class="btn btn-secondary mt-3 mb-3" ><i class="fa-solid fa-file-pen" style="color: #ffffff;"></i>Tambah Tata  Usaha</a></div>


                <!-- Page Heading -->
<h1 class="jadwal h3 mb-0 text-gray-800" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> Daftar Tata Usaha </h1></div>
<div class="tablewali">
<table  class="table text-center table-bordered  mt-4"style="width:900px ;" >
  <thead style="background-color: #748E63; color: #000;" >
    <tr>
    
      <th scope="col">ID_Pegawai</th>
      <th scope="col">Nama_Pegawai</th>
      <th scope="col">Jenjang_Pendidikan</th>
      <td>Detail Profile</td>
      <td>Aksi</td>
      <!-- <th scope="col">AKSI</th> -->
    </tr>
  </thead>
  <tbody >
    <tr>
        @foreach($tu as $tulist)
        <td>{{ $tulist->ID_Pegawai }}</td>
        <td>{{ $tulist->Nama_Pegawai }}</td>
        <td>{{ $tulist->Jenjang_Pendidikan }}</td>
        <td><a type="button"  href="{{route('detailtusadmin')}}"  class="btn btn-warning">Lihat Detail</a></td>
      <td><a type="button" href="" class="btn btn-warning" ><i class="fa-solid fa-delete-left" style="color: #ffffff;"></i></a>
      </td>
       
    </tr>
    @endforeach



</tbody>
  
    

</table>
</div> 
@endsection