@extends('layouts.main_admin')

@section('container')
   <!-- Page Heading -->
   <h1 class="jadwal h3 mb-0 text-gray-800" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> TAMBAH EKSTRAKURIKULER</h1></div>
   <br>
   <div class="tablewali">
      <form action="{{route('editekskulsPost')}}" method="POST">
        @csrf
            @foreach ($ekskul as $item)
            <div class="form-group">
                <label for="kode">Kode</label>
                <input type="text" class="form-control" id="kode" name="kode" value="{{$item->Kode_Ekskul}}" readonly>
            </div>
            <div class="form-group">
                <label for="nama">Nama Ekstrakurikuler</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{$item->Nama_Ekskul}}">
            </div>
            <div class="form-group">
                <label for="guru">Guru Ekstrakurikuler</label>
                <select class="form-control"  name="guru" id="guru">
                  <option value="" disabled selected>Silahkan Pilih</option>
                  @foreach ($data as $item)
                  <option value="{{$item->NUPTK}}">{{$item->Nama_Guru}}</option>
                  @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="hari">Hari</label>
                <select name="hari" id="hari" class="form-control">
                  <option value="" disabled selected>Silahkan Pilih</option>
                  <option value="Senin">Senin</option>
                  <option value="Selasa">Selasa</option>
                  <option value="Rabu">Rabu</option>
                  <option value="Kamis">Kamis</option>
                  <option value="Jumat">Jumat</option>
                  <option value="Sabtu">Sabtu</option>
                </select>
            </div>
            <div class="form-group">
                <label for="mulai">Waktu Mulai</label>
                <input type="time" class="form-control" id="mulai" name="mulai" value="">
            </div>
            <div class="form-group">
                <label for="selesai">Waktu Selesai</label>
                <input type="time" class="form-control" id="selesai" name="selesai" value="">
            </div>
            <button type="submit" class="btn btn-warning">Edit</button>
            </div>
            @endforeach
      </form>
  </div>
@endsection