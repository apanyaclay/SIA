@extends('layouts.main_superadmin')

@section('container')
<div class="edit text-sm-end"><a  type="button" class="btn btn-secondary mt-3 mb-3"  href="/tambahmapel-superadmin"><i class="fa-solid fa-file-pen" style="color: #ffffff;"></i> Tambah Mata Pelajaran</a></div>

<!-- Page Heading -->
<h1 class="jadwal h3 mb-0 text-gray-800" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> DAFTAR MATA PELAJARAN KELAS (XA) </h1></div>
<div class="tablewali">
<table  class="table text-center table-bordered  mt-4"style="width:900px ;" >
<thead style="background-color: #748E63; color: #000;" >
<tr>
<th scope="col">No.</th>
<th scope="col">KODE</th>
<th scope="col">MATA PELAJARAN</th>
<th scope="col">KKM</th>
<th scope="col">GURU</th>
<th scope="col">AKSI</th>
</tr>
</thead>

<tbody >
<tr>
<th scope="row">1</th>
<td>7A</td>
<td>MATEMATIKA</td>
<td>75.5</td>
<td>beiu</td>
<td><a type="button" href="" class="btn btn-warning" ><i class="fa-solid fa-delete-left" style="color: #ffffff;"></i></a>


</tr>
<tr>
<th scope="row">2</th>
<td>7B</td>
<td>BAHASA INDONESIA</td>
<td>75.5</td>
<td>beiu</td>
<td><a type="button" href="" class="btn btn-warning" ><i class="fa-solid fa-delete-left" style="color: #ffffff;"></i></a>
</tr>
<tr>
<th scope="row">3</th>
<td>8A</td>
<td>BAHASA INGGRIS</td>
<td>75.5</td>
<td>beiu</td>
<td><a type="button" href="" class="btn btn-warning" ><i class="fa-solid fa-delete-left" style="color: #ffffff;"></i></a>
</tr>
<tr>
<th scope="row">4</th> <!--dengan looping-->
<td>8B</td>
<td>PKN</td>
<td>75.5</td>
<td>beiu</td>
<td><a type="button" href="" class="btn btn-warning" ><i class="fa-solid fa-delete-left" style="color: #ffffff;"></i></a>
</tr>
<tr>
<th scope="row">5</th> <!--dengan looping-->
<td>9A</td>
<td>IPA</td>
<td>75.5</td>
<td>syahrini syahrani </td>
<td><a type="button" href="" class="btn btn-warning" ><i class="fa-solid fa-delete-left" style="color: #ffffff;"></i></a>
</tr>
<tr>
<th scope="row">6</th> <!--dengan looping-->
<td>9B</td>
<td>IPS</td>
<td>75.5</td>
<td>beiu</td>
<td><a type="button" href="" class="btn btn-warning" ><i class="fa-solid fa-delete-left" style="color: #ffffff;"></i></a>
</tr>
</tbody>
</table>
</div> 

@endsection