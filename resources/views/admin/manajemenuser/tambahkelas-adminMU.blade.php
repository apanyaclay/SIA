@extends('layouts.main_admin')


@section('container')
 <!-- Page Heading -->
 <h1 class="jadwal h3 mb-0 text-gray-800" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> TAMBAH KELAS</h1></div>
          
 <div class="tablewali">
    <form action="" method="">
        <div class="form-group">
            <label for="nomor_kelas">Nomor Kelas:</label>
            <input type="text" class="form-control" id="nomor_kelas" name="nomor_kelas" >
        </div>
        <div class="form-group">
            <label for="nama_kelas">Nama Kelas:</label>
            <input type="text" class="form-control" id="nama_kelas" name="nama_kelas">
        </div>
        <button type="submit" class="btn btn-warning">Tambah Kelas</button>
    </form>
</div> 


@endsection