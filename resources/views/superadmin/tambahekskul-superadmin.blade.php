@extends('layouts.main_superadmin')

@section('container')
   <!-- Page Heading -->
   <h1 class="jadwal h3 mb-0 text-gray-800" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> TAMBAH EKSTRAKURIKULER</h1></div>
   <br>
   <div class="tablewali">
      <form action="" method="">  
          <div class="form-group">
              <label for="number">Kode</label>
              <input type="text" class="form-control" id="number" name="number" >
          </div>
          <div class="form-group">
              <label for="kode">Nama Ekstrakurikuler</label>
              <input type="text" class="form-control" id="kode" name="kode">
          </div>
          <div class="form-group">
              <label for="mapel">Guru Ekstrakurikuler</label>
              <input type="text" class="form-control" id="mapel" name="mapel">
          </div>
          <div class="form-group">
              <label for="kkm">Hari</label>
              <input type="text" class="form-control" id="kkm" name="kkm">
          </div>
          <div class="form-group">
              <label for="guru">Waktu Mulai</label>
              <input type="text" class="form-control" id="guru" name="guru">
          </div>
          <div class="form-group">
              <label for="guru">Waktu Selesai</label>
              <input type="text" class="form-control" id="guru" name="guru">
          </div>
          <button type="submit" class="btn btn-warning">Tambah</button>
          </div>
      </form>
  </div> 
@endsection