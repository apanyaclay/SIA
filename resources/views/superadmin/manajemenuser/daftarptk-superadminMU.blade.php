@extends('layouts.main_superadmin')


@section('container')
<div class="edit text-sm-end"><a href="{{route('tambahptk')}}" type="button" class="btn btn-secondary mt-3 mb-3" ><i class="fa-solid fa-file-pen" style="color: #ffffff;"></i> Tambah  PTK</a></div>
    

<!-- Page Heading -->
<h1 class="jadwal h3 mb-0 text-gray-800" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> Daftar Pendidik dan Tenaga Kependidikan </h1></div>
<div class="tablewali">
<table  class="table text-center table-bordered  mt-4"style="width:900px ;" >
<thead style="background-color: #748E63; color: #000;" >
    
        <tr>
            
            <th scope="col">NAMA</th>
            <th scope="col">NUPTK</th>
            <th scope="col">Jenis PTK</th>
            <td>Detail Profile</td>
            <th scope="col">AKSI</th>
            
        </tr>
        </thead>
        
        <tbody >
            <tr>
                @foreach($ptk as $ptklist)
                <td>{{ $ptklist->Nama_Guru }}</td>
                <td>{{ $ptklist->NUPTK }}</td>
                <td>{{ $ptklist->Jenis_PTK }}</td>
                <td><a type="button"  href="{{route('detailptksadmin')}}"  class="btn btn-warning">Lihat Detail</a></td>
                <td><a type="button" href="" class="btn btn-warning" ><i class="fa-solid fa-file-pen" style="color: #ffffff;"></i></a>
                <a type="button" href="" class="btn btn-warning" ><i class="fa-solid fa-delete-left" style="color: #ffffff;"></i></a>
                </td>
               
            </tr>
            @endforeach



</tbody>
</table>
</div> 
@endsection