@extends('layouts.main_guru')

@section('container')
   <!-- Page Heading -->

   <table class="table">
    <tr>
      <td>NAMA SISWA</td>
      <td>Kairi hbvibrevbi</td>
    </tr>
    <tr>
      <td>KELAS</td>
      <td>9-A</td>
    </tr>
    <tr>
      <td>WALI KELAS</td>
      <td>Asmirandah</td>
    </tr>
    <tr>
      <td>SEMESTER</td>
      <td>2</td>
    </tr>
    <tr>
      <td>TAHUN PELAJARAN</td>
      <td>2023-2014</td>
    </tr>
</table>
<!-- ISI DASHBOARD -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="isi ">


<!-- INPUT Siswa -->

<table class="table table-bordered">
<thead class="table-secondary">
<tr>
<th scope="col">TUGAS</th>
<th scope="col">ULANGAN</th>
<th scope="col">UJIAN</th>
<th scope="col">AKSI</th>
</tr>
</thead>
<tbody>
<tr>
<td><div class="nilaisiswa">
<input type="number" class="form-control" id="" placeholder="">
</div></td>
<td><div class="nilaisiswa">
<input type="number" class="form-control" id="" placeholder="">
</div></td>
<td><div class="nilaisiswa">
<input type="number" class="form-control" id="" placeholder="">
</div></td>
<td><a type="button" href="" class="btn btn-warning" ><i class="fa-solid fa-file-pen" style="color: #ffffff;"></i></a>
<a type="button" href="" class="btn btn-warning" ><i class="fa-solid fa-delete-left" style="color: #ffffff;"></i></a></td>
</tr>
</tbody>
</table>

<button type="button" class="btn btn-warning mt-3 mb-3" ><i class="fa-solid fa-floppy-disk" style="color: #ffffff;"></i> Simpan Perubahan </button>




</div>
</div>
@endsection



    