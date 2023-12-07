@extends('layouts.main_superadmin')

@section('container')
<div class="edit text-sm-end"><a  type="button" class="btn btn-secondary mt-3 mb-3"  href="/tambahkelas-superadminMU"><i class="fa-solid fa-file-pen" style="color: #ffffff;"></i> Tambah  Kelas</a></div>
                                    
<!-- Page Heading -->
<h1 class="jadwal h3 mb-0 text-gray-800" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> DAFTAR KELAS</h1>

<div class="tablewali">
<table  class="table text-center table-bordered  mt-4"style="width:900px ;" >
<thead style="background-color: #748E63; color: #000;" >
<tr>
<th scope="col">NO.</th>
<th scope="col">KELAS</th>
<th scope="col">DETAIL</th>
</tr>
</thead>

<tbody >
    <tr>
        @foreach($kelas as $kelaslist)
        <td>{{ $kelaslist->ID_Kelas }}</td>
        <td>{{ $kelaslist->Nama_Kelas }}</td>
        <td><a type="button"  href="/listsiswa-superadminMU?kelas_id={{ $kelaslist->ID_Kelas }}"  class="btn btn-warning">Lists Siswa</a></td>
       
    </tr>
    @endforeach

       

</tbody>
</table>
</div> 
@endsection